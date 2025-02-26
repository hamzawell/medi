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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
    @include('layouts.links')
    <!-- custom css file link -->

</head>

<body>

    

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>
    @include('layouts.header')
    @include('layouts.svg')


    <div class="grid-container">
        @if ($subCategories->isNotEmpty())
            @foreach ($subCategories as $SubCate)
                <section id="productdetails" class="section-p1 grid-item">
                    <div class="single-pro-image">
                        <img src="{{ asset('storage/' . $SubCate->image_url) }}" width="100%" id="MainImg" alt="">
                    </div>
                    <div class="single-pro-details">
                        <h3>{{ $SubCate->subcategory }}</h3>
                       
                        {{-- <h5>Product Details</h5> --}}
                        <span>{{ $SubCate->description }}</span>
                        <button class="normal">
                            <a href="{{ route('sub.get.product', $SubCate->id) }}">View Products</a>
                        </button>
                    </div>
                </section>
            @endforeach
        @endif
    </div>
    

    @include('layouts.footer');


 
  

   <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
   </script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
