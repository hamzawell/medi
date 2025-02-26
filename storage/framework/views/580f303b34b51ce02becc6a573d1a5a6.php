
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   

    <div class="table-responsive container">
        <?php if($category): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Parent ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Image URL</th>
                        <th>Is Active</th>
                        <th>Is Featured</th>
                        <th>Sort Order</th>
                        <th>Slug</th>
                        <th>Meta Title</th>
                        <th>Meta Description</th>
                        <th>Meta Keywords</th>
                        <th>Parent Category</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($cat->id); ?></td>
                            <td><?php echo e($cat->parent_id); ?></td>
                            <td><?php echo e($cat->category); ?></td>
                            <td><?php echo e($cat->description); ?></td>
                            <td><?php echo e($cat->image_url); ?></td>
                            <td><?php echo e($cat->is_active ? 'Yes' : 'No'); ?></td>
                            <td><?php echo e($cat->is_featured ? 'Yes' : 'No'); ?></td>
                            <td><?php echo e($cat->sort_order); ?></td>
                            <td><?php echo e($cat->slug); ?></td>
                            <td><?php echo e($cat->meta_title); ?></td>
                            <td><?php echo e($cat->meta_description); ?></td>
                            <td><?php echo e($cat->meta_keywords); ?></td>
                            <td><?php echo e($cat->parent_category); ?></td>
                            <td><?php echo e($cat->created_at); ?></td>
                            <td><?php echo e($cat->updated_at); ?></td>
                            <td>
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No categories found.</p>
        <?php endif; ?>
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


































<?php /**PATH C:\Users\kliff\Desktop\New folder\Medi-App\resources\views/category/category.blade.php ENDPATH**/ ?>