<?php
session_start();
include "include/header.php";
?>

<section class="clean-block clean-form dark">
    <div class="container">
        <div class="block-heading">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">

                <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
                        echo '<br><div class="alert alert-danger" role="alert" id="message"> <i class="fas fa-times "></i> '.$_SESSION['status'].' </i></div>';
                        unset($_SESSION['status']);
                    }
                ?>
                
            </div>
            <div class="col-4"></div>
        </div>
            <h2 class="text-info">Log In</h2>
        </div>
        <form action="code.php" method="post">
            <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control item" type="email" name="username" id="email"></div>
            <div class="mb-3"><label class="form-label" for="password">Password</label><input class="form-control" type="password" name="pwd" id="password"></div>
            <div class="mb-3">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
            </div><button class="btn btn-primary" type="submit" name="login">Log In</button>
        </form>
    </div>
</section>

<?php
include "include/footer.php";
?>

<script>
  // error meesage fadeOut
$('document').ready(function(){ 
  $("#message").fadeIn(1000).fadeOut(5000); 
})

</script>