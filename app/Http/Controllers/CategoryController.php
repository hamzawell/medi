<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Category;
use  App\Models\SubCategory;
use  App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    
function index(){
$category = Category::all();
$SubCategory = SubCategory::all();


return view('Admin/category/category',compact('category','SubCategory'));
}





function store(Request $request){
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'subcategory' => 'required|string|max:255',
        'description' => 'required|string',
        'image_url' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        'is_active' => 'nullable|boolean',
    ]);

    // Handle file upload
    $imageUrl = null;
    if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
        $imageUrl = $request->file('image_url')->store('subcategories', 'public'); // Save to public/storage/subcategories
    }

    // Create the new subcategory record
    Subcategory::create([
        'category_id' => $request->category_id,
        'subcategory' => $request->subcategory,
        'description' => $request->description,
        'image_url' => $imageUrl, // Store the file path in the database
        'is_active' => $request->has('is_active'),
    ]);

    return redirect()->route('category.index')->with('success', 'Subcategory created successfully!');

}




function storeProduct(Request $request){
    // Validate incoming data
    $request->validate([
        'sub_category_id' => 'required|exists:subcategories,id',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image_url' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        'is_active' => 'nullable|boolean',
    ]);

    // Handle file upload
    $imageUrl = null;
    if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
        $imageUrl = $request->file('image_url')->store('products', 'public'); // Store file in 'public/products' directory
    }

    // Create Product
    $product = Product::create([
        'sub_category_id' => $request->sub_category_id, 
        'name' => $request->name,
        'price' => $request->price, // Corrected 'napriceme' to 'price'
        'description' => $request->description,
        'image_url' => $imageUrl, // Store the file path in the database
        'is_active' => $request->has('is_active'), // Use 'has' method for boolean value
    ]);

    // Check if product creation was successful
    if ($product) {
        return redirect()->route('category.index')->with('success', 'Product created successfully!');
    } else {
        return redirect()->back()->with('error', 'Failed to create product');
    }
}





public function storeCategory(Request $request)
{
    $request->validate([
        'category'        => 'required|string|max:255',
        'description'     => 'nullable|string',
        'image_url'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'meta_title'      => 'nullable|string|max:255',
        'meta_description'=> 'nullable|string',
        'meta_keywords'   => 'nullable|string',
        'slug'            => 'nullable|string|max:255',
        'parent_category' => 'nullable|string|max:255',
        'is_active'       => 'sometimes|boolean',
        'is_featured'     => 'sometimes|boolean',
    ]);

    // Handle image upload if available
    $imagePath = null;
    if ($request->hasFile('image_url')) {
        $imagePath = $request->file('image_url')->store('categories', 'public');
    }

    // Generate slug if not provided
    $slug = $request->input('slug') ?? Str::slug($request->input('category'));

    // Insert category into the database
    $category = Category::create([
        'parent_id'       => $request->parent_id, // just for show
        'category'        => $request->input('category'),
        'description'     => $request->input('description'),
        'image_url'       => $imagePath,
        'slug'            => $slug,
        'meta_title'      => $request->input('meta_title') ?? $request->input('category'),
        'meta_description'=> $request->input('meta_description') ?? $request->input('description'),
        'meta_keywords'   => $request->input('meta_keywords'),
        'parent_category' => $request->input('parent_category'),
        'is_active'       => $request->has('is_active') ? 1 : 0,
        'is_featured'     => $request->has('is_featured') ? 1 : 0,
    ]);

    // Redirect with success message
    return redirect()->back()->with('success', 'Category added successfully!');
}




}