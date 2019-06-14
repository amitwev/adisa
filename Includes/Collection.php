<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Our Stuff -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/product.css">
    <script type="text/javascript" src="../JS/script.js"></script>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="../Images/favi1.ico" type="image/x-icon">
    <link rel="icon" href="../Images/favi1.ico" type="image/x-icon">

    <title>Adisa Collection</title>
</head>

<body>
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

    <main>
        <!---------------------------------- Products -------------------------------------------->
        <?php // EACH PRODUCT NEED NAME, PRICE, PICTURES // TYPE NEED ONLY NAME
            
            require('../php/Products.php');
            $productsIdName=Products::getAllProductIdName();
            $countForProductsIdName = 0;
            while ($countForProductsIdName < count($productsIdName)){ // product types (rings/neckless)
              echo '<div class="container mt-5">';
            		echo '<h1 class="display-4 text-center" id="'.$productsIdName[$countForProductsIdName]['name'].'">' .strtoupper($productsIdName[$countForProductsIdName]['name']) .'</h1>';
            		echo '<hr>';
            		echo '<div class="row">';
                $typeID = $productsIdName[$countForProductsIdName]['productTypeId']; // type id 
                $eachProductByType = Products::getProductsByType($typeID);// THIS is provide products by Type
                $countEachProductByType = 0;
                while($countEachProductByType < count($eachProductByType)){ // per product
                    $productId = $eachProductByType[$countEachProductByType]->getId();
                    $productPrice = $eachProductByType[$countEachProductByType]->getPrice();
                    $productImages = $eachProductByType[$countEachProductByType]->getProductImages();
                    $productName = $eachProductByType[$countEachProductByType]->getName();
                    $productDescription = $eachProductByType[$countEachProductByType]->getDescription();
                    echo '<div class="col-md-3 col-sm-6">';
                      echo '<div class="product-grid3">';
                        echo '<div class="product-image3">';
                          echo '<a data-toggle="modal" href="#a'.$productId.'">'; // LINK TO THE PRODUCT
                            echo '<img class="pic-1" src="' .$productImages['0'] .'">';
        			            echo '<img class="pic-2" src="' . $productImages['0'] .'">';
        				          echo '</a>';
            						echo '<ul class="social">';
            							echo '<li><a data-toggle="modal" href="#a'.$productId.'"><i class="fas fa-eye"></i></a></li>';
            							echo '<li><a href="#" title="unsigned"><i class="fas fa-shopping-cart"></i></a></li>';
            						echo '</ul>';
            						echo '<span class="product-new-label">New</span>'; // THIS LINE IS FOR LABEL 
            					echo '</div>';
            					echo '<div class="product-content">';
            						echo '<h3 class="title"><a href="#">' .$productName .'</a></h3>';
            						echo '<div class="price">';
            							echo '₪ ' .$productPrice .'<br>';
            							//echo '<span>$75.00</span>'; // THIS ONE IS FOR "show price before"
            						echo '</div>';
                                    echo '<span id="productSku" style="display:none"><br> Sku:' .$productId .'<span>';
            					echo '</div>';
            				echo '</div>';
          			echo '</div>';
               // <!-- Modal per product -->
                   echo '<div class="modal fade" id="a'.$productId.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                        echo '<div class="modal-dialog modal-lg modal-dialog-centered" role="document">';
                            echo '<div class="modal-content">';
                                echo '<div class="modal-body">';
                                    echo '<div class="wrapper row">';
                                        echo '<div class="preview col-sm-5 col-md-5">';
                                            echo '<div class="preview-pic tab-content">';
                                                echo '<div class="tab-pane active" id="item-pic-1-'.$productId .'"><img src="'.$productImages[0] .'"></div>';
                                                echo '<div class="tab-pane" id="item-pic-2-'.$productId .'"><img src="'.$productImages[0] .'"></div>';
                                            echo '</div>';
                                            echo '<ul class="preview-thumbnail nav nav-tabs justify-content-center">';
                                                echo '<li class="active"><a data-target="#item-pic-1-'.$productId .'" data-toggle="tab"><img src="'.$productImages[0] .'"></a></li>';
                                                echo '<li><a data-target="#item-pic-2-'.$productId .'" data-toggle="tab"><img src="'.$productImages[0] .'"></a></li>';
                                            echo '</ul>';
                                        echo '</div>';
                                        echo '<div class="preview col-sm-7 col-md-7">';
                                            echo '<h2 class="h2-responsive product-name text-center">';
                                                echo '<strong>'.$productName .'</strong>';
                                            echo '</h2>';
                                            echo '<div class="rating">';
                                                echo '<div class="stars">';
                                                    echo '<span class="fa fa-star checked"></span>';
                                                    echo '<span class="fa fa-star checked"></span>';
                                                    echo '<span class="fa fa-star checked"></span>';
                                                    echo '<span class="fa fa-star"></span>';
                                                    echo '<span class="fa fa-star"></span>';
                                                echo '</div>';
                                                echo '<span class="review-no">41 reviews</span>';
                                            echo '</div>';
                                            echo '<p class="product-description">'.$productDescription .'</p>';
                                            echo '<h4 class="h4-responsive">';
                                                echo '<span class="price">';
                                                    echo '<strong>₪'.$productPrice.'</strong>';
                                                echo '</span>';
                                            echo '</h4>';
                                            //<!-- Add to Cart -->
                                            echo '<div class="card-body">';
                                                echo '<div class="bottom text-center">';
                                                    echo '<button type="button" class="btn custom_btn" data-dismiss="modal" >Close</button>';
                                                    echo '<button class="btn custom_btn ml-2" title="unsigned">Add to cart';
                                                        echo '<i class="fas fa-cart-plus ml-2" aria-hidden="true"></i>';
                                                    echo '</button>';
                                                echo '</div>';
                                            echo '</div>';
                                            //<!-- /.Add to Cart -->
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';

               // <!-- END of MODAL -->
               $countEachProductByType += 1;
              }
              $countForProductsIdName += 1;
            }
       ?>
        <!---------------------------------- Products END ----------------------------------------->
    </main>
    
    <!-- Footer -->
    <footer class="site-footer mt-5">
        <?php include '../php/footer.php';?>
    </footer>  
    
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>