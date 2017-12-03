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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Golden Event</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="homeUser.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#manegemantEvent">manegemant event </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="acceuil.php">          
                <?php 
                session_start();
                $mail=$_SESSION['user'];
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM user WHERE email='$mail'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);
                echo $donnee['firstName']."  ".$donnee['lastName'];
                ?></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Plateform!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell us More</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">E-Commerce</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Responsive Design</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="manegemantEvent">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-8">
              <?php 
               $sql="select * from user where role='super' ";
  $res=mysqli_query($bdd,$sql);
  $nb=mysqli_num_rows($res);
  for($i=0;$i<$nb;$i++){
    $donnee=mysqli_fetch_assoc($res);
    $var=$donnee['firstName'];
    $prenom=$donnee['lastName'];
    echo"<form method=post>";
    echo"<table>
      <tr><td>$var</td>
      <td>$prenom</td>
      
      </tr>
      </table></form>";
    }
                   ?>
        </div>
         <div class="col-md-4">
            <a class="portfolio-link"  href="ajouter.php">ajouter</a>
            <a class="portfolio-link"  href="modifier.php">modifier</a>
            <a class="portfolio-link"  href="supprimer.php"> supprimer</a>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">les evenements les plus tot desponible </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>
              <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='1'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);             
            
                $nomEvent=$donnee['nom'];
               echo $nomEvent;
                   ?>
              </h4>
    
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>
                
              <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='2'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);             
            
                $nomEvent=$donnee['nom'];
               echo $nomEvent;
                   ?>


              </h4>

            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>        
                    <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='3'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);             
            
                $nomEvent=$donnee['nom'];
               echo $nomEvent;
                   ?></h4>
        
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>              <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='4'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);             
            
                $nomEvent=$donnee['nom'];
               echo $nomEvent;
                   ?></h4>
            
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>              <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='5'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);             
            
                $nomEvent=$donnee['nom'];
               echo $nomEvent;
                   ?></h4>
        <form action="tousEvents.php" method="POST">
                <button name="seeMoreButton" class="btn btn-primary btn-xl text-uppercase" type="submit">See more</button>
        </form>
          </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>              <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='6'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);             
            
                $nomEvent=$donnee['nom'];
               echo $nomEvent;
                   ?></h4>
          
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Kay Garland</h4>
              <p class="text-muted">Lead Designer</p>
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
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Lead Marketer</p>
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
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Diana Pertersen</h4>
              <p class="text-muted">Lead Developer</p>
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
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
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

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">

                  <!-- Project Details Go Here -->
                  <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='1'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);


                $sql2="SELECT sponsor FROM sponsors WHERE ide='1'"; 
                $res2=mysqli_query($bdd,$sql2);
                $nb=mysqli_num_rows($res2);
                
            
                $nomEvent=$donnee['nom'];
                $placeEvent=$donnee['place'];
                $dateEvent=$donnee['date'];
                $clubEvent=$donnee['club'];
                $descriptionEvent=$donnee['description'];

               echo' <div class="modal-body">
                <h2 class="text-uppercase">'.$nomEvent.'</h2>
                  <p class="item-intro text-muted">'.$dateEvent.'</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>'.$descriptionEvent.'</p>
                  <ul class="list-inline">
                    <li>Place: '.$placeEvent.'</li>
                    <li>Club: '.$clubEvent.'</li>
                    <li><form method=post>
                    <table>';
                    for($i=0;$i<$nb;$i++){
                      $donnee2=mysqli_fetch_assoc($res2);
                       $var=$donnee2['sponsor'];
                      echo"<td>".$var."</td>";
    }
                  echo ' </table></form></li>
                  </ul>
                  <form action="Signin.php">
                  <input class="btn btn-primary"  type="submit" value="Participer"></input>
                    </form>
                </div>';
                   ?>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='2'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);


                $sql2="SELECT sponsor FROM sponsors WHERE ide='2'"; 
                $res2=mysqli_query($bdd,$sql2);
                $nb=mysqli_num_rows($res2);
                
            
                $nomEvent=$donnee['nom'];
                $placeEvent=$donnee['place'];
                $dateEvent=$donnee['date'];
                $clubEvent=$donnee['club'];
                $descriptionEvent=$donnee['description'];

               echo' <div class="modal-body">
                <h2 class="text-uppercase">'.$nomEvent.'</h2>
                  <p class="item-intro text-muted">'.$dateEvent.'</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>'.$descriptionEvent.'</p>
                  <ul class="list-inline">
                    <li>Place: '.$placeEvent.'</li>
                    <li>Club: '.$clubEvent.'</li>
                    <li><form method=post>
                    <table>';
                    for($i=0;$i<$nb;$i++){
                      $donnee2=mysqli_fetch_assoc($res2);
                       $var=$donnee2['sponsor'];
                      echo"<td>".$var."</td>";
    }
                  echo ' </table></form></li>
                  </ul>
                  <form action="Signin.php">
                  <input class="btn btn-primary"  type="submit" value="Participer"></input>
                    </form>
                </div>';
                   ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='3'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);


                $sql2="SELECT sponsor FROM sponsors WHERE ide='3'"; 
                $res2=mysqli_query($bdd,$sql2);
                $nb=mysqli_num_rows($res2);
                
            
                $nomEvent=$donnee['nom'];
                $placeEvent=$donnee['place'];
                $dateEvent=$donnee['date'];
                $clubEvent=$donnee['club'];
                $descriptionEvent=$donnee['description'];

               echo' <div class="modal-body">
                <h2 class="text-uppercase">'.$nomEvent.'</h2>
                  <p class="item-intro text-muted">'.$dateEvent.'</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>'.$descriptionEvent.'</p>
                  <ul class="list-inline">
                    <li>Place: '.$placeEvent.'</li>
                    <li>Club: '.$clubEvent.'</li>
                    <li><form method=post>
                    <table>';
                    for($i=0;$i<$nb;$i++){
                      $donnee2=mysqli_fetch_assoc($res2);
                       $var=$donnee2['sponsor'];
                      echo"<td>".$var."</td>";
    }
                  echo ' </table></form></li>
                  </ul>
                  <form action="Signin.php">
                  <input class="btn btn-primary"  type="submit" value="Participer"></input>
                    </form>
                </div>';
                   ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                                <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='4'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);


                $sql2="SELECT sponsor FROM sponsors WHERE ide='4'"; 
                $res2=mysqli_query($bdd,$sql2);
                $nb=mysqli_num_rows($res2);
                
            
                $nomEvent=$donnee['nom'];
                $placeEvent=$donnee['place'];
                $dateEvent=$donnee['date'];
                $clubEvent=$donnee['club'];
                $descriptionEvent=$donnee['description'];

               echo' <div class="modal-body">
                <h2 class="text-uppercase">'.$nomEvent.'</h2>
                  <p class="item-intro text-muted">'.$dateEvent.'</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>'.$descriptionEvent.'</p>
                  <ul class="list-inline">
                    <li>Place: '.$placeEvent.'</li>
                    <li>Club: '.$clubEvent.'</li>
                    <li><form method=post>
                    <table>';
                    for($i=0;$i<$nb;$i++){
                      $donnee2=mysqli_fetch_assoc($res2);
                       $var=$donnee2['sponsor'];
                      echo"<td>".$var."</td>";
    }
                  echo ' </table></form></li>
                  </ul>
                  <form action="Signin.php">
                  <input class="btn btn-primary"  type="submit" value="Participer"></input>
                    </form>
                </div>';
                   ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                                <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='5'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);


                $sql2="SELECT sponsor FROM sponsors WHERE ide='5'"; 
                $res2=mysqli_query($bdd,$sql2);
                $nb=mysqli_num_rows($res2);
                
            
                $nomEvent=$donnee['nom'];
                $placeEvent=$donnee['place'];
                $dateEvent=$donnee['date'];
                $clubEvent=$donnee['club'];
                $descriptionEvent=$donnee['description'];

               echo' <div class="modal-body">
                <h2 class="text-uppercase">'.$nomEvent.'</h2>
                  <p class="item-intro text-muted">'.$dateEvent.'</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>'.$descriptionEvent.'</p>
                  <ul class="list-inline">
                    <li>Place: '.$placeEvent.'</li>
                    <li>Club: '.$clubEvent.'</li>
                    <li><form method=post>
                    <table>';
                    for($i=0;$i<$nb;$i++){
                      $donnee2=mysqli_fetch_assoc($res2);
                       $var=$donnee2['sponsor'];
                      echo"<td>".$var."</td>";
    }
                  echo ' </table></form></li>
                  </ul>
                  <form action="Signin.php">
                  <input class="btn btn-primary"  type="submit" value="Participer"></input>
                    </form>
                </div>';
                   ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                                <?php 
                $bdd=mysqli_connect('localhost','root','','devfest');
                $sql="SELECT * FROM events WHERE ide='6'"; 
                $res=mysqli_query($bdd,$sql);
                $donnee=mysqli_fetch_assoc($res);


                $sql2="SELECT sponsor FROM sponsors WHERE ide='6'"; 
                $res2=mysqli_query($bdd,$sql2);
                $nb=mysqli_num_rows($res2);
                
            
                $nomEvent=$donnee['nom'];
                $placeEvent=$donnee['place'];
                $dateEvent=$donnee['date'];
                $clubEvent=$donnee['club'];
                $descriptionEvent=$donnee['description'];

               echo' <div class="modal-body">
                <h2 class="text-uppercase">'.$nomEvent.'</h2>
                  <p class="item-intro text-muted">'.$dateEvent.'</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>'.$descriptionEvent.'</p>
                  <ul class="list-inline">
                    <li>Place: '.$placeEvent.'</li>
                    <li>Club: '.$clubEvent.'</li>
                    <li><form method=post>
                    <table>';
                    for($i=0;$i<$nb;$i++){
                      $donnee2=mysqli_fetch_assoc($res2);
                       $var=$donnee2['sponsor'];
                      echo"<td>".$var."</td>";
    }
                  echo ' </table></form></li>
                  </ul>
                  <form action="Signin.php">
                  <input class="btn btn-primary"  type="submit" value="Participer"></input>
                    </form>
                </div>';
                   ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


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
