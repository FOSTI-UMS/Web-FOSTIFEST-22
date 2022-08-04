<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Exports\teamCompExport;
use Maatwebsite\Excel\Facades\Excel;

class CompetitionController extends Controller
{
    public function index()
    {
        return view('form-lomba', [
            'title' => 'Registrasi CTF | FOSTIFEST'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'payment' => 'image|file|required'
        ]);

        $extension = $request->payment->extension();
        $fileName = $request->name . '-CTF-' . date('dmYhis') . '.' . $extension;
        $payment = $request->file('payment')->storeAs('competition', $fileName);

        Competition::create([
            'name' => $request->name,
            'email' => $request->email,
            'payment' => $payment
        ]);

        return redirect('/');
    }

    public function export()
    {
        return Excel::download(new teamCompExport, 'tim_lomba.xlsx');
    }
}
