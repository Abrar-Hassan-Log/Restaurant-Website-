<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Food;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function user()
    {
        $userData = User::all();
        return view('admin.user',compact('userData'));
    }
    public function deleteUser($id)
    {
        $userDelete = User::find($id);
        $userDelete->delete();
        return redirect()->back()->with('success','User Delete Successfully.');
    }
    public function createFood()
    {
        return view("admin.food");
    }
    public function upload(Request $request)
    {
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'),$imageName);
            Food::create([
                'title'=>$request->title,
                'price'=>$request->price,
                'image'=>'upload/'.$imageName,
                'description'=>$request->description
            ]);
                }
    }
}
