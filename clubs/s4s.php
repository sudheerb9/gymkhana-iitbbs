<?php include '../config.php';
try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Students' Gymkhana, IIT Bhubaneswar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link rel="shortcut icon" href="../assets/img/logo.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <a href="https://iitbbs.ac.in/" style="border-left:0px; padding-right:14px;" class="logo"><img src="../assets/img/logo.png" class="img-fluid"></a>
          <a href="../index.php" class="logo mr-auto"><img src="../assets/img/SGLogo2.png" alt="" class="img-fluid"></a>
          

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="../index.php">Home</a></li>
              <li><a href="../facilities.php">Facilities</a></li>
              <li class="drop-down"><a href="#">Councils</a>
                <ul>
                  <li><a href="../technical.php">Technical council</a></li>
                  <li><a href="../cultural.php">Socio-Cultural Council</a></li>
                  <li><a href="../sports.php">Sports Council</a></li>
                </ul>
              </li>
              <li><a href="../fests.php">Fests</a></li>
              <li class="drop-down"><a href="#">Meets</a>
                <ul>
                  <li><a href="../sportsmeet.php">Inter IIT Sports Meet</a></li>
                  <li><a href="../techmeet.php">Inter IIT Tech Meet</a></li>
                  <li><a href="../gc.php">General Championship Sports</a></li>
                  <li><a href="../ic.php">Innovation Challenge</a></li>
                </ul>
              </li>
              <li><a href="../office.php">Office</a></li>
              <li><a href="../assets/Constitution.pdf">Constitution</a></li>
              <li><a href="../contact.php">Contact Us</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!--Start Banner-->
  <div class="row">
    <div id="banner" class="col-md-12 col-xs-12">
        <div class="banner-image-s4s"></div>
        <div class="banner-text text-center">
            <img src="../assets/img/society logos/sfs.png" height="100px" width="auto" alt="">
            <br>
            <br>
            <h1>SOULS FOR SOLACE</h1>
           
            <p><span class="descripeMe"></span></p>
            <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">About us</a> -->
        </div>
        <div class="overlay"></div>
    </div>
</div>
<!--End Banner-->

