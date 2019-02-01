<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chatbotcontroller extends Controller
{
    public function index()
    {
    	$input json_decode(file_get_contents('php://input'), true);
    	dd($input);

    }
}
