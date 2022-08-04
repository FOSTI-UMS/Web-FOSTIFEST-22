<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Member;
use App\Models\Member1;
use App\Models\Member2;
use Illuminate\Http\Request;
use App\Exports\member1CompExport;
use App\Exports\memberCompExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class ParticipantController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function team()
    {
        $leader = Leader::where('competition_id', auth()->user()->competition->id)->get();
        $member1 = Member1::where('competition_id', auth()->user()->competition->id)->get();
        $member2 = Member2::where('competition_id', auth()->user()->competition->id)->get();
        return view('dashboard-tim', ['leader' => $leader, 'member1' => $member1, 'member2' => $member2]);
    }

    public function teamLeader()
    {
        $leader = Leader::where('competition_id', auth()->user()->competition->id)->first();
        return view('dashboard-ketua',  ['leader' => $leader]);
    }

    public function teamMember()
    {
        $member1 = Member1::where('competition_id', auth()->user()->competition->id)->first();
        $member2 = Member2::where('competition_id', auth()->user()->competition->id)->first();
        return view('dashboard-anggota', ['member1' => $member1, 'member2' => $member2]);
    }

    public function guideline()
    {
        $file = "rulebook/RULEBOOK_CAPTURE_THE_FLAG_CTF_FOSTIFEST_2022.pdf";
        return response()->download($file);
    }

    public function storeLeader(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'email' => 'required',
            'name' => 'required',
            'agency' => 'required',
            'ktm' => 'image|file',
            'idcard' => 'image|file|required'
        ]);

        $ktm = '-';
        $idcard = '-';

        if ($request->ktm) {
            $extension = $request->ktm->extension();
            $fileName = $request->team_name . '-' . $request->name . '-ketua-' . date('dmYhis') . '.' . $extension;
            $ktm = $request->file('ktm')->storeAs('ktmComp', $fileName);
        }

        $extension2 = $request->idcard->extension();
        $fileName2 = $request->team_name . '-' . $request->name . '-ketua-' . date('dmYhis') . '.' . $extension2;
        $idcard = $request->file('idcard')->storeAs('idCard', $fileName2);

        Leader::create([
            'team_name' => $request->team_name,
            'email' => $request->email,
            'name' => $request->name,
            'agency' => $request->agency,
            'ktm' => $ktm,
            'idcard' => $idcard,
            'competition_id' => auth()->user()->competition->id
        ]);

        return redirect('/dashboard-peserta/ketua');
    }

    public function storeMember1(Request $request)
    {
        $request->validate([
            'team_name1' => 'required',
            'email1' => 'required',
            'name1' => 'required',
            'agency1' => 'required',
            'ktm1' => 'image|file',
            'idcard1' => 'image|file|required'
        ]);

        $ktm = '-';
        $idcard = '-';

        if ($request->ktm1) {
            $extension = $request->ktm1->extension();
            $fileName = $request->team_name1 . '-' . $request->name1 . '-anggota-' . date('dmYhis') . '.' . $extension;
            $ktm = $request->file('ktm1')->storeAs('ktmComp', $fileName);
        }

        $extension2 = $request->idcard1->extension();
        $fileName2 = $request->team_name1 . '-' . $request->name1 . '-anggota-' . date('dmYhis') . '.' . $extension2;
        $idcard = $request->file('idcard1')->storeAs('idCard', $fileName2);

        Member1::create([
            'team_name' => $request->team_name1,
            'email' => $request->email1,
            'name' => $request->name1,
            'agency' => $request->agency1,
            'ktm' => $ktm,
            'idcard' => $idcard,
            'competition_id' => auth()->user()->competition->id
        ]);

        return redirect('/dashboard-peserta/anggota');
    }

    public function storeMember2(Request $request)
    {
        $request->validate([
            'team_name2' => 'required',
            'email2' => 'required',
            'name2' => 'required',
            'agency2' => 'required',
            'ktm2' => 'image|file',
            'idcard2' => 'image|file|required'
        ]);

        $ktm = '-';
        $idcard = '-';

        if ($request->ktm2) {
            $extension = $request->ktm2->extension();
            $fileName = $request->team_name2 . '-' . $request->name2 . '-anggota-' . date('dmYhis') . '.' . $extension;
            $ktm = $request->file('ktm2')->storeAs('ktmComp', $fileName);
        }

        $extension2 = $request->idcard2->extension();
        $fileName2 = $request->team_name2 . '-' . $request->name2 . '-anggota-' . date('dmYhis') . '.' . $extension2;
        $idcard = $request->file('idcard2')->storeAs('idCard', $fileName2);

        Member2::create([
            'team_name' => $request->team_name2,
            'email' => $request->email2,
            'name' => $request->name2,
            'agency' => $request->agency2,
            'ktm' => $ktm,
            'idcard' => $idcard,
            'competition_id' => auth()->user()->competition->id
        ]);

        return redirect('/dashboard-peserta/anggota');
    }

    // Leader

    public function showEditLeader(Leader $leader)
    {
        return view('dashboard-edit-leader', ['leader' => $leader]);
    }

    public function editLeader(Request $request, Leader $leader)
    {
        $request->validate([
            'team_name' => 'required',
            'email' => 'required',
            'name' => 'required',
            'agency' => 'required',
            'ktm' => 'image|file',
            'idcard' => 'image|file'
        ]);

        $ktm = $request->oldImage;
        $idCard = $request->oldImage2;

        if ($request->file('ktm')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $extension = $request->ktm->extension();
            $fileName = $request->team_name . '-' . $request->name . '-ketua-' . date('dmYhis') . '.' . $extension;
            $ktm = $request->file('ktm')->storeAs('ktmComp', $fileName);
        }
        if ($request->file('idcard')) {
            if ($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
            $extension2 = $request->idcard->extension();
            $fileName2 = $request->team_name . '-' . $request->name . '-ketua-' . date('dmYhis') . '.' . $extension2;
            $idCard = $request->file('idcard')->storeAs('idCard', $fileName2);
        }

        if ($request->agency == 'umum') {
            $ktm = '-';
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
        }


        $leader->update([
            'name' => $request->name,
            'agency' => $request->agency,
            'ktm' => $ktm,
            'idcard' => $idCard,
        ]);

        return redirect('/dashboard-peserta/ketua');
    }

    // Member 1

    public function showEditMember1(Member1 $member1)
    {
        return view('dashboard-edit-member1', ['member1' => $member1]);
    }

    public function editMember1(Request $request, Member1 $member1)
    {
        $request->validate([
            'team_name' => 'required',
            'email' => 'required',
            'name' => 'required',
            'agency' => 'required',
            'ktm' => 'image|file',
            'idcard' => 'image|file'
        ]);

        $ktm = $request->oldImage;
        $idCard = $request->oldImage2;

        if ($request->file('ktm')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $extension = $request->ktm->extension();
            $fileName = $request->team_name . '-' . $request->name . '-anggota-' . date('dmYhis') . '.' . $extension;
            $ktm = $request->file('ktm')->storeAs('ktmComp', $fileName);
        }
        if ($request->file('idcard')) {
            if ($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
            $extension2 = $request->idcard->extension();
            $fileName2 = $request->team_name . '-' . $request->name . '-anggota-' . date('dmYhis') . '.' . $extension2;
            $idCard = $request->file('idcard')->storeAs('idCard', $fileName2);
        }

        if ($request->agency == 'umum') {
            $ktm = '-';
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
        }


        $member1->update([
            'name' => $request->name,
            'agency' => $request->agency,
            'ktm' => $ktm,
            'idcard' => $idCard,
        ]);

        return redirect('/dashboard-peserta/anggota');
    }

    // Member2

    public function showEditMember2(Member2 $member2)
    {
        return view('dashboard-edit-member2', ['member2' => $member2]);
    }

    public function editMember2(Request $request, Member2 $member2)
    {
        $request->validate([
            'team_name' => 'required',
            'email' => 'required',
            'name' => 'required',
            'agency' => 'required',
            'ktm' => 'image|file',
            'idcard' => 'image|file'
        ]);

        $ktm = $request->oldImage;
        $idCard = $request->oldImage2;

        if ($request->file('ktm')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $extension = $request->ktm->extension();
            $fileName = $request->team_name . '-' . $request->name . '-anggota-' . date('dmYhis') . '.' . $extension;
            $ktm = $request->file('ktm')->storeAs('ktmComp', $fileName);
        }
        if ($request->file('idcard')) {
            if ($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }
            $extension2 = $request->idcard->extension();
            $fileName2 = $request->team_name . '-' . $request->name . '-anggota-' . date('dmYhis') . '.' . $extension2;
            $idCard = $request->file('idcard')->storeAs('idCard', $fileName2);
        }

        if ($request->agency == 'umum') {
            $ktm = '-';
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
        }


        $member2->update([
            'name' => $request->name,
            'agency' => $request->agency,
            'ktm' => $ktm,
            'idcard' => $idCard,
        ]);

        return redirect('/dashboard-peserta/anggota');
    }

    public function export()
    {
        return Excel::download(new memberCompExport, 'peserta_lomba.xlsx');
    }
}
