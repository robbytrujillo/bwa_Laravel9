<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request, $id) {
        //return "This is " . $id;
        return $request->user();
    }
}
