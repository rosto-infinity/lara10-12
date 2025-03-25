<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
     
    //     return [
    //         'name' => $request->path(),
    //         'age' => 30,
    //     ];
    }
    public function about(Request $request)
    {
        
        return [
            'name' => $request->input('name','sohan'),
            'age' => 30,
        ];
    }
}