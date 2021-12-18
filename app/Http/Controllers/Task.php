<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
class Task extends Controller
{
    public function index()
    {
        return view('task');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->languages = $request->languages;
        $post->gender = $request->gen;
        $post->phone = $request->phone;
        $post->description = $request->subject;
        $post->country = $request->country;
        $post->state = $request->state;
        $post->city = $request->city;
        $post->image = $request->image;

        if($request->hasfile('image')){
             $file=$request->file('image');
             $extension=$file->getClientOriginalExtension();
             $filename=time().".".$extension;
             $file->move('uploads/images/',$filename);
             $post->image=$filename;
         }
        $post->save();
        return redirect('form')->with('status','Data inserted Successfully');

    }
    public function store2($getss){
       DB::delete('delete from countrie where Id=?',[$getss]);
       echo "Deleted Successfully";
       return redirect('reads')->with('status','Data Deleted Successfully');

    }
    public function edit($id){
        $users = DB::select('select * from countrie where id = ?',[$id]);
        return view('update',['users'=>$users]);
    }
    public function store1(Request $request,$id)
    {
        $name = $request->name;
        $email = $request->email;
        $languages = $request->languages;
        $gender = $request->gen;
        $phone = $request->phone;
        $description = $request->subject;
        $country = $request->country;
        $state = $request->state;
        $city = $request->city;
        //$image = $request->image;
        DB::update('update countrie set name = ?,email=?,languages=?,gender=?,phone=?, description=?,country=?,state=?,city=? where id = ?',[$name,
        $email,
        $languages,
        $gender,
        $phone,
        $description,
        $country,
        $state,
        $city,
        $id]);
        echo "Data Updated";
        return redirect('reads')->with('status','Data Updated Successfully');
    }

}
