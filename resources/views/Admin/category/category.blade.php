
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inserting</title>
  </head>
  <body>
   






    <div class="container p-5">
        <h2>Add Category</h2>
        
        <form action="{{ route('store.category') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <!-- Hidden Parent ID -->
            <input type="hidden" name="parent_id" value="{{ mt_rand(1000, 9999) }}">
    
            <!-- Category Name -->
            <div class="mb-3">
                <label for="category" class="form-label">Category Name</label>
                <input type="text" name="category" id="category" class="form-control" required>
            </div>
    
            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>
    
            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image_url" class="form-label">Upload Image</label>
                <input type="file" name="image_url" id="image_url" class="form-control" accept="image/*">
            </div>
    
            <!-- Slug -->
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control">
            </div>
    
            <!-- Meta Title -->
            <div class="mb-3">
                <label for="meta_title" class="form-label">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control">
            </div>
    
            <!-- Meta Description -->
            <div class="mb-3">
                <label for="meta_description" class="form-label">Meta Description</label>
                <textarea name="meta_description" id="meta_description" class="form-control" rows="3"></textarea>
            </div>
    
            <!-- Meta Keywords -->
            <div class="mb-3">
                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control">
            </div>
    
            {{-- <!-- Parent Category -->
            <div class="mb-3">
                <label for="parent_category" class="form-label">Parent Category</label>
                <input type="text" name="parent_category" id="parent_category" class="form-control">
            </div> --}}
    
            <!-- Checkboxes -->
            <div class="form-check">
                <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" checked>
                <label for="is_active" class="form-check-label">Active</label>
            </div>
    
            <div class="form-check mb-3">
                <input type="checkbox" name="is_featured" id="is_featured" class="form-check-input" value="1" checked>
                <label for="is_featured" class="form-check-label">Featured</label>
            </div>
    
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    







<div class="container p-5">
    <form action="{{ route('store.subcategory') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <h1>Add SubCategory</h1>
        <!-- Category Dropdown -->
        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach ($category as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
    
        <!-- Subcategory Name -->
        <div class="form-group">
            <label for="subcategory">Subcategory Name</label>
            <input type="text" name="subcategory" id="subcategory" class="form-control" required>
        </div>
    
        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>
    
        <!-- File Upload for Image -->
        <div class="form-group">
            <label for="image_url">Upload Image</label>
            <input type="file" name="image_url" id="image_url" class="form-control" accept="image/*">
        </div>
    
        <!-- Active Checkbox -->
        <div class="form-group form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" checked>
            <label for="is_active" class="form-check-label">Is Active</label>
        </div>
    
        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    

</div>


<div class="container">
@if (session('success'))
<div class="alert alert-primary" role="alert">{{session('success')}}</div>
@endif
@if (session('error'))
<div class="alert alert-primary" role="alert">{{session('error')}}</div>
@endif
</div>





<div class="container mt-5 p-5">
    <h1>Add Product</h1>
    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <!-- Category Dropdown -->
        <div class="form-group">
            <label for="sub_category_id">Select Category</label>
            <select name="sub_category_id" id="sub_category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach ($SubCategory as $Sub)
                    <option value="{{ $Sub->id }}">{{ $Sub->subcategory }}</option>
                @endforeach
            </select>
        </div>
    
        <!-- Product Name -->
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
    
        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>
        
        <!-- Price -->
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
    
        <!-- File Upload for Image -->
        <div class="form-group">
            <label for="image_url">Upload Image</label>
            <input type="file" name="image_url" id="image_url" class="form-control" accept="image/*">
        </div>
    
        <!-- Active Checkbox -->
        <div class="form-group form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" checked>
            <label for="is_active" class="form-check-label">Is Active</label>
        </div>
    
        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>

































{{-- <div>
    @if ($category)
        @foreach ($category as $cat)
            <form action="" method="POST">
                @csrf
                @method('PUT') <!-- If you're updating the category -->

                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" value="{{ $cat->id }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="parent_id" class="form-label">Parent ID</label>
                    <input type="number" class="form-control" id="parent_id" name="parent_id" value="{{ $cat->parent_id }}">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category" name="category" value="{{ $cat->category }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $cat->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image_url" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="image_url" name="image_url" value="{{ $cat->image_url }}">
                </div>

                <div class="mb-3">
                    <label for="is_active" class="form-label">Is Active</label>
                    <select class="form-select" id="is_active" name="is_active">
                        <option value="1" {{ $cat->is_active ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$cat->is_active ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="is_featured" class="form-label">Is Featured</label>
                    <select class="form-select" id="is_featured" name="is_featured">
                        <option value="1" {{ $cat->is_featured ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$cat->is_featured ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ $cat->sort_order }}">
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $cat->slug }}">
                </div>

                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $cat->meta_title }}">
                </div>

                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <input type="text" class="form-control" id="meta_description" name="meta_description" value="{{ $cat->meta_description }}">
                </div>

                <div class="mb-3">
                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $cat->meta_keywords }}">
                </div>

                <div class="mb-3">
                    <label for="parent_category" class="form-label">Parent Category</label>
                    <input type="text" class="form-control" id="parent_category" name="parent_category" value="{{ $cat->parent_category }}">
                </div>

                <div class="mb-3">
                    <label for="created_at" class="form-label">Created At</label>
                    <input type="text" class="form-control" id="created_at" value="{{ $cat->created_at }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="updated_at" class="form-label">Updated At</label>
                    <input type="text" class="form-control" id="updated_at" value="{{ $cat->updated_at }}" disabled>
                </div>

                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
            <hr>
        @endforeach    
    @else
        <p>No categories found.</p>
    @endif
</div> --}}
