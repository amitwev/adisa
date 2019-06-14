<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

   <!-- Our Stuff -->
   <link rel="stylesheet" type="text/css" href="/CSS/style.css">
   <script type="text/javascript" src="JS/script.js"></script>

   <!-- Favicon -->
   <link rel="shortcut icon" href="Images/favi1.ico" type="image/x-icon">
   <link rel="icon" href="Images/favi1.ico" type="image/x-icon">
   
   <title>Adisa Homepage</title>
</head>

<body>
   <header>
      <!-- Logo -->
      <div class="jumbotron text-center" id="site-logo" style="margin-bottom: 0px; padding-bottom:1%; padding-top:0.5% ">
         <a href="index.php"><img src="Images/Logo.png" alt="LOGO" width="20%"></a>
      </div>
   </header>

   <!-- Navigation Bar -->
   <nav id="navbar-frame">
      <?php include 'php/menu.php';?>
   </nav>

   <main>

      <!-- Carousel  -->
      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         </ol>
         <div class="carousel-inner" id="carousel-pics">
            <div class="carousel-item active">
               <img class="d-block w-100" src="../Images/home11.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="../Images/home12.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100 h-100" src="../Images/home13.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100 h-100" src="../Images/home14.jpg" alt="Fourth slide">
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
      <div class="row justify-content-around mt-5 m-5">
         <div class="col-md-5 col-sm-6">
            <div class="card text-center homepage-card"">
               <div class="card-body">
                  <h4 class="card-title homepage-card-title"><bdo dir="rtl"><b>קולקציית התכשיטים</b></h5>
                        <p id="homepage-card-text" class="card-text"><bdo dir="rtl">באתרנו תמצאי מגוון רחב של תכשיטים, מסוגים שונים כמו<br>
                              צמידים, עגילים, שרשראות וכו'.<br>
                              כל התכשיטים מורכבים בעבודת יד עם החומרים האיכותיים ביותר!<br>
                              אז למה שלא תתחדשי בכמה פריטים חדשים לכבוד סוף השנה?</p>
                        <a href="/Includes/Collection.php" class="btn"><b>מעבר לחנות</b></a>
               </div>
            </div>
         </div>
         <div class="col-md-5 col-sm-6">
            <div class="card text-center homepage-card">
               <div class="card-body">
                  <h4 class="card-title homepage-card-title"><bdo dir="rtl"><b>תכשיטים בעיצוב אישי</b></h5>
                        <p id="homepage-card-text" class="card-text"><bdo dir="rtl">לא מוצאת את התכשיט שאת אוהבת ותמיד מתפשרת?<br>
                              באתרנו תוכלי לעצב את התכשיט כרצונך!<br>
                              ישנם מגוון של סוגי שרשראות, אבנים, תליונים, סוגי חומרים וכו'<br>
                              אז קדימה למה את מחכה?!</p>
                        <a href="/Includes/contactUs.php" class="btn"><b>צור קשר</b></a>
               </div>
            </div>
        </div>
      </div>
      
      <!--Reviews-->
    <section class="text-center my-5" id="reviews-section">
      <h2 class="h1-responsive font-weight-bold my-5">Reviews</h2>
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item mb-5" data-ride="carousel">
          <!--Controls-->
          <div class="controls-top">
            <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
          </div>
          <!--Controls-->

          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active light-blue darken-4"></li>
            <li data-target="#multi-item-example" data-slide-to="1" class="light-blue darken-4"></li>
            <li data-target="#multi-item-example" data-slide-to="2" class="light-blue darken-4"></li>
          </ol>
          <!--Indicators-->

          <!--Slides-->
          <div class="carousel-inner" id="carousel-reviews" role="listbox">
          
            <!--First slide-->
            <div class="carousel-item active">
              <div class="col-md-4 grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">Anna Deynah</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>I loved the jewels very much! Varied and colorful (:</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">John Doe</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>I bought a gift for my girlfriend, she loved very much .. Thank you!</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">Abbey Clark</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>The shipment arrived quickly and in quality packaging!</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="far fa-star"> </i>
                  </div>
                </div>
              </div>
            </div>

            <!--Second slide-->
            <div class="carousel-item">
              <div class="col-md-4 grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">Blake Dabney</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>very good quality.</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 d-none d-md-block grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(6).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">Andrea Clay</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>I spoke on the phone with the jewelry designer to design something for me. She accepted my request and was very nice.
                                                                                        I will recommend to companies, thank you!</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                  </div>
                </div>
              </div>

              <div class="col-md-4 d-none d-md-block grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">Cami Gosse</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Personal attitude, beautiful design and quality materials. Thank you!</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="far fa-star"> </i>
                  </div>
                </div>
              </div>
            </div>

            <!--Third slide-->
            <div class="carousel-item">
              <div class="col-md-4 grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">Bobby Haley</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Very beautiful design style!</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">Elisa Janson</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>It is very nice to make a personal design for the jewelry I want.</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star-half-alt"> </i>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block grid-column">
                <div class="testimonial">
                  <!--Avatar-->
                  <div class="avatar mx-auto">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" width="100px;" class="rounded-circle img-fluid">
                  </div>
                  <!--Content-->
                  <h4 class="font-weight-bold mt-4">Rob Jacobs</h4>
                  <p class="font-weight-normal"><i class="fas fa-quote-left pr-2"></i>Fast Shipping!</p>
                  <!--Rating-->
                  <div class="grey-text">
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="far fa-star"> </i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
   </main>
   
   
    <!-- Footer -->
    <footer class="site-footer">
        <?php include 'php/footer.php';?>
    </footer>
   
   <!-- Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>