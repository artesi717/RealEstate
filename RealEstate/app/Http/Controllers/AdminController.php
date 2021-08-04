<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        $posts=Post::all();

        return view('admin.approvalboard',compact('posts'));

    }
}
