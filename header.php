<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Owl Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />

    <!--Font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">
    
    <?php     
    // require mysql connection
    require('Database/DBController.php');
    
    ?>	


</head>

<body>

    <!-- Start #Header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">
                328-10400, Nanyuki, Kenya annoh.karlgusta@gmail.com 0784095800
            </p>

            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
            </div>
        </div>

        <!--Primary Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Mobile Shopee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav m-auto font-rubik">
                        <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                        <a class="nav-link" href="#">Category</a>
                        <a class="nav-link" href="#">Products<i class="fas fa-chevron-down"></i></a>
                        <a class="nav-link" href="#">Blog</a>
                        <a class="nav-link" href="#">Category<i class="fas fa-chevron-down"></i></a>
                        <a class="nav-link" href="#">Coming Soon</a>
                    </div>
                </div>
                <form action="#" class="font-size-14 font-rale">
                    <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                    </a>
                </form>
            </div>
        </nav>
        <!-- !Primary Navigation-->
    </header>
    <!-- !Start #Header-->

    <!-- Start #Main-site-->
    <main id="main-site">