<div class="back">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 text-center cen ">
               
               <br>
               <br>
                
                <img src="../assets/img/Soc-Images/s4s(1).jpg" class="img-fluid" width="500px" height="auto" alt="">
                <br>
                
    
            </div>
            <div class="col-lg-6 ">
                <div class="text-center">
                    <h2>About Us</h2>
                </div>
                <p>Souls for Solace is the social welfare society of IIT Bhubaneshwar with the ultimate motto of helping the community to reach a better tomorrow. 
                  Souls  for Solace organizes Blood Donation Camps and Health Camps every  year to develop the social cooperation spirit in students to help people. 
                  Souls for Solace organizes Children's fest every year for the under privileged kids from different orphanages to promote the intercultural  relations. 
                  Souls for Solace organizes multiple Donation Drives every  year which consists of Book Donation, Cloth Donation, etc. to make  everyone aware of what many unfortunate people don’t possess. Collection and Recycling of newspapers in every semester. 
                  Souls for  Solace conducts a cleanliness awareness drive along with NSS at various villages to serve the society in its possible need. 
                  Souls for Solace  conducted multiple surveys for the workers of our campus and made  them aware about the various government schemes. Souls for Solace  collaborates with some bigger organizations to raise funds and organizes some online Events as well. 
                  Souls for Solace have been  working very hard since some time now to inculcate values like helping  

                    </p>
                
                </div>

            
    
        </div>
        <br>
        <br>

       
                
          



          <div class="row">
            <div class="col-md-10">
        <div class="text-center">
            <div class="card" id="happenings">
              <div class="card-body">
                <h2 class="card-title">HAPPENINGS</h2>
                <p class="card-text">
                  
                                   <?php
            
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("SELECT * FROM happenings WHERE society = 's4s' ORDER BY id DESC LIMIT 0, 5");
              $stmt->execute();
              while ($row = $stmt->fetch()) {
                echo " <div class='row'>
                    <div class='col-md-2'>
                      <center>
                        <h2>".$row['date']."</h2>
                        <p>".$row['month']."</p>
                      </center>
                    </div>
                    <div class='col-md-6'>
                      <center>
                        <p>".$row['name']."</p>
                      </center>
                    </div>
                  </div>";
              }

            }
              
            catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
            }
            $conn = null;


            ?>
                                      
                            
                         </p>
               
                    </div>
                  </div>
              </div>
              </div>
              <div class="col-md-4" id = "links">
                <div class="follow">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">
                        <center>FOLLOW US ON</center>
                      </h5>
                      <p class="card-text"></p>
                      <div class="social-links">
                        <center>
                          <a href="https://www.instagram.com/soulsforsolace/" class="instagram"><i class="fa fa-instagram"></i></a>
                          <a href="https://www.facebook.com/s4s.iitbbs" class="facebook"><i class="fa fa-facebook"></i></a>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
    
                <div class="follow-other">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">
                        <center>OTHER SOCIETIES</center>
                      </h5>
                      <p class="card-text"></p>
                      <div class="other-links">
                        <img src="../assets/img/society logos/cinewave.png" height="55px" width="55px" alt="">             
                        <a href="cinewave.php">CINEWAVE</a>           
                      </div>
                      <div class="other-links">
                        <img src="../assets/img/society logos/literary.png" height="55px" width="55px" alt="">             
                        <a href="panacea.php">PANACEA</a>       
                      </div>
                      <div class="other-links">
                        <img src="../assets/img/society logos/clix.png" height="55px" width="55px" alt="">             
                        <a href="clix.php">CLIX</a>        
                      </div>
                      <div class="other-links">
                        <img src="../assets/img/society logos/aaroh.png" height="55px" width="55px" alt="">             
                        <a href="aaroh.php">AAROH</a>       
                      </div>
                      <div class="other-links">
                        <img src="../assets/img/society logos/dgang.png" height="55px" width="55px" alt="">             
                        <a href="dgang.php">DGANG</a>       
                      </div>
                      <div class="other-links">
                        <img src="../assets/img/society logos/dramatics.png" height="55px" width="55px" alt="">
                        <a href="dramatics.php">DRAMATICS</a>
                      </div>
                      <div class="other-links">
                        <img src="../assets/img/Society logos/quizclub.png" height="55px" width="55px" alt="">
                        <a href="quizclub.php">QUIZCLUB</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
    
    
    
            </div>
          </div>
                  
            
          <div class="text-center">
            <h1>Contact US</h1>
            <p></p>
         </div>
         <div class="contactdetails">
         <div class="contact">
          <div class="row">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Saurabh Kumar</h5>
              <h6 class="card-subtitle mb-2 text-muted">SECRETARY</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:9643076289" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:secydrams.sg@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
          </div>
         </div>
         <br>
         <div class="contact2" id="c2">
          <div class="row justify-content-center">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">M SADHANA</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNER</h6>
              <p class="card-text"></p>
              <center>
              <a href="tel:9840034535" class="phone"><i class="fa fa-phone"></i></a>
              <a href="mailto:ms34@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Rithik Prasad.V</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNER</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:9491100024" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:vrp11@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Jamma Sathwik</h5>
              <h6 class="card-subtitle mb-2 text-muted">GOVERNER</h6>
              <p class="card-text"></p>
              <center>
                <a href="tel:8790472897" class="phone"><i class="fa fa-phone"></i></a>
                <a href="mailto:js25@iitbbs.ac.in" class="mail"><i class="fa fa-envelope"></i></a>
              </center>
            </div>
          </div>
          </div>
         </div>
         </div>
    </div>
</div>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.iitbbs.ac.in">IIT Bhubaneswar</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="../assets/Constitution.pdf">Gymkhana Constitution</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.iitbbs.ac.in/cdc/">Career Development Cell</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              IIT Bhubaneswar<br>
              At Arugul, Jatani<br>
              Khordha, Odisha - 752050<br>
            </p>

            

          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Connect with us</h4>
            <div class="social-links">
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Developed by Web and Design Society, IIT Bhubaneswar
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>