<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {

    //	echo "Hello World";
    	return view("test");
    }
    public function about()
    {
    	return view('about');
    	//echo "Another route example";
    }
}
