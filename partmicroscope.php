<?php
include "include/header.php";
include "security.php";
?>

<br><br>



<div class="card-body" >

    <h3 style="text-align: center;"> 
       Parts of Microscope
    </h3>

    <div class="text-center">
        <img src="images/microscope.png" class="img-fluid rounded" alt="..." style="width: 400px; height:400px;">
    </div>


    <div class="text-center">
        <button type="button" class="btn btn-outline-info mb-2" id="1" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">1</button>
        <button type="button" class="btn btn-outline-info mb-2" id="2" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">2</button>
        <button type="button" class="btn btn-outline-info mb-2" id="3" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">3</button>
        <button type="button" class="btn btn-outline-info mb-2" id="4" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">4</button>
        <button type="button" class="btn btn-outline-info mb-2" id="5" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">5</button>
        <button type="button" class="btn btn-outline-info mb-2" id="6" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">6</button>
        <button type="button" class="btn btn-outline-info mb-2" id="7" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">7</button>
        <button type="button" class="btn btn-outline-info mb-2" id="8" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">8</button>
        <button type="button" class="btn btn-outline-info mb-2" id="9" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">9</button>
        <button type="button" class="btn btn-outline-info mb-2" id="10" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">10</button>
        <button type="button" class="btn btn-outline-info mb-2" id="11" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">11</button>
        <button type="button" class="btn btn-outline-info mb-2" id="12" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">12</button>
        <button type="button" class="btn btn-outline-info mb-2" id="13" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">13</button>
        <button type="button" class="btn btn-outline-info mb-2" id="14" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">14</button>
        <button type="button" class="btn btn-outline-info mb-2" id="15" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">15</button>
        <button type="button" class="btn btn-outline-info mb-2" id="16" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">16</button>
        <button type="button" class="btn btn-outline-info mb-2" id="17" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">17</button>
        <button type="button" class="btn btn-outline-info mb-2" id="18" onClick="click_id(this.id)" data-toggle="modal" data-target="#exampleModal">18</button>
    </div>


</div>


<br>


<?php
include "include/footer.php";
?>

<script>

    function click_id(clicked_id){

        if(clicked_id == 1){
            document.getElementById('exampleModalLabel').innerHTML = "Eyepiece";
            document.getElementById('message').innerHTML = "Also known as the ocular. This is the part used to look through the microscope. Its standard magnification is 10x with an optional eyepiece having magnifications from 5X – 30X.";
        }
        if(clicked_id == 2){
            document.getElementById('exampleModalLabel').innerHTML = "Diopter Adjustment";
            document.getElementById('message').innerHTML = "Allows you to customize the viewfinder so that you can see a clear, focused image inside the viewfinder without using eyeglasses or contact lenses to correct your vision.";
        }
        if(clicked_id == 3){
            document.getElementById('exampleModalLabel').innerHTML = "Nose Piece";
            document.getElementById('message').innerHTML = "Also known as the revolving turret. It holds the objective lenses. It is movable hence it can revolved the objective lenses depending on the magnification power of the lens.";
        }
        if(clicked_id == 4){
            document.getElementById('exampleModalLabel').innerHTML = "Objective Lenses";
            document.getElementById('message').innerHTML = "These are the major lenses used for specimen visualization. They have a magnification power of 40x-100X. There are about 1- 4 objective lenses placed on one microscope, in that some are rare facing and others face forward.  Each lens has its own magnification power.";
        }
        if(clicked_id == 5){
            document.getElementById('exampleModalLabel').innerHTML = "Stage Clips";
            document.getElementById('message').innerHTML = "Hold the slides in place. If your microscope has a mechanical stage, you will be able to move the slide around by turning two knobs. One moves it left and right, the other moves it up and down.";
        }
        if(clicked_id == 6){
            document.getElementById('exampleModalLabel').innerHTML = "Aperture";
            document.getElementById('message').innerHTML = "This is a hole on the microscope stage, through which the transmitted light from the source reaches the stage.";
        }
        if(clicked_id == 7){
            document.getElementById('exampleModalLabel').innerHTML = "Diaphragm";
            document.getElementById('message').innerHTML = "It’s also known as the iris. It’s found under the stage of the microscope and its primary role is to control the amount of light that reaches the specimen. It’s an adjustable apparatus, hence controlling the light intensity and the size of the beam of light that gets to the specimen.";
        }
        if(clicked_id == 8){
            document.getElementById('exampleModalLabel').innerHTML = "Condenser";
            document.getElementById('message').innerHTML = "These are lenses that are used to collect and focus light from the illuminator into the specimen. They are found under the stage next to the diaphragm of the microscope.";
        }
        if(clicked_id == 9){
            document.getElementById('exampleModalLabel').innerHTML = "Light Source";
            document.getElementById('message').innerHTML = "Provides light for viewing the specimen.";
        }
        if(clicked_id == 10){
            document.getElementById('exampleModalLabel').innerHTML = "Head";
            document.getElementById('message').innerHTML = "This is also known as the body, it carries the optical parts in the upper part of the microscope.";
        }
        if(clicked_id == 11){
            document.getElementById('exampleModalLabel').innerHTML = "Arms";
            document.getElementById('message').innerHTML = "This is the part connecting the base and to the head and the eyepiece tube to the base of the microscope. It gives support to the head of the microscope and it is also used when carrying the microscope.";
        }
        if(clicked_id == 12){
            document.getElementById('exampleModalLabel').innerHTML = "Stage";
            document.getElementById('message').innerHTML = "This is the section on which the specimen is placed for viewing. They have stage clips that hold the specimen slides in place. The most common stage is a mechanical stage, which allows the control of the slides by moving the slides using the mechanical knobs on the stage instead of moving it manually.";
        }
        if(clicked_id == 13){
            document.getElementById('exampleModalLabel').innerHTML = "Coarse Adjustment Knob";
            document.getElementById('message').innerHTML = "Large knob used for focusing the image under low power (general focusing).";
        }
        if(clicked_id == 14){
            document.getElementById('exampleModalLabel').innerHTML = "Fine Adjustment Knob";
            document.getElementById('message').innerHTML = "Smaller knob used for focusing the image with the medium- and high-power objectives (fine-tuning).";
        }
        if(clicked_id == 15){
            document.getElementById('exampleModalLabel').innerHTML = "Stage Control";
            document.getElementById('message').innerHTML = "These allow you to move your slide while you are viewing it, but only if the slide is properly clipped in with the stage clips.";
        }
        if(clicked_id == 16){
            document.getElementById('exampleModalLabel').innerHTML = "Base";
            document.getElementById('message').innerHTML = "It acts as microscopes support. It also carries microscopic illuminators.";
        }
        if(clicked_id == 17){
            document.getElementById('exampleModalLabel').innerHTML = "Brightness Adjustment";
            document.getElementById('message').innerHTML = "It is used to vary the light that passes through the stage opening and helps to adjust both the contrast and resolution of a specimen. It is particularly useful at higher powers.";
        }
        if(clicked_id == 18){
            document.getElementById('exampleModalLabel').innerHTML = "Light Switch";
            document.getElementById('message').innerHTML = "This switch on the base of the microscope turns the illuminator off and on.";
        }
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
      <div class="modal-body" id="message">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>