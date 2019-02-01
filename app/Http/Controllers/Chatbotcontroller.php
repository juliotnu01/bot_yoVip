<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class Chatbotcontroller extends Controller
{
     public function index(Request $request)
    {
    	// $data = $request->all();
    	// dd($data);
    	$this->verifytoken($request);
    	
    }

    private function verifytoken(Request $request){

        if ($request->input("hub.mode") === "subscribe" && $request->input("hub.verify_token") === env("MESSENGER_VERIFY_TOKEN")) {
        return response($request->input("hub.challenge"), 200);
        dd($request);
        }
    }
}