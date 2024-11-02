<?php
include "include/header.php";
include "security.php";
?>

<br>

<div class="text-center">
    <button class="btn btn-outline-info" id="btnShowAnimal" onclick="showAnimal()"> ANIMAL </button>
    <button class="btn btn-outline-info" id="btnShowPlant"  onclick="showPlant()"> PLANT </button>
</div>

<br>

<div class="text-center" id="animaltypeCheekCell">
    <button class="btn btn-primary" id="btnCheekCell" onclick="location.href='cheekcell.php';"> Cheek Cell </button>
    <button class="btn btn-secondary" onclick="location.href='stomachcell.php';"  > Stomach Cell </button>
    <button class="btn btn btn-info"  > Other </button>
</div>

<div class="text-center" id="planttypeOnionCell">
    <button class="btn btn-primary" id="btnOnionCell"  onclick="location.href='onioncell.php';"> Onion Cell </button>
    <button class="btn btn-secondary"  onclick="location.href='leafcell.php';" > Leaf Cell </button>
    <button class="btn btn btn-info"  > Other </button>
</div>



<div class="card-body" >



<br><br>

<div class="row">
        <div class="col-md-4">
            <h4 style="text-align: center;"> LENS MAGNIFICATION</h4>
            <div  class="text-center">
                <button type="button" class="btn btn-secondary" id="low40x" onclick="low40x()" > LOW </button>
                <button type="button" class="btn btn-primary" id="high100x" onclick="high100x()" > HIGH </button>
            </div>
            <!-- button show hide for low 40x -->
            <div  class="text-center" id="showSubBtnLow40x">
                <br>
                <button class="btn btn-outline-info rounded-circle" onclick="showSubBtnLow40x()" > 40X </button>
            </div>
            <!-- button show hide for low 100x -->
            <div  class="text-center" id="showSubBtnLow100x">
                <br>
                <button class="btn btn-outline-info rounded-circle" onclick="showSubBtnHigh100x()" > 100X </button>
            </div>
            <br>
        </div>
        <div class="col-md-4">
            <h4 style="text-align: center;"> CHEEK CELL IMAGE  </h4>
            <h4 style="text-align: center;"> (No Chemical) </h4>
            <br>
            <div  style="border-radius: 50%; border: 10px dashed black; width:300px; height:305px; display:block; margin-right:auto; margin-left:auto; ">
            <div id="cell" style="border-radius: 50%;  width:280px; height:280px; display:block; margin-right:auto; margin-left:auto; ">  </div>
            </div>
            <br>
        </div>
        <div class="col-md-4">
            <h4 style="text-align: center;"> OTHER </h4>
            <div  class="text-center">
                <button type="button" class="btn btn-dark mr-2 mb-2" id="chemical" onclick="showChemicalSubBtn()" > CHEMICAL </button>
                <button type="button" class="btn btn-info mr-2 mb-2" id="knob" onclick="showKnobSubBtn()" > KNOB </button>
            </div>
            <!-- button show hide for chemical -->
            <div  class="text-center" id="showSubBtnChemical">
                <button type="button" class="btn btn-outline-info" id="hrefCheekCellMb" onclick="location.href='cheekcellmb.php';" > Mythelene Blue </button>
                <button type="button" class="btn btn-outline-info" id="hrefCheekCell" onclick="location.href='cheekcell.php';" > No Solution </button>
            </div>
            <!-- button show hide for knob -->
            <div  class="text-center" id="showSubBtnKnob">
                <button type="button" class="btn btn-outline-info" id="subBtnCourse" onclick="subBtnCourse()"> Course </button>
                <button type="button" class="btn btn-outline-info" id="subBtnFine" onclick="subBtnFine()"> Fine </button>
            </div>
            <!-- input range show from sub btn course -->
            <div  class="text-center" id="showInputRangeCourse">
                <br>
                <input type="range" class="form-range" min="0" max="3" step="1" id="customRangeCourse" value="0" list="tickmarks" onchange="updateValueCourse(this.value);">
                <datalist id="tickmarks">
                    <option value="0"></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </datalist>
            </div>
            <!-- input range show from sub btn Fie -->
            <div  class="text-center" id="showInputRangeKnob">
                <br>
                <input type="range" class="form-range" min="0" max="3" step="1" id="customRangeFine" value="3" list="tickmarks1" onchange="updateValueFine(this.value);">
                <datalist id="tickmarks1">
                    <option value="0"></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </datalist>
            </div>
            <br><br>
        </div>
    </div>

<br>


<?php
include "include/footer.php";
?>

