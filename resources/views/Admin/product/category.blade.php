<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
<html lang="en">
<head>
    <title>Harvest Vase</title>
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    <style>
        body {
            background-color: #fdf1ec;
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;
        }

        .wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 50px auto;
            max-width: 1200px;
            box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
            border-radius: 7px;
            background-color: #ffffff;
        }

        .product-img,
        .product-info {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .product-img img {
            width: 100%;
            height: auto;
            border-radius: 7px;
        }

        .product-text h1 {
            font-size: 34px;
            color: #474747;
            margin-bottom: 10px;
        }

        .product-text h2 {
            font-size: 13px;
            font-weight: 400;
            text-transform: uppercase;
            color: #d2d2d2;
            letter-spacing: 0.2em;
        }

        .product-text p {
            font-family: 'Playfair Display', serif;
            color: #8d8d8d;
            line-height: 1.7em;
            font-size: 15px;
            font-weight: lighter;
            overflow: hidden;
            margin-top: 20px;
        }

        .product-price-btn {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-top: 20px;
        }

        .product-price-btn p {
            font-size: 28px;
            color: #474747;
            margin-bottom: 20px;
        }

        .product-price-btn button {
            background-color: #9cebd5;
            border: none;
            border-radius: 60px;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            color: #ffffff;
            padding: 15px;
            cursor: pointer;
            outline: none;
            width: 100%;
            max-width: 200px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .product-price-btn button:hover {
            background-color: #79b0a1;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
                padding: 20px;
            }

            .product-img,
            .product-info {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .product-text h1 {
                font-size: 28px;
            }

            .product-text p {
                font-size: 14px;
            }

            .product-price-btn p {
                font-size: 24px;
            }

            .product-price-btn button {
                font-size: 16px;
                width: 100%;
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .product-text h1 {
                font-size: 24px;
            }

            .product-price-btn p {
                font-size: 20px;
            }

            .product-price-btn button {
                font-size: 18px;
                padding: 12px;
            }
        }

    </style>
</head>
<body>
    @if ($category)
        @foreach ($category as $cate)
            <div class="wrapper">
                <div class="product-img">
                    <img src="{{ $cate->image_url }}" alt="{{ $cate->category }}">
                </div>
                <div class="product-info">
                    <div class="product-text">
                        <h1>{{ $cate->category }}</h1>
                        <h2>by studio and friends</h2>
                        <p>{{ $cate->description }} </p>
                    </div>
                    <div class="product-price-btn">
                        @if ($cate->is_active)
                            <p>In Stock</p>
                        @else
                            <p>Out of Stock</p>
                        @endif
                        <button type="button"><a href="{{ route('get.sub_category',$cate->id) }}">Know more</a></button>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</body>
