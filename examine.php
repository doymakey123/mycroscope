<?php
include "include/header.php";
include "security.php";
?>

<br>

<div class="text-center">
    <button class="btn btn-outline-info" id="btnAnimal" onclick="showAnimal()"> ANIMAL </button>
    <button class="btn btn-outline-info" id="btnPlant"  onclick="showPlant()"> PLANT </button>
</div>

<br>

<div class="text-center" id="animaltypeCell">
    <div class="container">
        <div class="row">
            <div class="col-2"> </div>
            <div class="col-8">
                <button class="btn btn-primary" id="btnCheek" onclick="location.href='cheekcell.php';" style="display: block; width: 100%; height:50px; font-size:medium; margin-top: 10px;"> Cheek Cell </button>
                <button class="btn btn-secondary" onclick="location.href='stomachcell.php';" style="display: block; width: 100%; height:50px; font-size:medium; margin-top: 10px;"  > Stomach Cell </button>
                <button class="btn btn btn-info" style="display: block; width: 100%; height:50px; font-size:medium; margin-top: 10px;" > Other </button>
            </div>
            <div class="col-2"> </div>
        </div>
    </div>
</div>

<div class="text-center" id="planttypeCell">
    <div class="container">
        <div class="row">
            <div class="col-2"> </div>
            <div class="col-8">
                <button class="btn btn-primary" id="btnOnion" onclick="location.href='onioncell.php';" style="display: block; width: 100%; height:50px; font-size:medium; margin-top: 10px;"> Onion Cell </button>
                <button class="btn btn-secondary" onclick="location.href='leafcell.php';" style="display: block; width: 100%; height:50px; font-size:medium; margin-top: 10px;"  > Leaf Cell </button>
                <button class="btn btn btn-info" style="display: block; width: 100%; height:50px; font-size:medium; margin-top: 10px;" > Other </button>
            </div>
            <div class="col-2"> </div>
        </div>
    </div>
</div>



<div class="card-body" >
    <br><br>

    

    <br><br>

</div>




<br>


<?php
include "include/footer.php";
?>

<script>

    //hide all divs
    document.getElementById('animaltypeCell').style.display = 'none';
    document.getElementById('planttypeCell').style.display = 'none';



    //show animal button choices
    function showAnimal(){

        document.getElementById('animaltypeCell').style.display = 'block';
        document.getElementById('planttypeCell').style.display = 'none';

    }

    //show plant button choices
    function showPlant(){

        document.getElementById('planttypeCell').style.display = 'block';
        document.getElementById('animaltypeCell').style.display = 'none';

    }


</script>

