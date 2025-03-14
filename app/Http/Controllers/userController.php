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
        $foodData = Food::all();
        return view("admin.food",compact('foodData'));
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
                'image'=>$imageName,
                'description'=>$request->description
            ]);
            $foodData = Food::all();
            return view("admin.food",compact('foodData'));
        }
    }
    public function deleteFood($id)
{
    $itemfind = Food::find($id);

    if (!$itemfind) {
        return redirect()->back()->with('error', 'Food item not found.');
    }

    $itemfind->delete();

    return redirect()->route('food')->with('success', 'Food item deleted successfully.');

}

    
}
