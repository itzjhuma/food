<!DOCTYPE html>
<html lang="eng">
<head>
</head>

<meta charset="utf-8">
<title>proyash</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--- Favicon-->
<link href="img/logo.png" rel="icon">

<!--Google web font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=**Quicksand:wght@500**&display=swap" rel="stylesheet">

<!---Font awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<script src="https://kit.fontawesome.com/a7612e0a07.js" crossorigin="anonymous"></script>

<!--css stylesheet-->
<link href="css/style.css" rel="stylesheet">

<!--JS stylesheet-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head><body>
<div>
    <!-- ********* Header *********-->

<?php include ("header.php");?>

<!-- Navigator bar -->

<div class="container-fluid bg-dark position-relative shadow ">
             <nav class="navbar navbar-expand-lg navbar-dark py-5 py-lg-0 px-0  px-lg-5">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between"  id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0 text-left">
                 <a href="index.php"  class="nav-item nav-link active"><i class="fa-solid fa-house-user"></i> HOME </a>
                <a href="about.php"  class="nav-item nav-link"><i class="fa-solid fa-address-card"></i> ABOUT US </a>
                <a href="board.php" class="nav-item nav-link"><i class="fa-solid fa-chess-board"></i>  SERVICE CARD</a>
                <a href="center.php"  class="nav-item nav-link"><i class="fa-brands fa-centercode"></i> CONTACT US </a>
                <a href="#"  class="nav-item nav-link active text-blue"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"  class="nav-item nav-link active text-blue"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="=+919932069297"  class="nav-item nav-link active text-blue"><i class="fa-brands fa-square-whatsapp"></i></a> 
                </div>
            </div>
            </nav>

        </div>

        <!-- Slider-->
          <!--
<div class="my-4">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="p1.jpg" class="d-block w-100" alt="..."></div>
    <div class="carousel-item active"><img src="p2.jpg" class="d-block w-100"alt="..."></div>
    <div class="carousel-item active"><img src="p3.jpg" class="d-block w-100" alt="..."></div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
  </div> -->

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 H-50" src="p1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 H-50" src="pizza.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 H-50" src="p3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- *************Footer***************-->

<?php include ("footer.php");?>



</div>
</body>
</html>
