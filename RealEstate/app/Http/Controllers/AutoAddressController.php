<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoAddressController extends Controller
{
    public function googleAutoAdrress(Request $request)
    {
        return view('search');
    }
}
