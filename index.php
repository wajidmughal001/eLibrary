<?php 
include("header.php");
?>

  <div class="row">
    <div class="col-1"></div>
    <div class="col-8">
      <br>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
            <img src="img/5.jpg" class="d-block w-100" alt="...">
            </div>
          <div class="carousel-item" data-interval="2000">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    </div>
<!--     <div class="col-1"></div> -->
    <div class="col-3"> 
      <h3 class="text-center" style="color: green; font-weight: bold;">New Arrivals</h3>
      <br>
      <marquee direction="up">
       <div class="card bg-transparent" style="width: 15rem;">
          <img src="img/logo.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-success">Read More...</a>
          </div>
        </div>
      </marquee>
    </div>
  </div>
  <br>


<?php 
include("footer.php");
?>


<!--Slider and Alert end-->
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>