<?php
include "include/header.php";
include "security.php";
?>

<br><br>



<div class="card-body" >

    <!-- <h3 style="text-align: center;"> 
    The page will automatically buttons in when you click the eyepiece, and different options will show on each side of the eyepiece. 
    For instance, the website provides two types of cells. 
    If you want to view what's inside a plant cell, select the plant cell option.
    </h3> -->
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 style="text-align: center;"> TYPE OF CELL</h4>
                <div  class="text-center">
                    <button type="button" class="btn btn-outline-primary" id="animal" onclick="enablebtnanimal()"> ANIMAL </button>
                    <button type="button" class="btn btn-outline-secondary" id="plant" onclick="enablebtnplant()"> PLANT </button>
                </div>
                <br><br>
            </div>
            <div class="col-md-4">
                
                <br><br>
            </div>
            <div class="col-md-4">
                <h4 style="text-align: center;"> LENS MAFNIFICATION</h4>
                <div  class="text-center">
                    <button type="button" class="btn btn-primary" id="high" onclick="high()" data-toggle="modal" data-target="#exampleModal"> HIGH </button>
                    <button type="button" class="btn btn-secondary" id="low" onclick="low()" data-toggle="modal" data-target="#exampleModal1"> LOW </button>
                </div>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                
                <br><br>
            </div>
            <div class="col-md-4">
                <h4 style="text-align: center;"> CELL IMAGE </h4>
                <img src="images/cell.png" class="rounded mx-auto d-block" id="cell" alt="..." style="width: 250px; height:250px;">
                <br><br>
            </div>
            <div class="col-md-4">
                
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h4 style="text-align: center;"> LIGHT </h4>
                <div  class="text-center">
                    <button type="button" class="btn btn-outline-info" id="white"> WHITE </button>
                    <button type="button" class="btn btn-outline-dark" id="yellow"> YELLOW </button>
                </div>
                <br><br>
            </div>
            <div class="col-md-4">
                
                <br><br>
            </div>
            <div class="col-md-4">
                <h4 style="text-align: center;"> OTHER </h4>
                <div  class="text-center">
                    <button type="button" class="btn btn-info" id="knob" onclick="courseknob()" data-toggle="modal" data-target="#exampleModal3"> COURSE KNOB </button>
                    <button type="button" class="btn btn-dark" id="chemical" onclick="chem()" data-toggle="modal" data-target="#exampleModal2"> CHEMICAL </button>
                </div>
                <br><br>
            </div>
        </div>
    </div>

    <br><br>

   
    <br>

</div>




<br>


<?php
include "include/footer.php";
?>


<script>

var animal = 0;
var plant = 0;

document.getElementById("high").disabled = true;
document.getElementById("low").disabled = true;
document.getElementById("white").disabled = true;
document.getElementById("yellow").disabled = true;
document.getElementById("knob").disabled = true;
document.getElementById("chemical").disabled = true;


function enablebtnanimal() {
    document.getElementById('cell').src="images/cheek40x.png";
    document.getElementById("cell").style.backgroundSize = "260px 260px";
    document.getElementById("high").disabled = false;
    document.getElementById("low").disabled = false;
    document.getElementById("white").disabled = false;
    document.getElementById("yellow").disabled = false;
    document.getElementById("knob").disabled = false;
    document.getElementById("chemical").disabled = false;
    animal++;
    plant = 0;
}

function enablebtnplant() {
    document.getElementById('cell').src="images/plantcell.png";
    document.getElementById("high").disabled = false;
    document.getElementById("low").disabled = false;
    document.getElementById("white").disabled = false;
    document.getElementById("yellow").disabled = false;
    document.getElementById("knob").disabled = false;
    document.getElementById("chemical").disabled = false;
    plant++;
    animal = 0;
}


function high() {

    if(animal >= 1){
        document.getElementById('exampleModalLabel').innerHTML = "Cheek Cell (High)";
        document.getElementById('message').style.backgroundImage="url(images/cheek100x.png)"; 
        document.getElementById("message").style.backgroundSize = "cover";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('exampleModalLabel').innerHTML = "Onion Cell (High)";
        document.getElementById('message').style.backgroundImage="url(images/planthigh.png)"; 
        document.getElementById("message").style.backgroundSize = "cover";
        animal = 0;
    }
}

function low() {

    if(animal >= 1){
        document.getElementById('exampleModalLabel1').innerHTML = "Cheek Cell (Low)";
        document.getElementById('message1').style.backgroundImage="url(images/cheek40x.png)"; 
        document.getElementById("message1").style.backgroundSize = "280px 280px";
        document.getElementById("message1").style.backgroundSize = "cover";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('exampleModalLabel1').innerHTML = "Onion Cell (Low)";
        document.getElementById('message1').style.backgroundImage="url(images/plant10x.png)"; 
        document.getElementById("message1").style.backgroundSize = "cover";
        animal = 0;
    }
}

