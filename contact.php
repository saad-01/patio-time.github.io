<?php
    $con=mysqli_connect("localhost","root","","contact_db");

    if (!$con) {
        die("There was an error connecting to the database. Please try again in a few minutes!");
    }

    $errors = '';
    $success = '';

    if (isset($_POST['submit_form'])) {

        if($_POST['your_name'] == '') {
            $errors .= "<li>Please enter your name.</li>";
        }
        if($_POST['email'] == '') {
            $errors .= "<li>Please enter your email address.</li>";
        }
        if($_POST['subject'] == '') {
            $errors .= "<li>Please enter subject.</li>";
        }

        if($_POST['your_name'] != '' && $_POST['email'] != '' && $_POST['subject'] != '')  {

            $errors = '';

            $name=$_POST['your_name'];
            $email=$_POST['email'];
            $msg=$_POST['msg'];
            $subject=$_POST['subject'];
            $sql= "insert into contact_form(name, email, msg, subject)
            values('$name','$email','$msg',' $subject')";
            if(mysqli_query($con, $sql)) {
                $success = "Thanks for submitting the form.";
            } else {
                $error = "There was an error submitting the form. Please try again";
            }

            
        }
}   

?>

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
    <title>Contact US - PatioTime</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
<?php

include('header-contact.php');

?>
   
   
   <section id="location">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <h4 class="sb-txt">OUR LOCATION</h4>
                <h1 class="head-txt">WHERE TO FIND US</h1>
                <p class="art-txt">The Patio Time Cafe is located on Silk Street, in the heart of London city, on the
                    edge of Soho. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Donec quam felis, ultricies nec.</p>
                <p class="art-txt">Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                    elementum
                    semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu.</p>
                <p class="art-txt"><a class="sec-links" href="https://www.google.com/maps/place/Barbican+Centre/@51.5205487,-0.0936463,18z/data=!4m13!1m7!3m6!1s0x48
                    761ca98744377d:0x9e296ec2b218ce78!2sSilk+St,+London,+UK!3b1!8m2!3d51.5198778!4d-0.0916239!3m4!1s0x48761b56fb64
                    b275:0xc756e26675d21f40!8m2!3d51.5202077!4d-0.0937864">
                     <i class="fas fa-map-marker-alt icon-pd"></i> Silk St, Barbican, London EC2Y 8DS, UK </a></p> 
                <p class="art-txt"><a class="sec-links" href="tel:+39-055-123456"> <i class="fas fa-phone icon-pd"></i> +39-055-123456
                    </a></p>    
                <p class="art-txt"><a class="sec-links" href="mailto:booking@patiotime.com"> <i class="far fa-envelope icon-pd"></i>
                        booking@patiotime.com </a></p>   
                <button class="sec-btn">VIEW IN GOOGLE MAPS</button>         
            </div>
            <div class="col-lg-7 col-md-6 text-end ">
                <img src="./images/rezha-ramadhan-sV8M_Lkg60Y-unsplash-768x1024.jpg" alt="" class="loc-img">
            </div>
        </div>

    </section>


    <section id="touch">
        <div class="row">
            <div class="col-lg-5 col-md-6 frlink">
                <h4 class="sb-txt">GET IN TOUCH</h4>
                <h1 class="head-txt">CONTACT US</h1>
                <p class="art-txt">For genral enquiries please email:<a class="sec-links"
                        href="mailto: info@patiotime.com">
                        info@patiotime.com</a></p>
                        <p class="art-txt">Reserve by email:<a class="sec-links" href="mailto:booking@patiotime.com">
                        booking@patiotime.com </a></p>
                <p class="art-txt">Tel:<a class="sec-links" href="tel:+39-055-123456">+39-055-123456</a></p>
                <h2 class="hrs-hd">Opening hours:</h2>
                <p class="schdl">Mon – Thu: 10.00 am – 01:00 am <br>Fri – Sun: 10:00 am – 02:00 am</p>
                <a href="" class="reserv">ONLINE RESERVATION</a>    
            </div>
            <div class="col-lg-7 col-md-6">
                <?php
                    if($errors != '') {
                ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php echo $errors; ?>
                        </ul>
                    </div>
                <?php
                    }
                ?>
                <?php
                    if($success != '') {
                ?>
                    <div class="alert alert-success">
                        <?php echo $success; ?>
                    </div>
                <?php
                    }
                ?>
                <form method="POST" class="cnt-frm" onsubmit="">
                    <label for="" class="frm-lbl">Your name</label>
                    <input type="text" id="name" name="your_name">
                    <label for="" class="frm-lbl mt-4">Your email</label>
                    <input type="email" id="mail" name="email">
                    <label for="" class="frm-lbl mt-4" >Subject</label>
                    <input type="text" id="subject" name="subject">
                    <label for="" class="frm-lbl mt-4">Your message (optional)</label>
                    <textarea name="msg" id="msg" cols="" rows="4"></textarea>
                    <input type="submit" class="btn-sb" name="submit_form" value="submit">
                </form>
            </div>

        </div>
    </section>
    <section id="news">
        <img src="./images/newsletter-bg-1.jpg" alt="" class="news-img">
        <div class="contact-overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <h3 class="nw-sb">CONNECT WITH US & STAY TUNED</h2>
                    <h1 class="nw-hd">Subscribe to Our Newsletter</h1>
                    <p class="nw-txt">If you would like to stay connected and be the first to know about our news, events, and
                        exclusive offers, please sign up for our newsletter. You can opt out at any time by clicking
                        unsubscribe on the newsletter.</p>
                    <div class="email-frm">
                        <input type="email" placeholder="Your Email Address" required class="email">
                        <span class="email-btn"><i class="fa-solid fa-arrow-right"></i></span>
                    </div>
                    
                    <label>
                        <input type="checkbox" value="1" required class="mt-4">
                        I agree to the Privacy Policy
                    </label>
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