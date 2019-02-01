<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class Chatbotcontroller extends Controller
{
     public function index(Request $request)
    {
    	$data = $request->all();
    	$id = $data["entry"];
    	
    }
}