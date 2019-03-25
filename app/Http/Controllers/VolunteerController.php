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
}
