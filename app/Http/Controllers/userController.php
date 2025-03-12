<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function user()
    {
        $userData = User::all();
        return view('admin.user',compact('userData'));
    }
}
