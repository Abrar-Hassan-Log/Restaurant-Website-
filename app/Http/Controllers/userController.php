<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Food;
use App\Models\Chefs;
use App\Models\Order;
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
public function viewupdate($id)
{
    $fooddata = Food::find($id);
    return view('admin.edit',compact('fooddata'));
}
public function updatefood(Request $request, $id)
{

    if($request->hasFile('image'))
        {
            $fooditem = Food::find($id);
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'),$imageName);
            $fooditem->title=$request->title;
            $fooditem->price=$request->price;
            $fooditem->image=$imageName;
            $fooditem->description=$request->description;
            $fooditem->save();
            
            return redirect()->route('food')->with('success','Successfully updated');
        }
}
public function viewChef()
{
    $chefs = Chefs::all();

    return view('admin.chefsadmin',compact('chefs'));
}
public function storechef(request $request)
{
    if($request->hasFile('image'))
    {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('chefsimages'),$imageName);
        Chefs::create([
            'name'=>$request->name,
            'speciality'=>$request->speciality,
            'image'=>$imageName
        ]);
        return redirect()->route('viewChef')->with('success','Chefs Store Successfully');
    }
}
//Chefs Delete data
public function destroyChef($id)
{
    $dataChef = Chefs::find($id);
    $dataChef->delete();
    return redirect()->route('viewChef')->with('success', 'Deleted Successfully');
}   
//update chef view
public function updateChefView($id)
{
    $chefupdate = Chefs::find($id);
    return view('admin.editchefs',compact('chefupdate'));
}
//Update chefs data
public function updateChefsData(request $request,$id)
{
    if($request->hasFile('image'))
        {
            $chefsData = Chefs::find($id);
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('chefsimages'),$imageName);
            $chefsData->name=$request->name;
            $chefsData->speciality=$request->speciality;
            $chefsData->image=$imageName;
            $chefsData->save();
        return redirect()->route('viewChef')->with('success','Successfully updated');       
     }
}
public function ordersView()
{
    $orders = Order::all();
    return view('admin/order',compact('orders'));
}
}
