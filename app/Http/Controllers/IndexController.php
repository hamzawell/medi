<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Category;
use  App\Models\Subcategory;
use  App\Models\Product;

class IndexController extends Controller
{

public function index(){

    $category = Category::all();
    return view('index',compact('category'));
}


function categoryGetSub(Request $request, $id)
{
    $subCategories = Subcategory::where('category_id', $id)->get(); // Fetch all subcategories
    return view('subCategories', compact('subCategories')); // Use 'subCategories' instead of 'data'
}

function subGetPro(Request $request, $id){

   $product =  Product::where('id',$id)->get();
    return view('product', compact('product'));
}
}
