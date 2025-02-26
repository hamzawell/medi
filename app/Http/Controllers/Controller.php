<?php

namespace App\Http\Controllers;
use  App\Models\Category;


abstract class Controller
{
  public function index(){

    $Category = Category::all();
  return view('index',compact('Category'));
  }
}
