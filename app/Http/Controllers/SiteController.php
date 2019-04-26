<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use App\User;

class SiteController extends Controller
{
    public function home(Request $request)
    {
        $data_volunteer = \App\Volunteer::all();
        return view('sites.home', ['data_volunteer' => $data_volunteer]);
    }

    public function about()
    {
        return view('sites.about');
    }

    public function register()
    {
        return view('sites.register');
    }

    public function postregister(Request $request)
    {
        //insert ke table volunteer
        $user = new \App\User;
        $user->role = 'volunteer';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table volunteer
        $request->request->add(['user_id' => $user->id]);
        $volunteer = \App\Volunteer::create($request->all());
        return redirect('/')->with('sukses', 'Berhasil Mendaftar!');
    }

    public function profile($id)
    {
        $volunteer = \App\Volunteer::find($id);
        return view('sites.profile', ['volunteer' => $volunteer]);
    }

    public function diy()
    {
        return view('sites.diy');
    }

    public function information()
    {
        return view('sites.information');
    }
}
