<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
	public function index(){
		$data = [
			"name" =>"Sutrisno Wijaya",
			"email" => "thekwards@gmail.com",
			"phone" => ["+(62) 8179587839","08179587839"],
			"address" =>[]
		];

    	return view('about',$data);
    }
}
