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
<link href="css/style.min.css" rel="stylesheet">

<!--JS stylesheet-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head><body>
<div>
<!-- ********* Header *********-->

<?php include ("header.php");?>

<!-- Navigator bar -->

<div class="container-fluid bg-warning position-relative shadow">
  <nav class="navbar navbar-expand-lg navbar-dark py-5 py-lg-0 px-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
  <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
               
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-start" id="navbarCollapse">
      <div class="navbar-nav font-weight-bold py-0 text-left">
        <a href="index.php" class="nav-item nav-link active"><i class="fa-solid fa-house-user"></i> HOME </a>
        <a href="about.php" class="nav-item nav-link"><i class="fa-solid fa-address-card"></i> ABOUT US </a>
        <a href="service.php" class="nav-item nav-link"><i class="fa-solid fa-chess-board"></i>  SERVICE TYPE</a>
        <a href="contact.php" class="nav-item nav-link"><i class="fa-brands fa-centercode"></i> CONTACT US </a>
        
    </div>
    </div>
    <div class="col-lg-6 px-5 text-right">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
  </nav>
</div>



<section class="py-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center"> Food Services</h2>
        <p class="text-secondary mb-5 text-center">We have a team of experienced and talented professionals who can help you with every aspect of the product development process, from ideation to prototyping to launch.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row gy-5">
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-1-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
          </svg>
          <img src="drink.jpg" class="img-fluid mb-4" alt="SEO Consulting">
          <h5 class="m-2">Drink</h5>
          <p class="m-0 text-secondary">On our Food Delivery marketplace, users can conveniently search and discover multiple restaurant listings, browse their menus, place food orders, pay seamlessly, and track order deliveries. These orders are received and prepared by our restaurant partners and delivered to users through the large fleet of delivery partners on our platform.</p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-2-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z" />
          </svg>
          <h5 class="m-2">Web Development</h5>
          <p class="m-0 text-secondary">We can help you to design and develop a new website, or to update your existing website. We specialize in creating user-friendly websites.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-3-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z" />
          </svg>
          <h5 class="m-2">Digital Strategy</h5>
          <p class="m-0 text-secondary">We can help you to develop a digital strategy that will help you to achieve your business goals. This includes digital marketing for your business.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-4-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
          </svg>
          <h5 class="m-2">Web Design</h5>
          <p class="m-0 text-secondary">We can help you to create a visually appealing and user-friendly website. We take into account your brand identity and target audience.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
          </svg>
          <h5 class="m-2">Digital Marketing</h5>
          <p class="m-0 text-secondary">We can help you to promote your business online through a variety of digital marketing channels, including SEO, PPC, and email marketing.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center px-xl-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-6-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.21 3.855c-1.868 0-3.116 1.395-3.116 4.407 0 1.183.228 2.039.597 2.642.569.926 1.477 1.254 2.409 1.254 1.629 0 2.847-1.013 2.847-2.783 0-1.676-1.254-2.555-2.508-2.555-1.125 0-1.752.61-1.98 1.155h-.082c-.012-1.946.727-3.036 1.805-3.036.802 0 1.213.457 1.312.815h1.29c-.06-.908-.962-1.899-2.573-1.899Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582Z" />
          </svg>
          <h5 class="m-2">Media Production</h5>
          <p class="m-0 text-secondary">We can help you to create high-quality videos, photos, and other media content. We can help you to distribute your content through a variety of channels.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- *************Footer***************-->

<?php include ("footer.php");?>

<!-- *************Footer***************-->
</div>
</body>
</html>