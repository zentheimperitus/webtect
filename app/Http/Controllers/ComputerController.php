<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ComputerController extends Controller
{
    public function index(){

        return view("computer.index");
    }
}
