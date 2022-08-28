<?php
$con = mysqli_connect("localhost", "root", "", "contact_db");
$quer = "select * from items";
$items = mysqli_query($con, $quer);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Jost:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1dde06a819.js" crossorigin="anonymous"></script>
    <title>Shop - PatioTime</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <?php
                    while ($d = mysqli_fetch_assoc($items)) {
                    ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 m-items">

                            <!-- <a href="shop/product?id=<?php echo $d['id']; ?>" class="p-pg"> -->
                            <a href="product.php?id=<?php echo $d['id']; ?>" class="p-pg">
                                <div class="imgs-box">
                                    <img src="<?php echo $d['thumbnail'] ?>" alt="" height="">
                                    <?php if ($d['sale'] == 1) { ?>
                                        <div class="circle1">Sale</div>
                                    <?php } ?>
                                    <?php if ($d['sold'] == 1) { ?>
                                        <div class="circle2">Sold <br> Out</div>
                                        <button class="btn btn-shop fade-bottom">READ MORE</button>
                                    <?php } ?>
                                    <?php if ($d['sold'] == 0) { ?>
                                        <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                                    <?php  } ?>


                                </div>

                                <div class="text-center">
                                    <h4 class="item-n"> </h4>
                                    <?php if ($d['sale'] == 1) { ?>
                                        <span class="disc">$<?php echo number_format((float)$d['sale_price'], 2, '.', ''); ?></span>
                                    <?php } ?>
                                    <span class="price-n">$<?php echo number_format((float)$d['price'], 2, '.', ''); ?></span>
                                    <?php if ($d['review'] == 1) { ?>
                                        <span class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </span>
                                    <?php } ?>
                                    <?php if ($d['review'] == 2) { ?>
                                        <span class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                    <?php } ?>
                                </div>
                            </a>
                        </div>

                    <?php
                    }
                    ?>
                </div>


            </div>
        </div>
        </div>
    </section>

    <?php

    include('footer.php');

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="./script.js"></script>
</body>

</html>