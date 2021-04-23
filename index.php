<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferrari landing page</title>
    <link rel="stylesheet" href="assest/style.css">
    <link rel="stylesheet" href="assest/animate.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php require_once('index.php'); ?> 
</head>

<body>
    <script>
        function alertMissing(){
        // $('.allll2').click(function(){
         $(document).ready(function(){
              $('.alert2').addClass("show");
              $('.alert2').removeClass("hide");
              $('.alert2').addClass("showAlert");
              setTimeout(function(){
                $('.alert2').removeClass("show");
                $('.alert2').addClass("hide");
              },5000);
          //   });
        });
            $('.close-btn').click(function(){
              $('.alert2').removeClass("show");
              $('.alert2').addClass("hide");
            });
      
          }
        function alertWarning(){
        // $('.allll1').click(function(){
          $(document).ready(function(){
              $('.alert').addClass("show");
              $('.alert').removeClass("hide");
              $('.alert').addClass("showAlert");
              setTimeout(function(){
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
              },5000);
            // });
          });
            $('.close-btn').click(function(){
              $('.alert').removeClass("show");
              $('.alert').addClass("hide");
            });
      
          }
        function alertSuccess(){
        // $('.allll2').click(function(){
          $(document).ready(function(){
              $('.alert1').removeClass("hide");
              $('.alert1').addClass("showAlert");
                 $('.alert1').addClass("show");
              setTimeout(function(){
                $('.alert1').removeClass("show");
                $('.alert1').addClass("hide");
              },5000);
            // });
          });
            $('.close-btn').click(function(){
              $('.alert1').removeClass("show");
              $('.alert1').addClass("hide");
            });
      console.log('chal raha hy')
          }
      </script>
      
      
      
      
      <?php
      if(isset($_POST["send"])){
        $FName=" Name : ".$_POST["name"];
        // $LName=" Phone Number : ".$_POST["phone"];
        $Subject= " This is my web ";
        $Email=" User Email : ".$_POST["email"];
        $Message=" User Message : ".$_POST["Message"];
      
      
        $from = "hannanazam200@gmail.com";
        
        $Message = $FName .' '.$Subject.' '.$Email.''.$Message;
        
        $to = "hannanazam200@gmail.com";
        $headers = "From:" . $from;
          
          if($FName !="" && $Subject !="" && $Email !="" && $Message !="")
          {
              if(mail($to,$Subject,$Message,$headers))
        {
          
          echo '<script type="text/javascript">alertSuccess() </script>';
            
          //   alert("Your Message has been succesfully sended, we will contact you soon!");
          //   // var url= "thanks.html"; 
          //   // window.location = url; 
           
         
        }
        else
        { 
          // <script type="text/javascript">
          // alert("Your Message has been warning!")
          // alertWarning();
          // </script>
            echo '<script type="text/javascript">alertWarning() </script>';
        
        }
      }
      else
      {
        
          // <script type="text/javascript">
          // alert("Your Message has been missing")
          //   alertMissing()
          // </script>
             echo '<script type="text/javascript">alertMissing() </script>';
         
              
          }
        }
      ?>
    <!-- navbar -->
    <section class="nav-section">
        <!-- <div class="container teal borderYtoX">
            <a>HOME</a>
            <a>ARTICLES</a>
            <a>PORTFOLIO</a>
            <a>ABOUT</a>
            <a>CONTACT</a>
          </div> -->
        <div class="navbarcolor">
            <nav class="navbar navbar-expand-lg navbar-dark teal wow fadeInDown">
                <div class="container">
                    <a class="navbar-brand text-dark" href="#">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse mx-auto containerss borderXwidth" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#featuress">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gallerys">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contactus">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- navbar -->

    <!-- fixed-image -->
    <section class="fixed-image-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 colsm-12 wow fadeInLeftBig">
                    <div class="container-fluid main-img my-auto">
                        <img src="images/car1.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="container-fluid main-heading wow fadeInRightBig">
                        <h1>Ferrari <br> <span class="span1">Most</span> <span class="span2"> Fastest</span>.</h1>
                        <div class="main-para">
                            <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic odit ducimus
                                perferendis voluptatem natus, consectetur officia iure ipsam tenetur pariatur asperiores
                                temporibus quaerat minus cupiditate explicabo porro deserunt voluptates aperiam?</p>
                        </div>

                        <button type="button" class="btn btn-outline-info">Look More</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- fixed-image -->


    <!-- Features -->
    <section class="features-section" id="features">
        <div class="main-heading wow fadeInUp">
            <h1 id="featuress">Fea<span>tures</span></h1>
            <div class="borderline">
                <span></span>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 wow bounceIn">
                    <div class="container-fluid sub-heading">
                        <h1>Futuristic <span class="span1">Cars</span></h1>
                        <div class="main-para">
                            <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic odit ducimus
                                perferendis voluptatem natus, consectetur officia iure ipsam tenetur pariatur asperiores
                                temporibus quaerat minus cupiditate explicabo porro deserunt voluptates aperiam?</p>
                        </div>

                        <button type="button" class="btn btn-outline-info">Look More</button>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 wow bounceIn">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/car6.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/car4.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/car5.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/car2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/car3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features -->


    <!-- gallery -->




    <!-- Button trigger modal -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="images/w1.jpg" class="img-fluid" alt="">
                </button> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="images/w1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            
        </div>
    </div> -->
    <section class="features-section wow fadeInUp" id="gallery">
        <div class="main-heading mb-5">
            <h1 id="gallerys">Gall<span>ery</span></h1>
            <div class="borderline">
                <span></span>
            </div>
        </div>
        <div class="container-fluid wow fadeInUp">
            <!-- <div class="col-md-8 col-sm-4"> -->
            <div class="container-fluid gallerysection sub-heading">
                <div class="main-para  text-center w-100">
                    <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic odit ducimus
                        perferendis voluptatem natus, consectetur officia iure ipsam tenetur pariatur asperiores
                        temporibus quaerat minus cupiditate explicabo porro deserunt voluptates aperiam?</p>
                </div>
                <div class="text-center wow fadeInDown">
                    <button type="button" class="btn btn-outline-info">Look More</button>
                    <h1>Cars <span class="span1">Gallery</span></h1>
                </div>
            </div>
            <!-- </div> -->

            <!-- <div class="col-md-8 col-sm-4"> -->
            <div class="m-p-g mt-5 wow bounceIn">
                <div class="m-p-g__thumbs" data-google-image-layout data-max-height="250">

                    <a href="#d"><img src="images/w1.jpg" data-full="images/w1.jpg" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w2.png" data-full="images/w2.png" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w3.png" data-full="images/w3.png" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w5.jpg" data-full="images/w5.jpg" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w5.jpg" data-full="images/w5.jpg" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w6.jpg" data-full="images/w6.jpg" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w7.jpg" data-full="images/w7.jpg" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w8.jpg" data-full="images/w8.jpg" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w9.jpg" data-full="images/w9.jpg" class="m-p-g__thumbs-img" /></a>
                    <a href="#d"><img src="images/w10.jpg" data-full="images/w10.jpg" class="m-p-g__thumbs-img" /></a>

                    <!-- fullscreen -->
                    <div class="m-p-g__fullscreen"></div><!-- end fullscreen -->
                </div><!-- end m-p-g__thumbs -->
            </div><!-- end gallery -->
            <!-- </div> -->




        </div>
        </div>
    </section>

    <!-- gallery -->

    <!-- CONTACT -->
    <section class="features-section" id="contact">
        <div class="main-heading wow fadeInUp">
            <h1 id="contactus">Cont<span>act</span></h1>
            <div class="borderline">
                <span></span>
            </div>
        </div>

        <div class="content wow fadeInDown">
            <div class="contact">
                <div class="other">
                    <div class="info">
                        <h2>More Methods </h2>
                        <h3>Email</h3>
                        <div class="svg-wrap">
                            <a href="mailto:"><i class="fa fa-envelope">
                                </i>
                                connor@connorgaunt.com</a>
                        </div>
                        <h3>Connect</h3>
                        <div class="svg-wrap">
                            <a href="#" target="_blank"><i class="fa fa-instagram">

                                </i></a>

                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>

                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>

                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h1>Get In Touch</h1>
                    <form method="POST">
                        <div class="flex-rev">
                            <input type="text" placeholder="Your full name..." name="name" id="name" />
                            <label for="name">Full Name</label>
                        </div>
                        <div class="flex-rev">
                            <input type="email" placeholder="Your email??" name="email" id="email" />
                            <label for="email">Your Email</label>
                        </div>

                        <div class="flex-rev">
                            <textarea placeholder="Write Message..." name="Message" id="message" /></textarea>
                            <label for="message">Email Message</label>
                        </div>
                        <button name="send">Send Email</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- CONTACT -->


    <!-- alert -->
    <div class="alertsss1">
        <!-- <button class="allll1" onclick="alertSuccess()">success</button> -->
      <div class="alert1 hide">
        <i class="fas fa-check-circle"></i>
        <span class="msg">Congratulation! Your message has been submitted we will contact you soon.</span>
        <div class="close-btn">
          <span class="fas fa-times"></span>
        </div>
    </div>
    </div>
    <div class="alertsss">
      <!-- <button class="allll" onclick="alertWarning()">warning</button> -->
    <div class="alert hide">
      <i class="fas fa-exclamation-circle"></i>
      <span class="msg">Oops! Message not send poor connection.</span>
      <div class="close-btn">
        <span class="fas fa-times"></span>
      </div>
  </div>
</div>


  <div class="alertsss2">
    <!-- <button class="allll2" onclick="alertMissing()">missing</button> -->
  <div class="alert2 hide">
    <i class="fas fa-exclamation-circle"></i>
    <span class="msg">Warning! Record fields has been missing.</span>
    <div class="close-btn">
      <span class="fas fa-times"></span>
    </div>
</div>
    <!-- alert -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

    <script src="assest/script.js"></script>
    <script src="assest/wow.min.js"></script>
    <script>
        new WOW().init();
        </script>
</body>

</html>