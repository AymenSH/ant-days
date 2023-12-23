<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        <style>:root{ --main-color: #f368e0; }

        .feature-products{
            background-color:#F3F3F3;
            font-family:Roboto;
            position:relative;
        }

        .feature-products::before{
            position:absolute;
            left: 50%;
            top:0;
            height:65px;
            content: "";
            display: block;
            width:3px;
            background-color: #000;
            z-index:9999;
        }

        .product-content .title{
            margin-top:40px;
            text-align:center;
            font-family:Roboto;
            font-size:12px;
            text-transform:uppercase;
        }


        .feature-title{
            font-weight:600;
            color:#000;
        }

        .feature-title h2{
            margin-top:120px;
            margin-bottom:50px;
            color: #000;
            font-family: Roboto;
            font-size: 38px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .feature-title a {
            padding: 0 20px;
            font-size:16px;
            color:#bbb;
        }

        .feature-active{
            color:#000 !important;
            font-weight:700;
        }

        .price, .rating{
            display:inline-block;
            margin:0 auto;
            width:100%;
            text-align:center;
            margin-bottom:40px;
        }


        .product-grid{
            border:1px solid transparent;
            font-family: 'Roboto', sans-serif;
            padding:10px 10px;
            transition: all 0.5s;
            margin-bottom:80px;
            margin-top:40px;
        }

        .product-grid .product-image{
            position: relative;
            overflow: hidden;


        }
        .product-grid .product-image a.image{ display: block; }
        .product-grid .product-image img{
            width: 100%;
            height: auto;
        border-radius: 5px;

        }
        .product-grid .add-to-cart{
            color: #fff;
            background: #222;
            font-size: 34px;
            font-weight: 500;
            text-align: center;
            padding: 0 5px;
            display: block;
            position: absolute;
            bottom: -50px;
            right: 0;
            transition: all ease-in-out 0.35s;
            width:20%;
            opacity: 0;

        }
        .product-grid:hover .add-to-cart{ opacity:1; }
        .product-grid .add-to-cart:after{
            content: "\f101";
            color: #fff;
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            display: inline-block;
            opacity: 0;
            transition: all 0.5s;

        }
        .product-grid .add-to-cart:hover:after{
            padding-left: 10px;
            opacity: 1;
        }
        .product-grid .product-content{ position: relative; }
        .product-grid .product-stock{
            color: #999;
            font-size: 16px;
            font-weight: 600;
            line-height: 35px;
            border-bottom: 1px solid #c1c1c1;
            display: block;
            margin: 0 0 15px;
        }
        .product-grid .icon{
            padding: 0;
            margin: 0;
            list-style: none;
            opacity: 0;
            position: absolute;
            top: -15px;
            right: 0;
            transition: all ease-in-out 0.35s;
        }
        .product-grid:hover .icon{
            opacity: 1;
            top: 8px;
        }
        .product-grid .icon li{ display: inline-block; }
        .product-grid .icon li a{
            color: #222;
            font-size: 16px;
            margin: 0 4px;
        }
        .product-grid .icon li a:hover{ color: var(--main-color); }
        .product-grid .title{
            font-family:Roboto;
            font-size:15px;
            text-transform:uppercase;
            font-weight:700;
            line-height:2px;
        }
        .product-grid .title a{
            color: #222;
            transition: all 0.5s ease-out 0s;
        }
        .product-grid .title a:hover{ color: var(--main-color); }
        .product-grid .category{
            font-size: 18px;
            margin: 0 0 3px;
            display: block;
        }
        .product-grid .category a{
            color: #222;
            transition: all 0.3s ease 0s;
        }
        .product-grid .category a:hover{ color: var(--main-color); }
        .product-grid .price{
            font-family:Roboto;
            font-size:14px;
            text-transform:uppercase;
            font-weight:700;
            line-height:0px;
            display: inline-block;
            color:#000;
        }
        .product-grid .rating{
            padding: 0;
            margin: 0;
            list-style: none;
            float: right;
        }
        .product-grid .rating li{
            color: #FFB14B;
            font-size: 13px;
            display: inline-block;
        }


        .action-buttons{
            display:inline-block;
            margin-top:50px;
            width:100%;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .action-buttons .btn-outline{
            padding: 6px 20px;
            border-radius:5px;
            border: 2px solid #ccc;
            margin: 0 4px;
        }


        .action-buttons .btn-outline-icon{
            padding: 6px 10px;
            border-radius:5px;
            border: 2px solid #ccc;
            margin: 0 4px;
        }

        .action-buttons a{
            color: #000;
            font-family:Roboto;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing:1px;
            cursor:pointer;
        transition: .4s;
        }

        .action-buttons a:hover{
            color: #fff !important;
            background:#000;

        }

        .product-grid .rating li.disable{ color: #c1c1c1; }
        @media only screen and (max-width:990px){
            .product-grid{ margin-bottom: 30px; }
        }
    </style>
</head>
<body>
    @include('inc.navbar')
    <section class ="feature-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center feature-title">
                    <h2>FEATURED PRODUCTS</h2>
                    <a class="feature-active" href="#">BEST SELLER</a> | <a href="#">NEW ARRIVAL</a> | <a href="#">MOST WANTED</a>
                </div>
                @if ($products->count() > 0)
                @foreach ($products as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image" style="background-color:#F3F3F3;">
                                <img class="pic-1" src="{{$product->image}}">
                            </a>
                            <a class="add-to-cart" href=""> {{$product->qty}} </a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{$product->name}}</a></h3>

                             <div class="price">{{$product->price}} TND</div>
                            <ul class="rating">
                               <li class="fas fa-star"></li>
                               <li class="fas fa-star"></li>
                               <li class="fas fa-star"></li>
                               <li class="fas fa-star"></li>
                               <li class="fas fa-star disable"></li>
                           </ul>
                        </div>

                        <div class="action-buttons">
                            <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger text-white mx-2">Delete</a>
                            <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn text-white btn-info">Edit</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <h4 class=" mt-5 text-center w-100 text-danger">No data here</h4>
                @endif
            </div>
        </div>
        </section>
</body>
</html>
