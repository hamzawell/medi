<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Product;
use  App\Models\Category;
use  App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

function showProduct(){

    $category =  Category::all();
return view('Admin/product/category',compact('category'));
}

function get_Sub_Category($id){
  $SubCategory =   SubCategory::where('category_id',$id);
   return view('Admin/product.product',compact('SubCategory'));
}






}
