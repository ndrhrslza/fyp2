<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileFrontPageController extends Controller
{
    public function index()
    {
        $username = auth()->user()->name;

        return view('profile.profilefrontpage', ['username' => $username]);
    }
}
