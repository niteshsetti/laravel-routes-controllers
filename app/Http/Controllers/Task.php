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
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('uploads/images/',$filename);
            $post->image=$filename;
        }
        $post->save();
        return redirect('task')->with('status', 'Data Inserted Successfully !! ');
    }
    public function edit($gets){
        return view('update',["gets"=>$gets]);
    }
    public function delete($getss){
        return view('delete',["getss"=>$getss]);
    }
    public function store1(Request $requests)
    {
        $posts = new Post;
        $posts=Post::find($requests->names);
        $save=$requests->changes;
        $posts->$save=$requests->new;
        $posts->save();
        return redirect('reads');
    }
    public function store2(Request $requestd)
    {
        $post=Post::where("id",$requestd->names);
        $post->delete();
        return redirect('reads');
    }

}
