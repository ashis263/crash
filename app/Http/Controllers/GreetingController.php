<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet($name = 'guest'){
        //return "Hey $name how's it going?";
        return view('greeting', [
            'name' => $name
        ]);
    }
}
