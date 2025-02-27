<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class InventoryController extends Controller
{
    public function index(){

        return view("inventory.index");
    }


    public function create(){

        return view("inventory.create");

    }
    public function category(){

        return view("inventory.category");

    }


}
