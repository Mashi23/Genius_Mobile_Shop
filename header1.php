<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius Mobile</title>
    <link rel="icon" href="./assets/Logo.png">

    <!--Boostrap-->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!--Owl carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!--CSS-->
    <link rel="stylesheet" href="style.css">

    <?php

    require ('functions.php');
    ?>

</head>
<body>
<!--Header-->
<header id="header">
    <div class="strip d-flex justify-content-center px-4 py-1 bg-">
        <p class="font-rubik font-size-14 text-black m-0">Genius Mobile, Mathara Road, Galle.</p>
    </div>

    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        &nbsp;&nbsp;
        <img src="./assets/Logo.png"  style="width: 70px; height: 70px;" alt="Logo">
        <a class="navbar-brand fs-1 font-awesome fw-semibold" href="index.php" >&nbsp;&nbsp;&nbsp;Genius Mobile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik fs-5">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php">Category<i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="login.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="signup.php">SIGN UP</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-warning fw-semibold"><?php echo count($info->getData('cart')); ?></span>
                </a>
            </form>
            &nbsp;&nbsp;
        </div>
    </nav>
    <!--Nav-->
</header>
<!--Header-->

<br>
<!--Main-->
<main id="main-site">