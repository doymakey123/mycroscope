<?php
include "include/header.php";
include "security.php";
?>

<br><br><br><br>



<div class="row">
  <div class="col-3"></div>
  <div class="col-7"> 


  <form action="checked.php" method="post">
    <?php

        $query = "SELECT * FROM tbl_ques_choice ORDER BY rand() LIMIT 10";
        $query_run = mysqli_query($connection,$query);

        $num = 1;

        if (mysqli_num_rows($query_run) > 0) {

            while ($row = mysqli_fetch_assoc($query_run)) {

              $id = $row['id'];
              $qid = $row['que_id'];

        ?>
          
             
              <input type="hidden" name="question[]" value="<?php echo $row['que_id']; ?>">
              <p> <b> <?php echo $num++ . ". " . $row['ques']; ?> </b> </p>
              <input type="radio" name="<?php echo "c[$qid];" ?>" id="" value="<?php echo $row['choicea']; ?>" required> <?php echo $row['choicea']; ?> <br>
              <input type="radio" name="<?php echo "c[$qid];" ?>" id="" value="<?php echo $row['choiceb']; ?>"> <?php echo $row['choiceb']; ?> <br>
              <input type="radio" name="<?php echo "c[$qid];" ?>" id="" value="<?php echo $row['choicec']; ?>"> <?php echo $row['choicec']; ?> <br>
              <input type="radio" name="<?php echo "c[$qid];" ?>" id="" value="<?php echo $row['choiced']; ?>"> <?php echo $row['choiced']; ?> <br> <br>

          
        <?php
              
            }
          

        }

        ?>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

  </form>

  </div>
  <div class="col-2"></div>
</div>

<br>


<?php
include "include/footer.php";
?>