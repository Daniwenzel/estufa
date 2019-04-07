<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showManageUser() {
        $user = Auth::user();

        return view('manageaccount', compact('user'));
    }

  /*  public function editUser() {
        $user = User::where('email', $request->);
    }*/
}
