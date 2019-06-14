<?php
    session_start();
    require_once('../php/init.php');
    global $session;
    if($session->checkLogin()){
        header('Location:myAccount.php');   
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Our Stuff -->
    <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <script type="text/javascript" src="../JS/script.js"></script>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="../Images/favi1.ico" type="image/x-icon">
    <link rel="icon" href="../Images/favi1.ico" type="image/x-icon">

    <title>Adisa</title>    
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
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <!-- Sign In -->
                <div class="card" id="loginPage">
                    <div class="card-header text-center">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="username" class="form-control" placeholder="Email Address *">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="pass" class="form-control" placeholder="Password *">
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox" title="unsigned">Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn float-right login_btn short_btn" value="Login" name="login" >
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a class="ml-1 signup-link" href="#">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a href="#" id="forgot-link">Forgot your password?</a>
                        </div>
                    </div>
                </div>
                
                <!-- Forgot Password -->
                <div class="card" id="Forgot" style="display: none;">
                    <div class="card-header text-center">
                        <h3>Recover Password</h3>
                    </div>
                    <div class="card-body">
                        <form method ="POST" action=""> 
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="username" class="form-control" placeholder="Email Address *">
                            </div>
                            <div class="form-group">
                                <input type="button" class="btn float-right login_btn short_btn" value="Send" title="unsigned"name="forgotPass">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a class="ml-1 signup-link" href="#">Sign Up</a>
                        </div>
                    </div>
                </div>

                <!-- Register -->
                <div class="card" id="registerPage" style="display: none;">
                    <div class="card-header text-center">
                        <h3>Sign Up</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <!-- Firstname -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name *" pattern="[a-zA-Z]{2,}" title="Please provide valid name! at least 2 letters" required>
                            </div>

                            <!-- Lastname -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name *" pattern="[a-zA-Z]{2,}" title="Please provide valid last name! at least 2 letters" required>
                            </div>

                            <!-- Email Address -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="username" class="form-control" placeholder="Email Address *" required>
                            </div>

                            <!-- Password -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="pass" id="password1" class="form-control" placeholder="Password *"pattern="[0-9a-zA-Z!@#$%^&*()~?.',-=+]{8,}" title="Password must contain at least 8 characters." required>
                            </div>

                            <!-- Confirm Password -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="confirmpass" id="confirm_password" class="form-control" placeholder="Confirm Password *" required>
                            </div>
                            <div class="card-header text-center">
                                <h3>Shipping Info</h3>
                            </div>
                            
                            <!-- Address -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" name="address" class="form-control" placeholder="Address *" required>
                            </div>
                            
                            <!-- City -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                                </div>
                                <input type="text" name="city" class="form-control" placeholder="City *" required>
                            </div>
                            
                            <!-- Country -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                                </div>
                                <input type="text" name="country" class="form-control" placeholder="Country *" required>
                            </div>
                            
                            <!-- Tel -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number *" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <input type="submit" value="Register Now" id="btnRegister" name="register" class="btn float-right login_btn mt-2" onclick="validatePassword()" required>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Alreay have an account?<a class="ml-1" href="#" id="login-link">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <!-- Footer -->
    <footer class="site-footer mt-5">
        <?php include '../php/footer.php';?>
    </footer>
    <?php
    if($_POST){
        if($_POST['register']){
            //print_r($_POST['register']);
            require_once('../php/User.php');
            $invalidRegister = false;
        	$userAddedSucessfuly = false;
        	$errorAddedUser = false;
        	global $user;
        	$user->addNewUser();
        	if($userAddedSucessfuly){
        		echo "<script type='text/javascript'>
        				Swal.fire('Registered successfully!', 'Thank you for registration to our site');
        			 </script>";
        	}
        }
        else if($_POST['login']){
            require_once("../php/User.php");
            global $user;
            $isSignInSuccess;
            $user = $user->checkUser();
            if($isSignInSuccess){
                echo "<script type='text/javascript'>
                        Swal.fire({
                          position: 'top-end',
                          type: 'success',
                          title: 'Login Successful!',
                          text: 'Loading your account...',
                          showConfirmButton: false,
                          timer: 1500
                        });
                        window.location.href='myAccount.php';
                     </script>";
            }
            else{
                echo "<script type='text/javascript'>
                        Swal.fire({
                          position: 'center',
                          type: 'error',
                          title: 'Login Failed!',
                          text: 'Try again...',
                          showConfirmButton: false,
                          timer: 1500
                        });
                        </script>";
            }
        }
        else{
            echo "<script type='text/javascript'>Swal.fire('Sorry, we failed to do your request, please try again but fill the parts that needed!!')</script>";
        }
    }
    ?>
    
    <!--Bootstrap JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
    
</body>
</html>