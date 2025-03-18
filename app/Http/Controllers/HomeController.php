<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chefs;

class HomeController extends Controller
{
    public function index()
    {
        $food = Food::all();
        $chefs = Chefs::all();

        return view("home",compact('food','chefs'));
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype == '1')
        {
            return view('admin.adminHome');
        }
        else
        {
            $food = Food::all();
            $chefs = Chefs::all();
            return view('home',compact('food','chefs'));
        }
    }
}
