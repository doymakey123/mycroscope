<?php
include "header.php";


?>

<br><br><br><br>

<div class="card-body" >

<h1 style="text-align: center;">
  Feedback Table
</h1>

<div class="table-responsive">

      <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
     
        <?php
            $query = "SELECT * FROM tbl_feedback";
            $query_run = mysqli_query($connection,$query);



            if (mysqli_num_rows($query_run) > 0){

                while($row = mysqli_fetch_assoc($query_run)){

        ?>


                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?> </td>
                        <td><?php echo htmlspecialchars($row['name']); ?> </td>
                        <td><?php echo htmlspecialchars($row['email']); ?> </td>
                        <td><?php echo htmlspecialchars($row['message']); ?> </td>
                        <td><?php echo htmlspecialchars($row['date_created']); ?> </td>

                    </tr>
        <?php

                }

            }else {
            //echo htmlspecialchars("No Record Found");
            }

        ?>
        
        </tbody>
      </table>

    </div>

</div>

<br><br><br><br>

<?php
include "../include/footer.php";
?>
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
    $('#dataTable1').DataTable();
} );
</script>
