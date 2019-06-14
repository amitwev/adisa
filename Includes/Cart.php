<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Our Stuff -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <script type="text/javascript" src="../JS/script.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../Images/favi1.ico" type="image/x-icon">
    <link rel="icon" href="../Images/favi1.ico" type="image/x-icon">

    <title>Adisa Cart</title>
</head>

<body id="cartBody">
   <header>
      <!-- Logo -->
      <div class="jumbotron text-center" id="site-logo">
         <a href="../index.php"><img src="../Images/Logo.png" alt="LOGO"></a>
      </div>
   </header>

    <!-- Navigation Bar -->
   <nav id="navbar-frame">
      <?php include '../php/menu.php';?>
   </nav>
   
	<div id="cart-header" class="mt-5">
		<div class="container">
			<h1>Shopping cart <span>[</span> <em><span>Adisa Jewelry</span></em> <span class="last-span is-open">]</span></h1>
		</div>
	</div>   

   <main>
        <div class="container" id="shopping-cart-holder">
          <section id="cart">
             <!-- Item In Cart -->
             <article class="product">
                <header>
                   <!-- Item Picture -->
                   <img src="../Images/8147-1.jpg" alt=""></a>
                </header>
    
                <main class="content">
                   <h1>ShavShevet Ring</h1>
                   <p>Handmade ring in the old fashion with stone</p>
                   
                   <!-- Remove Item -->
                   <div title="Remove Selected" style="top: 0" class="remove fas fa-trash-alt text-center"></div>
                </main>
    
                <footer class="content">
                   <span class="qt-minus">-</span>
                   <span class="qt">1</span>
                   <span class="qt-plus">+</span>
    
                   <h2 class="full-price">
                      120₪
                   </h2>
    
                   <h2 class="price">
                      120₪
                   </h2>
                </footer>
             </article>
             <!-- Item In Cart -->
             <article class="product">
                <header>
                   <!-- Item Picture -->
                   <img src="../Images/5564-1.jpg" alt=""></a>
                </header>
    
                <main class="content">
                   <h1>Two Stones Bracelet</h1>
                   <p>Handmade bracelet with two stones and silver frame</p>
    
                   <!-- Remove Item -->
                   <div title="Remove Selected" style="top: 0" class="remove fas fa-trash-alt text-center"></div>
    
                </main>
    
                <footer class="content">
                   <span class="qt-minus">-</span>
                   <span class="qt">1</span>
                   <span class="qt-plus">+</span>
    
                   <h2 class="full-price">
                      150₪
                   </h2>
    
                   <h2 class="price">
                      150₪
                   </h2>
                </footer>
             </article>
    
             <!-- Item In Cart -->
             <article class="product">
                <header>
                   <!-- Item Picture -->
                   <img src="../Images/9286-1.jpg" alt=""></a>
                </header>
    
                <main class="content">
                   <h1>White Stone Ring</h1>
                   Handmade ring with white stone and designed silver frame
    
                   <!-- Remove Item -->
                   <div title="Remove Selected" style="top: 0" class="remove fas fa-trash-alt text-center"></div>
    
                </main>
    
                <footer class="content">
                   <span class="qt-minus">-</span>
                   <span class="qt">1</span>
                   <span class="qt-plus">+</span>
    
                   <h2 class="full-price">
                      150₪
                   </h2>
    
                   <h2 class="price">
                      150₪
                   </h2>
                </footer>
             </article>
          </section>
        </div>
   </main>

   <footer id="cart-footer">
      <div class="container clearfix">

         <div class="float-left">
            <h2 class="subtotal">Subtotal: <span></span>₪</h2>
            <h3 class="shipping">Shipping: <span></span>₪</h3>
         </div>

         <div class="float-right">
            <h1 class="total">Total: <span></span>₪</h1>
            <a class="checkout-btn" title="unsigned">Checkout</a>
         </div>
      </div>
   </footer>
   
    <footer class="site-footer mt-2">
        <?php include '../php/footer.php';?>
    </footer>
    
    <!--Bootstrap JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    

</body>

</html>