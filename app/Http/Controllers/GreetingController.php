<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function index() {
        $data = [
            'greeting' => 'Welcome To Laravel!',
            'time' => date('H'),
            'fruits' => ['Apple', 'Banana', 'Orange']
        ];

        return view('greeting', $data);
    }
    
    
    
    // public function hello(){
    //     return 'Hello, World from Controller!';
    // }
    // public function greet($name){
    //     return "hello, $name from Controller!";
    // }
    // public function sum($a, $b){
    //     return "The sum of $a and $b is " . ($a + $b) . " (Calculated by Controller)";
    // }
}
