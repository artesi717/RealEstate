<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;
// use Illuminate\Support\Facades\DB;

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
            'location' => 'required',
            'property_type' => 'required',
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
                'location'=>$data['location'],
                'property_type'=>$data['property_type'],
                'price'=>$data['price'],
                'year'=>$data['year'],
                'address'=>$data['address'],
                'description'=>$data['description'],
                'image'=>$imagePath,
            ]);
            return redirect('profile/'.auth()->user()->id);
    }
    public function show(Post $post)
    {
        return view('propertypage',compact('post'));
    }




    public function view()
    {   

      $posts=Post::latest()->filter()->get();
                        

        return view('search',compact('posts'));
    }
    
   


    public function update(Post $post)
    {
        $data=request()->validate([
            'status'=>'required',
        ]);
        $post->fill($data)->save();
        return redirect("/admindashboard");
    }
    
}
