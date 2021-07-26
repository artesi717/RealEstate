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
        return view('posts.create');
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'bed' => 'required',
            'showers' => 'required',
            'size' => 'required',
            'image'=>['required','image'],
        ]);
        $imagePath= request('image')->store('uploads','public');
            $image=Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
            $image->save();
            
            auth()->user()->posts()->create([
                'name'=>$data['name'],
                'bed'=>$data['bed'],
                'showers'=>$data['showers'],
                'size'=>$data['size'],
                'image'=>$imagePath,
            ]);
    }

    public function show(Post $post)
    {
        $users=auth()->user();
        $posts= Post::whereIn('user_id', $users)->latest()->get();

        return view('posts.show',compact('post'));
    }
}
