<?php
include "include/header.php";
?>
<br> <br><br>

<!-- <img src="images/1.jpg" class="img-fluid" alt="" > <br>
<img src="images/2.jpg" class="img-fluid" alt="" > <br>
<img src="images/3.jpg" class="img-fluid" alt="" > <br>
<img src="images/4.jpg" class="img-fluid" alt="" > <br> -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" id="c"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" id="c"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" id="c"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3" id="c"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<?php
include "include/footer.php";
?>