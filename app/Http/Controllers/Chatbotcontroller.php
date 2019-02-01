<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chatbotcontroller extends Controller
{
    public function index()
    {
    	$feeddata = file_get_contents(filename: 'php://inpunt');
    	$handle = fopen(filename:'test.txt', mode:'w');
    	fwrite($handle, $feeddata);
    	fclose($handle);
    }
}
