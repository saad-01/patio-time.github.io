<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Jost:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/1dde06a819.js" crossorigin="anonymous"></script>
    <title>Shop - PatioTime</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>

    <?php

        include('header-shop.php');

    ?>


    <section id="shop">
        <div class="container-fluid">
            <div class="shop-padding">
                <div class="row mb-4">
                    <div class="d-flex justify-content-between shop-row">
                        <p class="results">Showing 10 of 10 results</p>
                        <form action="">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating" selected="selected">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-6-300x300.jpg" alt="" height="">
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Margherita Pizza</h4>
                            <h5 class="price-n">$29.00</h5>
                            <span class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-7.jpg" alt="" height="">
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Spicy Seafood Pasta</h4>
                            <h5 class="price-n">$29.00</h5>
                            <span class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-13-300x300.jpg" alt="" height="">
                            <div class="circle1"></div>
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Pasta Bolognese</h4>
                            <span class="disc">$29.00</span>
                            <span class="price-n">$26.00</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-14-300x300.jpg" alt="" height="">
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Fettuccine Bolognese</h4>
                            <span class="price-n">$22.00</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-9-300x300.jpg" alt="">
                            <div class="circle1">Sale</div>
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Mushroom Bolognese Pasta</h4>
                            <span class="disc">$24.99</span>
                            <span class="price-n">$19.99</span>

                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-8-300x300.jpg" alt="">
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Spaghetti Napoletana</h4>
                            <span class="price-n">$24.99</span>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-5-300x300.jpg" alt="" class="">
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Vegetable Salad</h4>
                            <span class="price-n">$19.99</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-oyster-300x300.jpg" alt="" class="">
                            <div class="circle2">Sold <br> Out</div>
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Fresh Oyster Dozen</h4>
                            <span class="price-n">$59.00</span>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-punch-300x300.jpg" alt="">
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Purple Punch</h4>
                            <span class="price-n">$22.00</span>

                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 m-items">
                        <div class="imgs-box">
                            <img src="./images/product-1-toast-300x300.jpg" alt="">
                            <div class="circle1">Sale</div>
                            <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                        </div>
                        <div class="text-center">
                            <h4 class="item-n">Honey Fruit Toast</h4>
                            <span class="disc">$19.95</span>
                            <span class="price-n">$15.00</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

include('footer.php');

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        
    <script src="./script.js"></script>
</body>

</html>