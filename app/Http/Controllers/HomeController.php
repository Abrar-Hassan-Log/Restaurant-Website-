<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chefs;
use App\Models\Cart;

class HomeController extends Controller
{
    private $count; 
    public function __construct()
    {
        $this->count = 0; 
    }
    public function cartdata()
    {
        $userId = Auth::id();
        if($userId)
        {
            $this->count = Cart::where('user_id',$userId)->count();
        }
    } 
    public function index()
    {
        $food = Food::all();
        $chefs = Chefs::all();
        $this->cartdata();
        $count=$this->count;
        return view("home",compact('food','chefs','count'));
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
            $count=$this->cartdata();
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
        $this->cartdata();
        $count=$this->count;
        $data = Cart::where('user_id', $id)->join('Food', 'carts.food_id', '=', 'Food.id')->get();
         return view("cartdata",compact('count','data'));
    }
}
