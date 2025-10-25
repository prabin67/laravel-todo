<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoController extends Controller
{
     public function index(): View
    {
        return view('todos.index'); // view will be created below
    }
}
