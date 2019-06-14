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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
        <div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="contact-info  text-center mt-5">
						<i class="fas fa-envelope" style="font-size: 6em;"></i>
						<h2>Contact Us</h2>
						<h4>We would love to hear from you !</h4>
					</div>
				</div>
				<div class="col-md-6">
					<!-- form contact -->
					<form method="POST" action="" class="text-center border border-light p-5">
						<p class="h4 mb-4">Contact us</p>

						<!-- Name -->
						<input type="text" name="name" id="contactFormName" class="form-control mb-4" placeholder="Name *" required>

						<!-- Email -->
						<input type="email" name="email" id="contactFormEmail" class="form-control mb-4" placeholder="E-mail *" required>

						<!-- Subject -->
						<label>Subject</label>
						<select class="browser-default custom-select mb-4" name="subject">
							<option value="" disabled>Choose option</option>
							<option value="I have a question" selected>I have a question</option>
							<option value="Custom design">Custom design</option>
							<option value="Feedback">Feedback</option>
							<option value="Report a bug">Report a bug</option>
						</select>

						<!-- Message -->
						<div class="form-group">
							<textarea class="form-control rounded-0" id="formControlTextarea2" name="text" rows="3" placeholder="Message" required></textarea>
						</div>

						<!-- Copy -->
						<div class="custom-control custom-checkbox mb-4">
							<input type="checkbox" checked class="custom-control-input" id="contactFormCopy" name="needCopy">
							<label class="custom-control-label" for="contactFormCopy">Send me a copy of this message</label>
						</div>

						<!-- Send button -->
						<input class="btn btn-block" style="background-color: pink" name="sendEmail" type="submit" value="Send"></input>
					</form>
					<?php
                    	$invalidInput = "Please fill in";
                    	$error = "There is an ERROR with your";
                    	if($_POST['sendEmail']){
                    	    $email = filter_input(INPUT_POST, 'email');
                    	    $fEmail = true;
                    	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    	        $fEmail = false;
                    	    }
                    	    $fName = true;
                    	    $name = filter_input(INPUT_POST, 'name');
                    	    if (empty($_POST["name"])){
                    	         $fName = false;
                    	     }
                    	    $fSubject = true;
                    	    $subject = filter_input(INPUT_POST, 'subject');
                    	    if (empty($_POST["subject"])){
                    	        $fSubject = false;   
                    	    }
                    	    $fText = true;
                    	    $text = filter_input(INPUT_POST, 'text');
                    	    if (empty($_POST["text"])){
                    	        $fText = false;
                    	    }
                    	    
                    	    if($fEmail && $fName && $fSubject && $fText){
                        	    $needCopy = filter_input(INPUT_POST, 'needCopy');
                        	    if(isset($needCopy)){
                            		$headers = "From: " .$email;
                            		$mailCopy = mail($email ,$subject , $text, $headers);
                        	    }
                                $sendEmail = "adlsitemta@gmail.com";
                        		$headers = "From: " .$email;
                        		$mail = mail($sendEmail ,$subject , $text, $headers);
                        		if($mail){
                        		    echo '<script type="text/javascript">
                            		     Swal.fire({position: \'center\',type: \'success\',title: \'Thank You For letting us know! \', text: \'Message Sent!\',
                                            showConfirmButton: false,timer: 2500 })
                                		     </script>';
                        		}
                    	    }
                    	    else{
                        	    echo '<script type="text/javascript">
                            	     Swal.fire({position: \'center\',type: \'success\',title: \'Message did not sent, please try agian! \', text: \'Message Sent!\',
                                        showConfirmButton: false,timer: 2500 })</script>';
                        	}
                    	}
                    ?>
				 	<!-- form contact -->
				</div>
				
				<!--Adisa Video-->
				<div class="col-md-3">
					<div class="text-center mt-5">
                        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F899858510073423%2Fvideos%2F1119459741446631%2F&show_text=0&width=269" width="269" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
					</div>
				</div>
			</div>
		</div>
    </main>
    
    <!-- Footer -->
    <footer class="site-footer mt-5">
        <?php include '../php/footer.php';?>
    </footer>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>