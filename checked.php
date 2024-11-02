<?php

include "security.php";


//code for checking answer
if (isset($_POST['submit'])) {
    
    // Loop to store and display values of individual checked checkbox.
    $ques = $_POST['question'];
    $selected = $_POST['c'];


    
    $qsl= "SELECT correct_ans FROM tbl_ques_choice";
    $ansresults = mysqli_query($connection, $qsl);
    $i = 1;
    $counter = 0;
    while ($rows = mysqli_fetch_array($ansresults)) {
        // print_r($rows);
        $result = $rows['correct_ans'] == $selected[$i];
        
        if ($result) {
            // echo "correct ans is ".$rows['ans']."<br>";
            $counter++;
        // $Resultans++;
                    // echo "Well Done! your ". $counter ." answer is correct <br><br>";
        } else {
            // $counter++;
                    // echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
        }
        $i++;
    }
}

    // echo "total score is $counter /10";

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
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container-fluid"><a class="navbar-brand logo" href="index.php"> <img class="rounded-circle img-fluid" src="assets/img/avatars/12.png" width="50" height="50" alt="logo"> </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">

    <br><br><br>


    <h1 style="text-align: center;">  Your total score <?php echo $counter; ?>/10</h1>

    <?php

        if($counter <= 4){
            echo '<h3 style="text-align: center;"> <b> Remarks: </b> Please study more</h3>';
        }else if($counter = 5){
            echo '<h3 style="text-align: center;"> <b> Remarks: </b> Fair </h3>';
        }else if($counter >= 6 && $counter <= 7){
            echo '<h3 style="text-align: center;"> <b> Remarks: </b> Good </h3>';
        }else if($counter >= 8 && $counter <= 9){
            echo '<h3 style="text-align: center;"> <b> Remarks: </b> Very Good </h3>';
        }else{
            echo '<h3 style="text-align: center;"> <b> Remarks: </b> Excellent </h3>';
        }


    ?>
    <br><br><br>

    <div class="row">
        <div class="col text-center"> 
        <a href="quiz.php"> <button class="btn btn-primary"> Retake </button> </a>
        <a href="feedback.php"> <button class="btn btn-info"> Feedback </button> </a> 
        </div>
        
    </div>

    <br><br><br>

    

    <?php

        include "include/footer.php";

    ?>