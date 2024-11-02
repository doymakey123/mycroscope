<?php
include "include/header.php";
include "security.php";
?>

<br><br><br><br>

<main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Feedback</h2>
                    <p>We appreciate the time you took to share your feedback.</p>

                    <?php
                        if(isset($_SESSION['success']) && $_SESSION['success'] !='') {
                            echo '<br><div class="alert alert-success" role="alert" id="message"> <i class="fas fa-times "></i> '.$_SESSION['success'].' </i></div>';
                            unset($_SESSION['success']);
                        }
                    ?>

                    <?php
                        if(isset($_SESSION['failed']) && $_SESSION['failed'] !='') {
                            echo '<br><div class="alert alert-danger" role="alert" id="message"> <i class="fas fa-times "></i> '.$_SESSION['failed'].' </i></div>';
                            unset($_SESSION['failed']);
                        }
                    ?>
                </div>
                <form action="code.php" method="post">
                    <div class="form-group"><label for="name">Name</label><input class="form-control" type="text" id="name" name="name" required></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control" type="email" id="email" name="email" required></div>
                    <div class="form-group"><label for="message">Message</label><textarea class="form-control" id="message1" name="message" required></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="feedback">Send</button></div>
                </form>
            </div>
        </section>
    </main>
</div>

<br>


<?php
include "include/footer.php";
?>

<script>
  // error meesage fadeOut
$('document').ready(function(){ 
  $("#message").fadeIn(1000).fadeOut(5000); 
})

</script>