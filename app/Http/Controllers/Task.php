<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;  

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
}
