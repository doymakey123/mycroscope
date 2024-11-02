<?php
include "include/header.php";
include "security.php";
?>

<br><br>

<div class="text-center">
    <button class="btn btn-outline-info" onclick="show()"> Onion Cell </button>
    <button class="btn btn-outline-info"> Leaf Cell </button>
    <button class="btn btn-outline-info"> Other </button>
</div>

<br>



<div class="card-body" id="showDiv">

    <h1 style="text-align: center;"> 
    PLANT CELL LABORATORY
    </h1>
    <h3 style="text-align: center;"> 
        ONION CELL
    </h3>

    <br>

    <div class="container-fluid">

        <!-- <button class="btn btn-primary float-right"> -->
             <a href="pdf/plantcellpdf.pdf" class="btn btn-primary float-right" download="plantcellpdf"> Download PDF File </a> 
            <!-- </button> -->

        <br><br><br>

        <h3 style="font-weight: bold;">
            Introduction:
        </h3>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        This subject is important because in Biology, we will be using the microscope many times during different laboratory exercises. 
        This activity virtual microscope is used for looking at many specimens that cannot be seen with the naked eye.
        </p>

        <h3 style="font-weight: bold;">
            Objective:
        </h3>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        The purpose of this lab was to use the microscope and identify cells such as animal cells and plant cells. 
        Observe an onion cell under the microscope. 
        Record your observations.
        </p>


        <h3 style="font-weight: bold;">
            Duration:
        </h3>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Approximately 50 minutes is enough time to perform, observe, and sketch onion cells.
        </p>


        <h3 style="font-weight: bold;">
            Procedure:
        </h3>

        <p style="text-align: justify;">
            <ol style="margin-left: 23px;">
            <li> Open the Microscope option. </li>
            <li> Click Plant Cell. (Choose Onion Cell) </li>
            <li> Perform microscopy view cell from Low to High Power. </li>
            <li> Add Iodine solution. </li>
            <li> View cell from Low to High. </li>
            <li> Use the focus option to see the specimen clearly. </li>
            <li>  Position the part of the specimen you want to see more clearly in the center of the view. </li>
            </ol> 
        </p>



        <h3 style="font-weight: bold;">
            Analyzation:
        </h3>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        You are assigned to perform, observe and sketch and label any visible parts or organelles. 
        As well as list each magnification used.   
        </p>

        <div class="row">
            <div class="col">
                
            </div>
            <br>
            <div class="col">
                <div style="border: 5px solid black;  width:300px; height:200px; "> </div>
              
            </div>
            <br>
            <div class="col">
                
            </div>
            <br>
        </div>



        <h3 style="font-weight: bold;">
            Activity:
        </h3>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Look at the cells of the onion epidermis under low power.
            <ul  style="margin-left: 23px;">
                <li>What is their general shape?</li>
                <li>If you did not know their origin, how could you tell they are plant cells?</li>
            </ul>
        </p>


        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Under low power look for a nucleus that is stained brown or blue.
            <ul  style="margin-left: 23px;">
                <li>What is its shape?</li>
            </ul>
        </p>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Switch to high power and look at the nucleus again.
            <ul  style="margin-left: 23px;">
                <li>Where is the nucleus located in the cell?</li>
                <li> If you did not know their origin, how could you tell they are plant cells? Observe the cells under high power. </li>
            </ul>
        </p>

        
        <h3 style="font-weight: bold;">
            Conclusion:
        </h3>


       
    </div>

    <br><br>

   
    <br>

</div>




<br>


<?php
include "include/footer.php";
?>


<script>

document.getElementById('showDiv').style.display = 'none';

function show(){

    document.getElementById('showDiv').style.display = 'block';

}

</script>