<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Golden Event</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
<?php
session_start();
$bdd=mysqli_connect('localhost','root','','devfest');

if(isset($_POST['createCompteButton'])){
  if((!empty($_POST['firstName'])) and (!empty($_POST['lastName']))and(!empty($_POST['email'])) and (!empty($_POST['password']))){
		$fName=$_POST['firstName'];
		$lName=$_POST['lastName'];
      $mail=$_POST['email'];
      $mdp=$_POST['password'];
      $sql="INSERT INTO user(firstName, lastName, email, password) VALUES ('$fName','$lName','$mail','$mdp')";
            $res=mysqli_query($bdd,$sql);

             $_SESSION['user']=$mail;
            header("Location:homeUser.php"); 

      }else{
        echo"<form action=Signin.php></form>";
        echo "<script>
          alert('verifier votre donnée')
        </script>";

  }
}


?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="acceuil.php">Golden Event</a>
                    <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Login.php">Log in</a>
            </li>
        </div>

      </div>
    </nav>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Sign In</h2>
            <h3 class="section-subheading text-muted">Merci de remplir ce formulaire pour nous rejoindre</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <form id="signInForm" name="signIn" method="POST">
              <div class="row">
				<div class="col-lg-3" ></div>
                <div class="col-lg-6 text-center" >
                  <div class="form-group">
                    <input class="form-control" name="firstName" type="text" placeholder="Your first name *" required data-validation-required-message="Please enter your first name.">
                    <p class="help-block text-danger"></p>
                  </div>
                    <div class="form-group">
                    <input class="form-control" name="lastName" type="text" placeholder="Your last name *" required data-validation-required-message="Please enter your last name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control"  name="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
                    <input class="form-control" name="password" type="password" placeholder="Your own password *" required data-validation-required-message="Please enter your password.">
                    <p class="help-block text-danger"></p>
                  </div>
              </div>
                <div class="col-lg-3" ></div>
                <div class="col-lg-12 text-center">
                  <button name="createCompteButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Creer un compte</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
