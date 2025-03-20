<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chefs;
use App\Models\Cart;

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

            $userId = Auth::id();
            $count = Cart::where('user_id',$userId)->count();
            $food = Food::all();
            $chefs = Chefs::all();

            return view('home',compact('food','chefs','count'));
        }
    }
    public function addToCart(request $request, $id)
    {
        if(Auth::id())
        {
            $userId = Auth::id();
            $foodId = $id;
            $qunantity = $request->quantity;
            $cart = new Cart;
            $cart->user_id = $userId;
            $cart->food_id = $foodId;
            $cart->quantity = $qunantity;
            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

    //show cart data
    public function showCart(request $request, $id)
    {
        $data=Cart::where('user_id',$id)->join('food','Carts.food_id','=','food.id')->get();
        return response()->json(['data' => $data]); 
    }
}
