<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MyCroscope</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <style>
       .carousel-control-prev-icon {
            /* width: 40px;
            height: 40px; */
            background-color: red;
       }
 
        .carousel-control-next-icon {
            /* width: 40px;
            height: 40px; */
            background-color: red;
        }

        #c{
            background-color: black;
            /* opacity: 0.5; */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container-fluid"><a class="navbar-brand logo" href="index.php"> <img class="rounded-circle img-fluid" src="assets/img/avatars/logo2.gif" width="160" height="15" alt="logo"> </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link <?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">guide</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item <?= ($activePage == 'partmicroscope') ? 'active':''; ?>" href="partmicroscope.php">Parts of Microscope</a>
                        <a class="dropdown-item <?= ($activePage == 'guide') ? 'active':''; ?>" href="guide.php"> Microscope (GUIDE) </a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link <?= ($activePage == 'microscope') ? 'active':''; ?>" href="microscope.php">microscope</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">laboratory activities</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item <?= ($activePage == 'plantlab') ? 'active':''; ?>" href="plantlab.php">Plant Cell</a>
                        <a class="dropdown-item <?= ($activePage == 'animallab') ? 'active':''; ?>" href="animallab.php">Animal Cell</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link <?= ($activePage == 'quiz') ? 'active':''; ?>" href="quiz.php">quiz</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <br>