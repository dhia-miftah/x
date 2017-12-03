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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="acceuil.php">Golden Event</a>
                    <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Signin.php">Sign in</a>
            </li>
        </div>
      </div>
    </nav>
<?php
session_start();
$bdd=mysqli_connect('localhost','root','','devfest');

if(isset($_POST['logInButton'])){
  if(!empty($_POST['email_txt'])){
    if(!empty($_POST['pw_txt'])){
      $mail=$_POST['email_txt'];
      $mdp=$_POST['pw_txt'];
      $sql="SELECT * FROM user WHERE email='$mail'";
      $res=mysqli_query($bdd,$sql);
      $donnee=mysqli_fetch_assoc($res);
      $password=$donnee['password'];
      if($password!=$mdp){
        echo"<form action=Login.php></form>";
        echo "<script>
          alert('verifier votre donnée')
        </script>";
      }else{
            $_SESSION['user']=$donnee['email'];
            $_SESSION['role']=$donnee['role'];
            if ($donnee['role']==null){
            header("Location:homeUser.php");
          }elseif ($donnee['role']=="super"){
            header("Location:homeSuper.php");
          }elseif ($donnee['role']=="admin"){
            header("Location:homeAdmin.php");
          }
        
      }
    }
  }
}


?>
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Log In</h2>
            <h3 class="section-subheading text-muted">Merci de saisir votre donnée pour nous rejoindre</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <form id="logInForm" name="LogIn" novalidate method="POST" >
              <div class="row">
        <div class="col-lg-3" ></div>
                <div class="col-lg-6 text-center" >
           
                  <div class="form-group">
                    <input class="form-control" name="email_txt" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
                    <input class="form-control" name="pw_txt" type="password" placeholder="Your own password *" required data-validation-required-message="Please enter your password.">
                    <p class="help-block text-danger"></p>
                  </div>
              </div>
                <div class="col-lg-3" ></div>

                <div class="col-lg-12 text-center">
                  <button name="logInButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Log In</button>
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