<script>

    var resultCourse;
    var resultFine;
    var low40X = 0;
    var high100X = 0;
    

    //set default some divs, buttons, images and other
    //document.getElementById('animaltypeCheekCell').style.display = 'none';
    document.getElementById('planttypeOnionCell').style.display = 'none';
    document.getElementById('showSubBtnChemical').style.display = 'none';
    document.getElementById('showSubBtnKnob').style.display = 'none';
    document.getElementById('showInputRangeCourse').style.display = 'none';
    document.getElementById('showInputRangeKnob').style.display = 'none';
    document.getElementById('showSubBtnLow40x').style.display = 'none';
    document.getElementById('showSubBtnLow100x').style.display = 'none';
    

    //disable cheekcell button, low,  high button and cheek cell with mb
    document.getElementById("btnCheekCell").disabled = true;
    document.getElementById("low40x").disabled = true;
    document.getElementById("high100x").disabled = true;
    document.getElementById("hrefCheekCell").disabled = true;

    //show animal button choices
    function showAnimal(){

        document.getElementById('animaltypeCheekCell').style.display = 'block';
        document.getElementById('planttypeOnionCell').style.display = 'none';

    }

    //show plant button choices
    function showPlant(){

        document.getElementById('planttypeOnionCell').style.display = 'block';
        document.getElementById('animaltypeCheekCell').style.display = 'none';

    }


    //show chemical sub  button choices
    function showChemicalSubBtn(){

        document.getElementById('cell').style.backgroundImage="url(images/cheek40x.png)"; 
        document.getElementById("cell").style.backgroundSize = "100px 100px";
        document.getElementById("cell").style.backgroundSize = "cover";
        document.getElementById("cell").style.filter = "blur(5px)";

        document.getElementById('showSubBtnChemical').style.display = 'block';
        document.getElementById('showSubBtnKnob').style.display = 'none';
        document.getElementById('showInputRangeCourse').style.display = 'none';
        document.getElementById('showInputRangeKnob').style.display = 'none';

    }


    //show chemical sub  button choices
    function showKnobSubBtn(){

        document.getElementById('cell').style.backgroundImage="url(images/cheek40x.png)"; 
        document.getElementById("cell").style.backgroundSize = "100px 100px";
        document.getElementById("cell").style.backgroundSize = "cover";
        document.getElementById("cell").style.filter = "blur(5px)";

        document.getElementById('showSubBtnKnob').style.display = 'block';
        document.getElementById('showSubBtnChemical').style.display = 'none';
        document.getElementById('showInputRangeCourse').style.display = 'none';
        document.getElementById('showInputRangeKnob').style.display = 'none';

    }


    //function to enable low high button when course button is clicked
    function subBtnCourse(){

        document.getElementById("low40x").disabled = false;
        document.getElementById("high100x").disabled = false;
        document.getElementById("subBtnCourse").disabled = true;
        document.getElementById("subBtnFine").disabled = false;
        document.getElementById('showInputRangeCourse').style.display = 'block';
        document.getElementById('showInputRangeKnob').style.display = 'none';

    }


    //function to enable low high button when fine button is clicked
    function subBtnFine(){

        document.getElementById("low40x").disabled = false;
        document.getElementById("high100x").disabled = false;
        document.getElementById("subBtnFine").disabled = true;
        document.getElementById("subBtnCourse").disabled = false;
        document.getElementById('showInputRangeKnob').style.display = 'block';
        document.getElementById('showInputRangeCourse').style.display = 'none';
        document.getElementById("cell").style.filter = "blur(6px)";

    }


    function updateValueCourse(val) {

        resultCourse = document.getElementById('customRangeCourse').value=val;

       if(low40X >= 1){

            if(resultCourse == 1){

                document.getElementById("cell").style.filter = "blur(4px)";

            }

            if(resultCourse == 2){

                document.getElementById("cell").style.filter = "blur(0px)";

            }

            if(resultCourse == 3){

                document.getElementById("cell").style.filter = "blur(5px)";

            }

            if(resultCourse == 0){

                document.getElementById("cell").style.filter = "blur(8px)";

            }
       }


       if(high100X >= 1){

            if(resultCourse == 1){

                document.getElementById("cell").style.filter = "blur(4px)";

            }

            if(resultCourse == 2){

                document.getElementById("cell").style.filter = "blur(0px)";

            }

            if(resultCourse == 3){

                document.getElementById("cell").style.filter = "blur(5px)";

            }

            if(resultCourse == 0){

                document.getElementById("cell").style.filter = "blur(8px)";

            }
        }

            
    }

    function updateValueFine(val) {

        resultFine = document.getElementById('customRangeFine').value=val;

        if(low40X >= 1){

            if(resultFine == 1){

                document.getElementById("cell").style.filter = "blur(4px)";

            }

            if(resultFine == 2){

                document.getElementById("cell").style.filter = "blur(0px)";

            }

            if(resultFine == 3){

                document.getElementById("cell").style.filter = "blur(5px)";

            }

            if(resultFine == 0){

                document.getElementById("cell").style.filter = "blur(8px)";

            }
        }


        if(high100X >= 1){

            if(resultFine == 1){

                document.getElementById("cell").style.filter = "blur(4px)";

            }

            if(resultFine == 2){

                document.getElementById("cell").style.filter = "blur(0px)";

            }

            if(resultFine == 3){

                document.getElementById("cell").style.filter = "blur(5px)";

            }

            if(resultFine == 0){

                document.getElementById("cell").style.filter = "blur(8px)";

            }
        }
        
    }


    function low40x(){

        document.getElementById('showSubBtnLow40x').style.display = 'block';
        document.getElementById('showSubBtnLow100x').style.display = 'none';

        document.getElementById('cell').style.backgroundImage="url(images/cheek40x.png)"; 
        document.getElementById("cell").style.backgroundSize = "100px 100px";
        document.getElementById("cell").style.backgroundSize = "cover";

        
    }

    function high100x(){

        document.getElementById('showSubBtnLow100x').style.display = 'block';
        document.getElementById('showSubBtnLow40x').style.display = 'none';

        document.getElementById('cell').style.backgroundImage="url(images/cheek100x.jpg)"; 
        document.getElementById("cell").style.backgroundSize = "100px 100px";
        document.getElementById("cell").style.backgroundSize = "cover";


    }


    function showSubBtnLow40x(){

        document.getElementById('cell').style.backgroundImage="url(images/cheek40x.png)"; 
        document.getElementById("cell").style.backgroundSize = "100px 100px";
        document.getElementById("cell").style.backgroundSize = "cover";

        low40X++;
        high100X = 0;

    }






    function showSubBtnHigh100x(){

        document.getElementById('cell').style.backgroundImage="url(images/cheek100x.jpg)"; 
        document.getElementById("cell").style.backgroundSize = "100px 100px";
        document.getElementById("cell").style.backgroundSize = "cover";

        high100X++;
        low40X = 0;

    }

    

</script>

