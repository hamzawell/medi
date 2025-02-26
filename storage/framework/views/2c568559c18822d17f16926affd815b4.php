
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
        
        <form action="<?php echo e(route('store.category')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
    
            <!-- Hidden Parent ID -->
            <input type="hidden" name="parent_id" value="<?php echo e(mt_rand(1000, 9999)); ?>">
    
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
    <form action="<?php echo e(route('store.subcategory')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    <h1>Add SubCategory</h1>
        <!-- Category Dropdown -->
        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="">Select Category</option>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php if(session('success')): ?>
<div class="alert alert-primary" role="alert"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<?php if(session('error')): ?>
<div class="alert alert-primary" role="alert"><?php echo e(session('error')); ?></div>
<?php endif; ?>
</div>





<div class="container mt-5 p-5">
    <h1>Add Product</h1>
    <form action="<?php echo e(route('store.product')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    
        <!-- Category Dropdown -->
        <div class="form-group">
            <label for="sub_category_id">Select Category</label>
            <select name="sub_category_id" id="sub_category_id" class="form-control" required>
                <option value="">Select Category</option>
                <?php $__currentLoopData = $SubCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($Sub->id); ?>"><?php echo e($Sub->subcategory); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


































<?php /**PATH C:\Users\kliff\Desktop\New folder\Medi-App\resources\views/Admin/category/category.blade.php ENDPATH**/ ?>