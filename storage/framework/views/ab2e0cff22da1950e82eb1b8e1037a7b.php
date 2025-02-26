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
    <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- custom css file link -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/category.css')); ?>">

</head>

<body>

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.svg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if($product->isNotEmpty()): ?>
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section id="productdetails" class="section-p1 mb-5">
                <div class="single-pro-image">
                    <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" width="100%" id="MainImg"
                        alt="">
                    <div class="small-image-group">
                        <div class="small-img-col"><img src="images/products/f1.jpg" width="100%" class="small-img"
                                alt=""></div>
                        <div class="small-img-col"><img src="images/products/f2.jpg" width="100%" class="small-img"
                                alt=""></div>
                        <div class="small-img-col"><img src="images/products/f3.jpg" width="100%" class="small-img"
                                alt=""></div>
                        <div class="small-img-col"><img src="images/products/f4.jpg" width="100%" class="small-img"
                                alt=""></div>
                    </div>
                </div>
                <div class="single-pro-details" style="width: 38% !important;">
                  
                    <h4><?php echo e($product->name); ?></h4>

                    <?php if($product->composition === 'drop'): ?>
                        <select>
                            <option>Select Size</option>
                            <option>XL</option>
                            <option>XXL</option>
                            <option>Small</option>
                            <option>Large</option>
                        </select>
                    <?php endif; ?>




                    <input type="number" value="1">
                    <button class="normal">Add to Cart</button>

                    <h4>Product Details</h4>
                    <span>
                        <?php echo e($product->description); ?>

                    </span>
                </div>
                <div class="related-product"  style="width:30% !important">
                    <h4>Related Products</h4>
                </div>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


    <!-- javascript script file code -->
    <script>
        var mainImg = document.getElementById("MainImg");
        var smallImg = document.getElementsByClassName("small-img");
        smallImg[0].onclick = function() {
            mainImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function() {
            mainImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function() {
            mainImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function() {
            mainImg.src = smallImg[3].src;
        }
    </script>


    <script src="<?php echo e(asset('js/jquery-1.11.0.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\kliff\Desktop\New folder\Medi-App\resources\views/product.blade.php ENDPATH**/ ?>