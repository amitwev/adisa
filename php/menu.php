<?php
// CHECK IF IN HOMEPAGE
    If(basename($_SERVER['PHP_SELF']) == 'index.php'){
      echo '<!-- Navigation Bar  -->
      <nav class="navbar sticky-top nav-pills navbar-expand-md navbar-light bg-light shadow">
      <a class="navbar-brand" href="#top" ><img src="/Images/small_logo4.png" id="brand-logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-5">
            <li class="nav-item active">
              <a class="nav-link active" href="index.php">Home <span class="sr-only" >(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <!-- Dropdown Menu -->
              <div class="dropdown-menu mega-menu shadow-lg rounded" aria-labelledby="navbarDropdown">
                <div class="row">
                  <!-- Dropdown Items -->
                  <div class="col-md-3 col-sm-6 col-xs-6">
                    <h6 class="catTopText text-uppercase">Rings</h6>
                    <hr>
                    <a href="Includes/Collection.php#rings"><img src="../Images/Rings.jpg" alt="Rings" class="img-fluid"></a>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6">
                    <h6 class="catTopText text-uppercase">Bracelets</h6>
                    <hr>
                    <a href="Includes/Collection.php#bracelets"><img src="../Images/Bracelets.jpg" alt="Bracelets" class="img-fluid"></a>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6">
                    <h6 class="catTopText text-uppercase">Necklaces</h6>
                    <hr>
                    <a href="Includes/Collection.php#necklaces"><img src="../Images/Necklaces.jpg" alt="Necklaces" class="img-fluid"></a>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6">
                    <h6 class="catTopText text-uppercase">Earrings</h6>
                    <hr>
                    <a href="#" title="unsigned"><img src="../Images/Earrings.jpg" alt="Earrings" class="img-fluid"></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Includes/Collection.php">Collection</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Includes/contactUs.php" >Contact Us</a>
            </li>
          </ul>
    
            <!-- My Account -->
            <span class="ml-auto" style="color: #66BCFF;">
                <i class="fas fa-user-alt fa-md mr-2"></i>
                <a class="mr-2" href="Includes/Login.php">My Account</a>
            </span>

            <!-- Shopping Cart -->
            <button type="button" class="btn btn-link">
                <i class="fas fa-shopping-cart fa-md mr-1" style="color: #66BCFF;"></i>
                <a href="Includes/Cart.php">Cart</a>
                <span class="badge badge-danger" id="numOfItems">3</span>
                <span class="sr-only">Items in cart</span>
            </button>
        </div>
      </nav>';
    }
    // NOT IN HOMEPAGE
    else{
      echo '<nav class="navbar sticky-top nav-pills navbar-expand-md navbar-light bg-light shadow">
        <a class="navbar-brand" href="#top" ><img src="../Images/small_logo4.png" id="brand-logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-5">
              <li class="nav-item active">
                <a class="nav-link active" href="../index.php">Home <span class="sr-only" >(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shop
                </a>
                <!-- Dropdown Menu -->
                <div class="dropdown-menu mega-menu shadow-lg rounded" aria-labelledby="navbarDropdown">
                  <div class="row">
                    <!-- Dropdown Items -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                      <h6 class="catTopText text-uppercase">Rings</h6>
                      <hr>
                      <a href="Collection.php#rings"><img src="../Images/Rings.jpg" alt="Rings" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                      <h6 class="catTopText text-uppercase">Bracelets</h6>
                      <hr>
                      <a href="Collection.php#bracelets"><img src="../Images/Bracelets.jpg" alt="Bracelets" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                      <h6 class="catTopText text-uppercase">Necklaces</h6>
                      <hr>
                      <a href="Collection.php#necklaces"><img src="../Images/Necklaces.jpg" alt="Necklaces" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                      <h6 class="catTopText text-uppercase">Earrings</h6>
                      <hr>
                      <a href="#" title="unsigned"><img src="../Images/Earrings.jpg" alt="Earrings" class="img-fluid"></a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Includes/Collection.php">Collection</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Includes/contactUs.php" >Contact Us</a>
              </li>
            </ul>
    
            <!-- My Account -->
            <span class="ml-auto" style="color: #66BCFF;">
                <i class="fas fa-user-alt fa-md mr-2"></i>
                <a class="mr-2" href="Login.php">My Account</a>
            </span>

            <!-- Shopping Cart -->
            <button type="button" class="btn btn-link">
                <i class="fas fa-shopping-cart fa-md mr-1" style="color: #66BCFF;"></i>
                <a href="Cart.php">Cart</a>
                <span class="badge badge-danger" id="numOfItems">3</span>
                <span class="sr-only">Items in cart</span>
            </button>
          </div>
        </nav>';
      }
?>
