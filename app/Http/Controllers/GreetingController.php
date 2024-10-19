<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function hello(){
        return 'Hello, World from Controller!';
    }
    public function greet($name){
        return "hello, $name from Controller!";
    }
    public function sum($a, $b){
        return "The sum of $a and $b is " . ($a + $b) . " (Calculated by Controller)";
    }
}
