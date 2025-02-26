<!DOCTYPE html>
<html lang="en">

<head>
    <title>FoodMart - Free eCommerce Grocery Store HTML Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/product.css')); ?>">
    <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- custom css file link -->

</head>

<body>

    

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.svg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="grid-container">
        <?php if($subCategories->isNotEmpty()): ?>
            <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SubCate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section id="productdetails" class="section-p1 grid-item">
                    <div class="single-pro-image">
                        <img src="<?php echo e(asset('storage/' . $SubCate->image_url)); ?>" width="100%" id="MainImg" alt="">
                    </div>
                    <div class="single-pro-details">
                        <h3><?php echo e($SubCate->subcategory); ?></h3>
                       
                        
                        <span><?php echo e($SubCate->description); ?></span>
                        <button class="normal">
                            <a href="<?php echo e(route('sub.get.product', $SubCate->id)); ?>">View Products</a>
                        </button>
                    </div>
                </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


 
  

   <script src="<?php echo e(asset('js/jquery-1.11.0.min.js')); ?>"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
   </script>
   <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
   <script src="<?php echo e(asset('js/script.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\kliff\Desktop\New folder\Medi-App\resources\views/subCategories.blade.php ENDPATH**/ ?>