<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('data-table');
    }

    public function create(){
    	return view ('pertanyaan.create');
    }
}