// function modalhigh1() {
//     if(animal >= 1){
//         document.getElementById('message').style.backgroundImage="url(images/animalhigh2x.png)";
//         document.getElementById('message').style.backgroundRepeat = "no-repeat"; 
//         document.getElementById('message').style.backgroundPosition = "center center";
//         document.getElementById("message").style.backgroundSize = "180px 180px";
//         plant = 0;
//     }

//     if(plant >= 1){
//         document.getElementById('message').style.backgroundImage="url(images/planthigh.png)";
//         document.getElementById('message').style.backgroundRepeat = "no-repeat"; 
//         document.getElementById('message').style.backgroundPosition = "center center";
//         document.getElementById("message").style.backgroundSize = "180px 180px";
//         animal = 0;
//     }
// }

// function modalhigh2() {
//     if(animal >= 1){
//         document.getElementById('message').style.backgroundImage="url(images/animalhigh2x.png)";
//         document.getElementById('message').style.backgroundRepeat = "no-repeat"; 
//         document.getElementById('message').style.backgroundPosition = "center center";
//         document.getElementById("message").style.backgroundSize = "230px 230px";
//         plant = 0;
//     }

//     if(plant >= 1){
//         document.getElementById('message').style.backgroundImage="url(images/planthigh.png)";
//         document.getElementById('message').style.backgroundRepeat = "no-repeat"; 
//         document.getElementById('message').style.backgroundPosition = "center center";
//         document.getElementById("message").style.backgroundSize = "230px 230px";
//         animal = 0;
//     }
// }

function modalhigh3() {
    if(animal >= 1){
        document.getElementById('message').style.backgroundImage="url(images/cheek40x.png)";
        document.getElementById('message').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message').style.backgroundPosition = "center center";
        document.getElementById("message").style.backgroundSize = "280px 280px";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('message').style.backgroundImage="url(images/planthigh.png)";
        document.getElementById('message').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message').style.backgroundPosition = "center center";
        document.getElementById("message").style.backgroundSize = "280px 280px";
        animal = 0;
    }
}






function modallow1() {
    if(animal >= 1){
        document.getElementById('message1').style.backgroundImage="url(images/animallow.png)";
        document.getElementById('message1').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message1').style.backgroundPosition = "center center";
        document.getElementById("message1").style.backgroundSize = "260px 260px";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('message1').style.backgroundImage="url(images/plant10x.png)";
        document.getElementById('message1').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message1').style.backgroundPosition = "center center";
        document.getElementById("message1").style.backgroundSize = "260px 260px";
        animal = 0;
    }
}

function modallow2() {
    if(animal >= 1){
        document.getElementById('message1').style.backgroundImage="url(images/cheek40x.png)";
        document.getElementById('message1').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message1').style.backgroundPosition = "center center";
        document.getElementById("message1").style.backgroundSize = "270px 270px";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('message1').style.backgroundImage="url(images/plant40x.png)";
        document.getElementById('message1').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message1').style.backgroundPosition = "center center";
        document.getElementById("message1").style.backgroundSize = "270px 270px";
        animal = 0;
    }
}

// function modallow3() {
//     if(animal >= 1){
//         document.getElementById('message1').style.backgroundImage="url(images/animallow.png)";
//         document.getElementById('message1').style.backgroundRepeat = "no-repeat"; 
//         document.getElementById('message1').style.backgroundPosition = "center center";
//         document.getElementById("message1").style.backgroundSize = "270px 270px";
//         plant = 0;
//     }

//     if(plant >= 1){
//         document.getElementById('message1').style.backgroundImage="url(images/plantlow.png)";
//         document.getElementById('message1').style.backgroundRepeat = "no-repeat"; 
//         document.getElementById('message1').style.backgroundPosition = "center center";
//         document.getElementById("message1").style.backgroundSize = "270px 270px";
//         animal = 0;
//     }
// }




function chem() {

    if(animal >= 1){
        document.getElementById('exampleModalLabel2').innerHTML = "Cheek Cell (With Methylene Blue)";
        document.getElementById('message2').style.backgroundImage="url(images/cheekwithmb10x.png)"; 
        document.getElementById("message2").style.backgroundSize = "280px 280px";
        document.getElementById("message2").style.backgroundSize = "cover";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('exampleModalLabel2').innerHTML = "Onion Cell (With Iodine)";
        document.getElementById('message2').style.backgroundImage="url(images/plantonion10x.png)"; 
        document.getElementById("message2").style.backgroundSize = "cover";
        animal = 0;
    }
}



function modalchem1() {
    if(animal >= 1){
        document.getElementById('message2').style.backgroundImage="url(images/cheekwithmb10x.png)";
        document.getElementById('message2').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message2').style.backgroundPosition = "center center";
        document.getElementById("message2").style.backgroundSize = "260px 260px";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('message2').style.backgroundImage="url(images/plantonion10x.png)";
        document.getElementById('message2').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message2').style.backgroundPosition = "center center";
        document.getElementById("message2").style.backgroundSize = "260px 260px";
        animal = 0;
    }
}


