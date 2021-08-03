<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        $users=auth()->user();
        $posts= Post::whereIn('user_id', $users)->latest()->get();
        return view('posts.create',);
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'bed' => 'required',
            'showers' => 'required',
            'size' => 'required',
            'price' => 'required',
            'year' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image'=>['required','image'],
        ]);
        $imagePath= request('image')->store('uploads','public');
            $image=Image::make(public_path("storage/{$imagePath}"))->fit(500,500);
            $image->save();
            
            auth()->user()->posts()->create([
                'name'=>$data['name'],
                'bed'=>$data['bed'],
                'showers'=>$data['showers'],
                'size'=>$data['size'],
                'price'=>$data['price'],
                'year'=>$data['year'],
                'address'=>$data['address'],
                'description'=>$data['description'],
                'image'=>$imagePath,
            ]);
            return redirect('profile/'.auth()->user()->id);
    }

    public function show()
    {
        $posts=Post::all();

        return view('allposts',compact('posts'));

    }
}
