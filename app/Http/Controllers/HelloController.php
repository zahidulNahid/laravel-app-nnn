<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HelloController extends Controller
{
    // Show all userspublic function index()
    public function index()
    {
        return response()->json(['message' => 'Hello World']);
    }

}
