<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

include('../security.php');

if(!$_SESSION['username'])
    {
        header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - microscope</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container-fluid"><a class="navbar-brand logo" href="index.php"> <img class="rounded-circle img-fluid" src="assets/img/avatars/12.png" width="50" height="50" alt="logo"> </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <button style="background:none; border:none; margin:0; padding:0;">Account</button></li>
                    <form action="../logout.php" method="post">
                        <li class="nav-item"> <button type="submit" name="logout_btn" style="background:none; border:none; margin:0; padding:0;">Logout</button></li>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page" style="background-color: #f7f7f7;">