function modalchem2() {
    if(animal >= 1){
        document.getElementById('message2').style.backgroundImage="url(images/cheekwithmb40x.png)";
        document.getElementById('message2').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message2').style.backgroundPosition = "center center";
        document.getElementById("message2").style.backgroundSize = "270px 270px";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('message2').style.backgroundImage="url(images/plantonion40x.jpg)";
        document.getElementById('message2').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message2').style.backgroundPosition = "center center";
        document.getElementById("message2").style.backgroundSize = "270px 270px";
        animal = 0;
    }
}



function modalchem3() {
    if(animal >= 1){
        document.getElementById('message2').style.backgroundImage="url(images/cheekwithmb100x.png)";
        document.getElementById('message2').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message2').style.backgroundPosition = "center center";
        document.getElementById("message2").style.backgroundSize = "280px 280px";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('message2').style.backgroundImage="url(images/plantonion100x.jpg)";
        document.getElementById('message2').style.backgroundRepeat = "no-repeat"; 
        document.getElementById('message2').style.backgroundPosition = "center center";
        document.getElementById("message2").style.backgroundSize = "280px 280px";
        animal = 0;
    }
}



function courseknob() {

    if(animal >= 1){
        document.getElementById('exampleModalLabel3').innerHTML = "Cheek Cell (With  Methylene Blue)";
        document.getElementById('message3').style.backgroundImage="url(images/cheekwithmb10x.png)"; 
        document.getElementById("message3").style.backgroundSize = "cover";
        plant = 0;
    }

    if(plant >= 1){
        document.getElementById('exampleModalLabel3').innerHTML = "Onion Cell (With Iodine)";
        document.getElementById('message3').style.backgroundImage="url(images/plantonion10x.png)"; 
        document.getElementById("message3").style.backgroundSize = "cover";
        animal = 0;
    }
}



function updateValue(val) {
     var rangeval = document.getElementById('customRange3').value=val;
    //  var obj = document.getElementById('message3');
     
     if(rangeval == 1){
        document.getElementById("message3").style.filter = "blur(1px)";
     }

     if(rangeval == 2){
        document.getElementById("message3").style.filter = "blur(2px)";
     }

     if(rangeval == 3){
        document.getElementById("message3").style.filter = "blur(3px)";
     }

     if(rangeval == 0){
        document.getElementById("message3").style.filter = "blur(0px)";
     }

    //  obj.style["-webkit-filter"] = "blur("+document.getElementById("blurValue").value+"px)";
         
}






</script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color: black;">
        <div id="message" style="border: 5px solid black; border-radius: 50%; width: 250px; height:250px; display:block; margin-right:auto; margin-left:auto;">  </div>
      <!-- </div> -->

      <br>

            <div class="text-center" id="mhigh">
                <!-- <button class="btn btn-outline-info rounded-circle"  onclick="modalhigh1()"> 4X </button>
                <button class="btn btn-outline-info rounded-circle"  onclick="modalhigh2()"> 40X </button> -->
                <button class="btn btn-outline-info rounded-circle"  onclick="modalhigh3()"> 100X </button>
            </div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body" style="background-color: black;" >
        <div id="message1" style="border: 5px solid black; border-radius: 50%; width: 250px; height:250px; display:block; margin-right:auto; margin-left:auto;"> </div>
      <!-- </div> -->

      <br>

            <div class="text-center" id="mhigh">
                <button class="btn btn-outline-info rounded-circle"  onclick="modallow1()"> 10X </button>
                <button class="btn btn-outline-info rounded-circle"  onclick="modallow2()"> 40X </button>
                <!-- <button class="btn btn-outline-info rounded-circle"  onclick="modallow3()"> 100X </button> -->
            </div>
      </div> 


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<!-- chemical -->
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body" style="background-color: black;" >
        <div id="message2" style="border: 5px solid black; border-radius: 50%; width: 250px; height:250px; display:block; margin-right:auto; margin-left:auto;"> </div>
      <!-- </div> -->

      <br>

            <div class="text-center" id="mhigh">
                <button class="btn btn-outline-info rounded-circle"  onclick="modalchem1()"> 10X </button>
                <button class="btn btn-outline-info rounded-circle"  onclick="modalchem2()"> 40X </button>
                <button class="btn btn-outline-info rounded-circle"  onclick="modalchem3()"> 100X </button>
            </div>
      </div> 


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<!-- course knob -->
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body" style="background-color: black;" >
        <div id="message3" style="border: 5px solid black; border-radius: 50%; width: 250px; height:250px; display:block; margin-right:auto; margin-left:auto;"> </div>
      <!-- </div> -->

      <br>

            <div class="text-center" id="mhigh">
                <!-- <button class="btn btn-outline-info rounded-circle"  onclick="modalchem1()"> 4X </button>
                <button class="btn btn-outline-info rounded-circle"  onclick="modalchem2()"> 40X </button>
                <button class="btn btn-outline-info rounded-circle"  onclick="modalchem3()"> 100X </button> -->
                <input type="range" class="form-range" min="0" max="3" step="1" id="customRange3" value="0" onchange="updateValue(this.value);">
            </div>
      </div> 

      <h1 id="h1"></h1>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

