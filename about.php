<!DOCTYPE html>
<html lang="eng">
<head>
</head>

<meta charset="utf-8">
<title>food- about us</title>
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
<link href="css/min.css" rel="stylesheet">

<!--JS stylesheet-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head><body>
<div>
<!-- ********* Header *********-->

<?php include ("header.php");?>

<!-- Navigator bar -->

<div class="container-fluid bg-dark position-relative shadow">
  <nav class="navbar navbar-expand-lg navbar-dark py-5 py-lg-0 px-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
  <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
               
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-start" id="navbarCollapse">
      <div class="navbar-nav font-weight-bold py-0 text-center">
        <a href="index.php" class="nav-item nav-link active"><i class="fa-solid fa-house-user"></i> HOME </a>
        <a href="about.php" class="nav-item nav-link"><i class="fa-solid fa-address-card"></i> ABOUT US </a>
        <a href="our portfolio.php" class="nav-item nav-link"><i class="fa-solid fa-circle-user"></i> Our Portfolio</a>
        <a href="explore.php" class="nav-item nav-link"><i class="fa-solid fa-bowl-rice"></i>Explore Rice </a>
        <a href="csr.php" class="nav-item nav-link"><i class="fa-solid fa-truck"></i>CSR</a>
        <a href="contact.php" class="nav-item nav-link"><i class="fa-brands fa-centercode"></i> CONTACT US </a>
        
    </div>
    </div>

  <!-- Social media icons -->
    <div class="col-lg-6 px-5 text-right">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fa-solid fa-magnifying-glass"></i>
            </div>
  
  </nav>
</div>


<!-- About 3 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
  <div class="container mb-4 mb-md-5">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-xxl-8">
        <img class="img-fluid rounded shadow" loading="lazy" src="creating-growth.jpg" alt="About 3">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row gy-2 gy-md-0 justify-content-xxl-center">
      <div class="col-12 order-md-1 col-md-8 col-xxl-6">
        <div class="text-center text-md-start">
          <h2 class="display-3 fw-bold lh-1">Lucas Henry</h2>
          <p class="text-secondary fs-4 mb-2">UX/UI Designer</p>
          <hr class="w-25 mx-auto ms-md-0 mb-4 text-secondary">
          <p>I am a UX/UI designer with a passion for creating user-centric digital experiences that are both beautiful and functional. I have over 12 years of experience in the industry, and I have worked on a wide range of projects, from small startups to large enterprises.</p>
          <p>I believe that the best designs are those that are based on a deep understanding of the user's needs and goals. I start every project by conducting thorough user research to learn about the user's pain points, motivations, and expectations. I then use this information to create designs that are both easy to use and enjoyable.</p>
        </div>
      </div>
      <div class="col-12 order-md-0 col-md-4 col-xxl-4">
        <div class="text-center text-md-start me-md-3 me-xl-5">
          <p class="mb-4">
            <span class="d-block display-6 lh-1">12+</span>
            <span class="fs-4 text-secondary">years of experience</span>
          </p>
          <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="button">Hire Me</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- *************Footer***************-->

<?php include ("footer.php");?>



</div>
</body>
</html>