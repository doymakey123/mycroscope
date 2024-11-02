<?php
include "include/header.php";
include "security.php";
?>

<br><br>

<div class="text-center">
    <button class="btn btn-outline-info" onclick="show()"> Cheek Cell </button>
    <button class="btn btn-outline-info"> Stomach Cell </button>
    <button class="btn btn-outline-info"> Other </button>
</div>

<br>

<div class="card-body" id="showDiv">

    <h1 style="text-align: center;"> 
    ANIMAL CELL LABORATORY
    </h1>
    <h3 style="text-align: center;"> 
        CHEEK CELL
    </h3>

    <br>

    <div class="container-fluid">

        <!-- <button class="btn btn-primary float-right"> Download PDF File</button> -->
        <a href="pdf/animalcellpdf.pdf" class="btn btn-primary float-right" download="animalcellpdf"> Download PDF File </a> 

        <br><br><br>

        <h3 style="font-weight: bold;">
            Introduction:
        </h3>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        The purpose of this laboratory is to observe and allocate the eukaryotic cells under the use of microscope. 
        To make this lab, we will be going to use our very own cell and sink them into the methylene blue enable for us to see them under the microscope. 
        Lastly, follow the instructions carefully, read and analyze every single steps. 
        Make sure to clean all the required equipment and it must be sanitized.
        </p>

        <h3 style="font-weight: bold;">
            Duration:
        </h3>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Running 45 to 50 mins. estimated time of this laboratory.
        </p>

        <!-- <h3 style="font-weight: bold;">
            Materials:
        </h3>

        <p style="text-align: justify;">
            <ul  style="margin-left: 23px;">
                <li>Microscope</li>
                <li>Slide</li>
                <li> Cover slip </li>
                <li> Toothpick </li>
                <li> Lab manual (sheet) </li>
                <li> Writing utensil </li>
                <li> Methylene blue (can stain clothes) </li>
            </ul>
        </p> -->


        <h3 style="font-weight: bold;">
            Procedure:
        </h3>

        <p style="text-align: justify;">
            <ol style="margin-left: 23px;">
                <li> Operate the microscope.  </li>
                <li> Switch into animal cell. ( Choose cheek cell)</li>
                <li> Slowly scan and add Methylene blue. </li>
                <li> After scanning immediately place the power into low to view the cell. </li>
                <li> Proceed the low power to high power. </li>
                <li> Focus and examine the slide of the cheek cell and label structures you can identify. </li>
                <li> Answer the cheek cell question on your lab sheet. </li>
            </ol> 
        </p>


        <h3 style="font-weight: bold;">
            Observation:
        </h3>

        <p style="text-align: justify;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Draw or sketch the cell at low and high power. 
        Label the nucleus, cytoplasm, and cell membrane of a single cell. Draw your cells to scale.  
        </p>

        <!-- <div class="container"> -->
            <div class="row">

                <div class="col">
                    <div style="border: 5px solid black; border-radius:50%; width:200px; height:200px; margin-top:20px;"> </div>
                    <h3 style="margin-top:10px;"> Low power </h3>
                </div>
                <br>
                <div class="col">
                    
                </div>

                <br>
                <div class="col">
                    <div style="border: 5px solid black; border-radius:50%; width:200px; height:200px; margin-top:20px;"> </div>
                    <h3 style="margin-top:10px;"> High power </h3>
                </div>

                <div class="col">
                    
                    </div>
                <br>
            </div>
        <!-- </div> -->

        <br>


        <h3 style="font-weight: bold;">
            Analysis:
        </h3>

        <p style="text-align: justify;">
            <ol style="margin-left: 23px;">
                <li> Why is methylene blue being very important to use in this activity? </li>
                <li> To view clearly with the other organelles in the cheek cell. What is the visible part of a cell? </li>
                <li> Give at least 2 none visible but it could be found in the cell using a microscope with a high magnification? </li>
                <li> What is the possible outcome if you will not put a Methylene blue? Does it work to see a cell? </li>
                <li> Knowing that mouth is the first channel of our chemical digestion. 
                    Then the power of saliva will take over the process for breaking down the food we eat. 
                    Now, just keeping it our mind. What organelles would possibly be the mouth of a human? 
                    Why?  </li>
            </ol> 
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