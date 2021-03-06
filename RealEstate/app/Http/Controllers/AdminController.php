<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }
    public function view()
    {
        $posts=Post::all();

        return view('admin.approvalboard',compact('posts'));

    }

    public function approved()
    {
        $posts=Post::latest()->where('status',1)->get();
       
        return view('admin.approvalboard',compact('posts'));
    }
    public function pending()
    {
        $posts=Post::latest()->where('status',0)->get();
        return view('admin.approvalboard',compact('posts'));
    }
   
    public function destroy(Post $post)
    {
        $post->delete();

        return view('admin.approvalboard',compact('posts'));

    }
}
