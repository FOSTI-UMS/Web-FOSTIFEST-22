<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendMail;
use App\Models\Leader;
use App\Models\Member1;
use App\Models\Member2;
use App\Models\Webinar;
use App\Mail\WebinarMail;
use App\Models\Competition;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $competition = Competition::where('user_id', '!=', null)->get();
        $verif = $competition->count();

        $competition2 = Competition::where('user_id', null)->get();
        $notVerif = $competition2->count();

        return view('admin',  [
            'title' => 'Dashboard Admin | FOSTIFEST',
            'verif' => $verif,
            'notVerif' => $notVerif
        ]);
    }

    public function webinar()
    {
        $competition = Competition::where('user_id', '!=', null)->get();
        $verif = $competition->count();

        $competition2 = Competition::where('user_id', null)->get();
        $notVerif = $competition2->count();

        $webinar =  Webinar::all();
        return view('admin-webinar', [
            'webinar' => $webinar,
            'title' => 'Daftar Peserta Webinar | FOSTIFEST',
            'verif' => $verif,
            'notVerif' => $notVerif
        ]);
    }

    public function lomba()
    {
        $competition = Competition::where('user_id', '!=', null)->get();
        $verif = $competition->count();

        $competition2 = Competition::where('user_id', null)->get();
        $notVerif = $competition2->count();

        $leader = Leader::all();
        $member1 = Member1::all();
        $member2 = Member2::all();
        return view('admin-lomba', [
            'leader' => $leader,
            'member1' => $member1,
            'member2' => $member2,
            'verif' => $verif,
            'notVerif' => $notVerif,
            'title' => 'Daftar Peserta Lomba | FOSTIFEST'
        ]);
    }

    public function notverified()
    {

        $competition = Competition::where('user_id', '!=', null)->get();
        $verif = $competition->count();

        $competition2 = Competition::where('user_id', null)->get();
        $notVerif = $competition2->count();

        return view('admin-wait', [
            'competition' => $competition2,
            'title' => 'Peserta Lomba Not Verified | FOSTIFEST',
            'verif' => $verif,
            'notVerif' => $notVerif
        ]);
    }

    public function verified()
    {
        $competition = Competition::where('user_id', '!=', null)->get();
        $verif = $competition->count();

        $competition2 = Competition::where('user_id', null)->get();
        $notVerif = $competition2->count();
        return view('admin-verif', [
            'competition' => $competition,
            'title' => 'Peserta Lomba Verified | FOSTIFEST',
            'verif' => $verif,
            'notVerif' => $notVerif
        ]);
    }

    public function formVerification(Competition $competition)
    {
        $competition1 = Competition::where('user_id', '!=', null)->get();
        $verif = $competition1->count();

        $competition2 = Competition::where('user_id', null)->get();
        $notVerif = $competition2->count();

        return view('admin-waitToVerif', [
            'competition' => $competition,
            'title' => 'Validasi Peserta Lomba | FOSTIFEST',
            'verif' => $verif,
            'notVerif' => $notVerif
        ]);
    }

    public function destroyWebinar(Webinar $webinar)
    {
        if ($webinar->sg_1) {
            Storage::delete($webinar->sg_1);
        }
        if ($webinar->sg_2) {
            Storage::delete($webinar->sg_2);
        }
        if ($webinar->sg_3) {
            Storage::delete($webinar->sg_3);
        }
        if ($webinar->payment) {
            Storage::delete($webinar->payment);
        }
        $webinar->delete();
        return redirect('/peserta-webinar');
    }

    public function verifCompetition(Competition $competition, Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);

        $password = Str::random(15);
        $passwordHash = Hash::make($password);

        User::create([
            'username' => $request->username,
            'password' => $passwordHash,
            'status' => 'Peserta'
        ]);

        $userCek = User::select('*')->where('username', '=', $request->username)->first();

        $competition->update(['user_id' => $userCek->id]);

        $dataSend = ['username' => $request->username, 'password' => $password];

        Mail::to($competition->email)->send(new SendMail($dataSend));

        return redirect('/peserta-lomba-notverified');
    }

    public function sendMailUser(Webinar $webinar)
    {
        Mail::to($webinar->email)->send(new WebinarMail($webinar));

        return redirect('/peserta-webinar')->with('success', 'Email sudah dikirim');
    }
}
