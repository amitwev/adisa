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
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="../Images/favi1.ico" type="image/x-icon">
    <link rel="icon" href="../Images/favi1.ico" type="image/x-icon">
    
    <title>Adisa My Account</title>
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
        <div id="rowMyAccount" class="row">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active left-navbar-my-account" id="v-pills-Account-Info-tab" data-toggle="pill" href="#v-pills-Account-Info" role="tab" aria-controls="v-pills-Account-Info" aria-selected="true">Account Info</a>
                <a class="nav-link left-navbar-my-account" id="v-pills-purchase-History-tab" data-toggle="pill" href="#v-pills-purchase-History" role="tab" aria-controls="v-pills-purchase-History" aria-selected="false">Purchase History</a>
                <a class="nav-link left-navbar-my-account" id="v-pills-My-Favorites-tab" data-toggle="pill" href="#v-pills-My-Favorites" role="tab" aria-controls="v-pills-My-Favorites" aria-selected="false">Recommended</a>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-Account-Info" role="tabpanel" aria-labelledby="v-pills-Account-Info-tab">
                    <div class="card" id="card-my-account-tabs">
                        <div class="card-body" id="card-my-account-body">
                            <div class="card-title" id="card-my-account-title">
                                <h5>Login Details</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm button-my-account" data-toggle="modal" data-target="#exampleModal1">Edit</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Login Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <p>First Name: <span id="firstNameEdit"></span></p>
                                                    <p>Last Name: <span id="lastNameEdit"></span></p>
                                                    <p>Email Address: <span id="emailEdit"></span></p>
                                                    <p><u>Update Password:</u></p>
                                                    <p>Old Password: <input type="password"></p>
                                                    <p id="password">New Password: <input type="password"></p>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn button-my-account" title="unsigned">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Full Name: <span id="fullName"></span></p>
                            <p>Email Address: <span id="email"></span></p>
                            
                        </div>
                    </div>
                    <div class="card" id="card-my-account-tabs">
                        <div class="card-body" id="card-my-account-body">
                            <div class="card-title" id="card-my-account-title">
                                <h5>Shipping Address</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm button-my-account" data-toggle="modal" data-target="#exampleModal2">Edit</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Shipping Address</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p id="address1Edit">Address1: <input type="text"></p>
                                                <p id="cityEdit">City: <input type="text"></p>
                                                <p id="countryEdit">Country: <input type="text"></p>
                                                <p id="phoneEdit">Phone Number: <input type="phone"></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn button-my-account" id="editShippingDetails" title="unsigned">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Address1: <span id="address1"></span></p> 
                            <p>City: <span id="city"></span></p>
                            <p>Country: <span id="country"></span></p>
                            <p>Phone Number: <span id="phone"></span></p>
                        </div>
                    </div>
                    <div class="card" id="card-my-account-tabs">
                        <div class="card-body" id="card-my-account-body">
                            <div class="card-title" id="card-my-account-title">
                                <h5>Receive News</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm button-my-account" data-toggle="modal" data-target="#exampleModal3">Save</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title" id="exampleModalLabel">Receive News</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">I agree to receive news and advertisements to my email.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn button-my-account" title="unsigned">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><input type="checkbox" name="news"> ADISA News</p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-md button-my-account" id="logOutBtn">LogOut</button>
                </div>
                <div class="tab-pane fade" id="v-pills-purchase-History" role="tabpanel" aria-labelledby="v-pills-purchase-History-tab">
                    <table class="table col-12" id="tableID">
                          <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody id="tbody">
                            
                          </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="v-pills-My-Favorites" role="tabpanel" aria-labelledby="v-pills-My-Favorites-tab" style="width:100%;">
                    <div id="chartContainerColumns" style="height:400px;width:100%;margin:auto;"></div>
                    <div id="chartContainerPie" style="height:400px;width:100%;margin:auto;"></div>
                    <script>
                           
                    </script>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="site-footer mt-5">
        <?php include '../php/footer.php';?>
    </footer>    

    <!--Bootstrap JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../JS/ajaxLoadUser.js" type ="text/javascript"></script>
    <script src="../JS/ajaxLoadOrders.js" type ="text/javascript"></script>
    <script src="../JS/ajaxGetUserPerCity.js" type ="text/javascript"></script>
    <script src="../JS/ajaxGetProductPerCity.js" type ="text/javascript"></script>

    <!--AJAX JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>



</html>