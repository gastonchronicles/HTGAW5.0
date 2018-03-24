<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follow;
use Auth;

class ProfileController extends Controller
{
    public function profile($username){
    	$user = User::whereUsername($username)->first();
    	return view('user.profile', compact('user'));
    }

}