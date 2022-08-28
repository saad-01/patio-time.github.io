<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost", "root", "", "contact_db");
$query = "select * from items where id=$id";
$item = mysqli_query($con, $query);
$f = mysqli_fetch_assoc($item);
$query2 = "SELECT * FROM items ORDER BY RAND() LIMIT 4;";
$rand_items = mysqli_query($con, $query2);


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
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>

    <?php

    include('header-shop.php');

    ?>


    <section>
        <div class="sec-pad">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="zm-box" data-scale="2.1">
                        <img src="<?php echo $f['product_img'] ?>" alt="" class="pd-img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mss -3">
                        <h3 class="pd-nm"><?php echo $f['name'] ?></h3>
                        <?php if ($f['review'] == 1) { ?>
                            <div>
                                <span class="star pd-str">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </span>
                                <span class="rev">(2 customer reviews)</span>
                            </div>
                        <?php } ?>
                        <?php if ($f['review'] == 2) { ?>
                            <span class="star pd-str">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        <?php } ?>
                        <div class="mt-3">
                            <?php if ($f['sale'] == 1) { ?>
                                <span class="disc">$<?php echo number_format((float)$f['sale_price'], 2, '.', ''); ?></span>
                            <?php } ?>
                            <span class="pd-pr">$<?php echo number_format((float)$f['price'], 2, '.', ''); ?></span>
                        </div>
                        <p class="pd-dl mt-5">Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit,
                            sed quia consequuntur. Lorem ipsum nonum eirmod dolor.<br><br>Aquia sit amet, elitr,
                            sed diam nonum eirmod tempor invidunt labore et dolore magna aliquyam.erat,
                            sed diam voluptua. At vero accusam et justo duo dolores et ea rebum.</p>
                        <?php if ($f['sold'] == 1) { ?>
                            <div class="sold-itm">OUT OF STOCK</div>
                        <?php } ?>
                        <?php if ($f['sold'] == 0) { ?>
                            <div class="add-to-cart">
                                <div class="add-cart">
                                    <button class="as-btn" id="sb-btn" onclick="sub()">-</button>
                                    <input type="number" class="txt-in" id="inp" min=1 max=10>
                                    <button class="as-btn" id="ad-btn" onclick="add()">+</button>
                                </div>
                                <button class="cart-btn">ADD TO CART</button>
                            </div>
                        <?php  } ?>

                        <span class="pd-hds">SKU:</span>
                        <span class="tags"><?php echo $f['sku'] ?></span> <br>
                        <span class="pd-hds mt-3">CATEGORY:</span>
                        <span class="tags"><?php echo $f['category'] ?></span> <br>
                        <span class="pd-hds mt-3">TAG:</span>
                        <span class="tags"><?php echo $f['tag'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tabs">
        <div class="tab-pad">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active tabs" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Reviews</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <p class="pd-dl mt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                        sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                        nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                        nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu
                        pede mollis pretium. Integer tincidunt.
                    </p>
                    <p class="pd-dl mt-4">Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                        consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </p>

                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <?php if ($f['review']) { ?>
                        <div class="comment-box mt-5">
                            <img alt="" src="./images/author-60x60.png" height="50" width="50">
                            <span class="comment-text">
                                <p class="meta">
                                    <strong class="">Jamie Milson </strong>
                                    <span>–</span><time datetime="2022-03-18T03:40:29+00:00" class="date">March 18, 2022</time>
                                </p>
                                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <span class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </span>
                            </span>
                        </div>
                        <div class="comment-box mt-5">
                            <img alt="" src="./images/author-60x60.png" height="50" width="50">
                            <span class="comment-text">
                                <p class="meta">
                                    <strong class="">Jamie Milson </strong>
                                    <span>–</span><time datetime="2022-03-18T03:40:29+00:00" class="date">March 18, 2022</time>
                                </p>
                                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                </p>
                                <span class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </span>
                            </span>

                        </div>
                        <h3 class="rev-hd">Add a review</h3>
                    <?php } ?>
                    <?php if (!$f['review']) { ?>
                        <p class="description mt-5">There are no reviews yet.</p>
                        <h3 class="rev-hd">Be the first to review “<?php echo $f['name'] ?>”</h3>
                    <?php } ?>
                    <h5 class="form-ins">Your email address will not be published. Required fields are marked *</h5>
                    <div class="row">
                        <form method="POST" class="cnt-frm" onsubmit="preventdefault()">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="" class="frm-lbl">Name*</label>
                                    <input type="text" id="name" name="your_name">
                                </div>

                                <div class="col-lg-4">
                                    <label for="" class="frm-lbl">Email*</label>
                                    <input type="email" id="mail" name="email">
                                </div>

                                <div class="col-lg-4">
                                    <label for="" class="frm-lbl">Website</label>
                                    <input type="text" id="subject" name="subject">
                                </div>
                            </div>
                            <div class="rating-row mt-4">
                                <label for="" class="frm-lbl">Your rating*</label>
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label class="lbl" for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label class="lbl" for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label class="lbl" for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label class="lbl" for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label class="lbl" for="star1" title="text">1 star</label>
                                </div>
                            </div>
                            <label for="" class="frm-lbl mt-4">Your review*</label>
                            <textarea name="msg" id="msg" cols="" rows="3"></textarea>
                            <div class="d-flex">
                                <input type="checkbox" value="yes" id="chk-box">
                                <label for="chk-box" class="check-box ms-3">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>
                            <button type="submit" class="btn-sb" name="submit_form" value="submit">SUBMIT</button>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section id="related-products">
        <div class="rel-pad">
            <h3 class="related-pd mb-4">Related products</h3>
            <div class="row">
                <?php
                while ($products = mysqli_fetch_assoc($rand_items)) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 m-items">
                        <a href="product.php?id=<?php echo $products['id']; ?>" class="p-pg">
                            <div class="imgs-box">
                                <img src="<?php echo $products['thumbnail']; ?>" alt="" height="" class="pd-imgs">
                                <?php if ($products['sale'] == 1) { ?>
                                    <div class="circle1">Sale</div>
                                <?php } ?>
                                <?php if ($products['sold'] == 1) { ?>
                                    <div class="circle2">Sold <br> Out</div>
                                    <button class="btn btn-shop fade-bottom">READ MORE</button>
                                <?php } ?>
                                <?php if ($products['sold'] == 0) { ?>
                                    <button class="btn btn-shop fade-bottom">ADD TO CART</button>
                                <?php  } ?>
                            </div>


                            <div class="text-center">
                                <h4 class="item-n ft-s"><?php echo $products['name'] ?></h4>
                                <!-- <span class="price-n fnt-s">$29.00</span> -->
                                <?php if ($products['sale'] == 1) { ?>
                                    <span class="disc fnt-s">$<?php echo number_format((float)$products['sale_price'], 2, '.', ''); ?></span>
                                <?php } ?>
                                <span class="price-n fnt-s">$<?php echo number_format((float)$products['price'], 2, '.', ''); ?></span>
                                <?php if ($products['review'] == 1) { ?>
                                    <span class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </span>
                                <?php } ?>
                                <?php if ($products['review'] == 2) { ?>
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
    </section>

    <?php

    include('footer.php');

    ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>