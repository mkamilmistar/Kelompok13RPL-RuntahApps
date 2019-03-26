<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        $data_volunteer = \App\Volunteer::all();
        return view('Volunteer.index', ['data_volunteer' => $data_volunteer]);
    }

    public function create(Request $request)
    {
        \App\Volunteer::create($request->all());
        return redirect('/volunteer')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function update($id)
    {
        $volunteer = \App\Mahasiswa::find($id);
        return view('/volunteer', ['volunteer' => $volunteer]);
    }
}
