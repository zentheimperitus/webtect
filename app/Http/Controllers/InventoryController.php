<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class InventoryController extends Controller
{
    public function index(){

        return view("inventory.index");
    }
}
