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
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-5/assets/css/contact-5.css">

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
        <a href="board.php" class="nav-item nav-link"><i class="fa-solid fa-chess-board"></i>  SERVICE TYPE</a>
        <a href="center.php" class="nav-item nav-link"><i class="fa-brands fa-centercode"></i> CONTACT US </a>
        
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

<!-- Contact 5 - Bootstrap Brain Component -->
<!--<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-8">
        <h3 class="fs-5 mb-2 text-secondary text-uppercase">Contact</h3>
        <h2 class="display-5 mb-4 mb-md-5 mb-xl-8">We're always on the lookout to work with new clients. Please get in touch in one of the following ways.</h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center">
      <div class="col-12 col-lg-6">
        <div class="border overflow-hidden">

          <form action="#!">
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
              <div class="col-12">
                <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
              </div>
              <div class="col-12 col-md-6">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                  </span>
                  <input type="email" class="form-control" id="email" name="email" value="" required>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                  </span>
                  <input type="tel" class="form-control" id="phone" name="phone" value="">
                </div>
              </div>
              <div class="col-12">
                <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="subject" name="subject" value="" required>
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <div class="mb-4 mb-md-5">
              <div class="mb-3 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                </svg>
              </div>
              <div>
                <h4 class="mb-2">Office</h4>
                <p class="mb-2">Please visit us to have a discussion.</p>
                <hr class="w-50 mb-3 border-dark-subtle">
                <address class="m-0 text-secondary">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
              </div>
            </div>
            <div class="row mb-sm-4 mb-md-5">
              <div class="col-12 col-sm-6">
                <div class="mb-4 mb-sm-0">
                  <div class="mb-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-2">Phone</h4>
                    <p class="mb-2">Please speak with us directly.</p>
                    <hr class="w-75 mb-3 border-dark-subtle">
                    <p class="mb-0">
                      <a class="link-secondary text-decoration-none" href="tel:+15057922430">(505) 792-2430</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="mb-4 mb-sm-0">
                  <div class="mb-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                      <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                      <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-2">Email</h4>
                    <p class="mb-2">Please write to us directly.</p>
                    <hr class="w-75 mb-3 border-dark-subtle">
                    <p class="mb-0">
                      <a class="link-secondary text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="mb-3 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                </svg>
              </div>
              <div>
                <h4 class="mb-2">Opening Hours</h4>
                <p class="mb-2">Explore our business opening hours.</p>
                <hr class="w-50 mb-3 border-dark-subtle">
                <div class="d-flex mb-1">
                  <p class="text-secondary fw-bold mb-0 me-5">Mon - Fri</p>
                  <p class="text-secondary mb-0">9am - 5pm</p>
                </div>
                <div class="d-flex">
                  <p class="text-secondary fw-bold mb-0 me-5">Sat - Sun</p>
                  <p class="text-secondary mb-0">9am - 2pm</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->



 <!-- contact page -->
 <section class="contact py-5" id="contact">
            <div class="container py-md-5 py-4 mb-5">
                <div class="mx-auto" style="max-width:100%">
                    <div class="row ">
                        <div class="col-md-5 ">
                            <h3 class="font-weight-bold mb-md-5 mb-4">Get in touch with us</h3>
                           <div class="cont-details">
                               
                                <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+91 9932069297">+91 9932069297</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-envelope-open"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:info@proyash.com" class="mail">info@proyash.org.in</a></p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-7 mt-md-0 mt-4">
                            <div class="map-iframe">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58892.3399105637!2d88.29362489256499!3d22.69955813997336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89c9c605b6925%3A0x2b3aa44494f17d5a!2sKonnagar%2C%20Mirpur%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1632229451148!5m2!1sen!2sin"
                                    width="100%" height="400" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- contact form -->
                    <div class="contact-form-sec pt-5 mt-md-5">
                        <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
                            <h3 class="title-main">We will Answer all your <span>Questions</span></h3>
                        </div>
                        <div class="row contact-block align-items-center">
                            <div class="col-md-5 contact-left">
                                <img src="img/contact.jpg" alt="" class="img-fluid img-responsive">
                            </div>
                            <div class="col-md-7 contact-right mt-md-0 mt-4 pl-lg-4">
                                <form action="https://sendmail.w3layouts.com/submitForm" method="post"
                                    class="signin-form">
                                    <div class="input-grids">
                                        <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*"
                                            class="contact-input" required="" />
                                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                                            class="contact-input" required="" />
                                        <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*"
                                            class="contact-input" required="" />
                                    </div>
                                    <div class="form-input">
                                        <textarea name="w3lMessage" id="w3lMessage"
                                            placeholder="Type your message here*" required=""></textarea>
                                    </div>
                                    <button class="btn btn-style btn-style-secondary mt-sm-3 text-white">Send
                                        Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //contact form -->
                </div>
            </div>
                                </section>

<!-- *************Footer***************-->

<?php include ("footer.php");?>

<!-- *************Footer***************-->
</div>
</body>
</html>