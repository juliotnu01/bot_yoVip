<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chatbotcontroller extends Controller
{
    public function index()
    {
    	$feeddata = file_get_contents('php://input');
    	$handle = fopen('test.txt','w');
    	fwrite($handle, $feeddata);
    	fclose($handle);
    }
}
