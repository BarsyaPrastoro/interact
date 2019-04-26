<html>
<?php
require 'session.php';
?>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTERACT</title>


    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animated.css">



    <link rel="stylesheet" href="font/fontawesome/css/all.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>






</head>

<body>
    <nav class="navbar navbar-expand-md" id="sticky_nav">
        <div class="container-fluid">
            <a href="#home" style="text-decoration: none;">
                <h3>interACT</h3>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartog">
                <span class="fa fa-align-justify" style="font-size:24px; color: antiquewhite"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbartog">
                <ul class="navbar-nav ml-auto">
                    <li></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <i class="nav-link fa fa-sign-in-alt" aria-hidden="true" href="" data-toggle="modal" data-target="#modalLRForm" style="cursor: pointer;"></i>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="contain bg1" id="home">

        <div class="col-md-5">
            <!-- <div class="logo">
                    <img src="img/logo.svg" class="navbar-brand d-block">
                </div> -->

                <div class="stuff">
                    <h3>“Bersama kami, kamu akan mendapatkan teman ngobrol hingga teman hidup”<br>
                        <i>- Rendra</i></h3>
                    </div>

                </div>
            </section>


            <section id="service" class="service">
                <div class="row">
            <!-- <div class="col-md-12 text-center judul">
                    <h1>SERVICE</h1>
                    <div class="underline text-center"></div>
                </div>
                <div class="col-md-6 desc">
                    <p>The curious task of economics is to demonstrate to men how little they really know about
                         what they imagine they can design. The curious task of economics is to demonstrate to 
                         men how little they really know about what they imagine they can design.</p>
                     </div> -->
                     <div class="col-md-6">

                     </div>
                 </div>
                 <div class="row graphic">
                    <div class="col-md-4">
                        <div class="serviceBox">
                            <div class="service-icon">
                                <i class="fa fa-handshake"></i>
                            </div>
                            <div class="service-content">
                                <h3 class="title">New Friends</h3>
                                <p class="description">
                                    The curious task of economics is to demonstrate to men how little they really know about what they imagine they can design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="img-serv">
                            <img src="img/service/newfriends.jpg">
                        </div>
                    </div>
                </div>
                <div class="row photo">
                    <div class="col-md-4">
                        <div class="serviceBox pink">
                            <div class="service-icon">
                                <i class="fa fa-comments"></i>
                            </div>
                            <div class="service-content">
                                <h3 class="title">Meet Up</h3>
                                <p class="description">
                                    Photography was a way for me to freeze time and to capture the moments that were happy and healthy. I saw a photo as a way to go back to a memory if I ever needed to.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="img-serv">
                            <img src="img/service/meetup.jpg">
                        </div>
                    </div>
                </div>
                <div class="row video">
                    <div class="col-md-4">
                        <div class="serviceBox pink">
                            <div class="service-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="service-content">
                                <h3 class="title">Join Community</h3>
                                <p class="description">
                                    Photography was a way for me to freeze time and to capture the moments that were happy and healthy. I saw a photo as a way to go back to a memory if I ever needed to.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="img-serv">
                            <img src="img/service/join.jpg">
                        </div>
                    </div>
                </div>
                <div class="row web">
                    <div class="col-md-4">
                        <div class="serviceBox pink">
                            <div class="service-icon">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <div class="service-content">
                                <h3 class="title">Maybe, Reliationship?</h3>
                                <p class="description">
                                    Photography was a way for me to freeze time and to capture the moments that were happy and healthy. I saw a photo as a way to go back to a memory if I ever needed to.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="img-serv">
                            <img src="img/service/reliationship.jpg">
                        </div>
                    </div>
                </div>
            </section>

            <section id="aboutus" class="aboutus">
                <div class="row">
                    <div class="col-md-6 text-left judul">
                        <h1>About Us</h1>
                        <div class="underline text-left"></div>

                        <div class="col-md-12 draw">
                            <p>Everything we do is designed, whether we're producing a magazine, a website, or a bridge. Design is really the creative invention that designs everything.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card text-center">
                                        <img class="card-img-top" src="img/team/juan.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Juan Putranto</h5>
                                            <p class="card-text">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card text-center">
                                        <img class="card-img-top" src="img/team/arip.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Arif Nugroho</h5>
                                            <p class="card-text">Designer</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

            </section>
            <section id="contact" class="contact">
                <div class="row">
                    <div class="col-md-12 text-center judul">
                        <h1>Contact</h1>
                        <div class="underline text-center"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="600" height="327" id="gmap_canvas" src="https://maps.google.com/maps?q=rancabulan%20IV%20no%202&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 alamat">
                        <ul>
                            <li>Jalan Rancabulan 4 no 2a, Ciumbeluit, Bandung</li>
                            <li>08123232323 </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <img href="img/logo.svg">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-c-tabs">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                                Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                                Register</a>
                            </li>

                        </ul>

                        
                        <div class="tab-content">

                            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                                <div class="modal-body mb-1">
                                    <form method="post">
                                        <div class="md-form">
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <i class="fas fa-envelope grey-text"></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="email" id="email" class="form-control mb-4" placeholder="E-mail" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-form">
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <i class="fas fa-lock grey-text"></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="password" id="password" class="form-control mb-4" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-2">
                                            <input type="submit" class="btn btn-info" name="login" value="Log In"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="panel8" role="tabpanel">
                                <div class="modal-body mb-1">
                                    <form method="post">
                                        <div class="md-form">
                                            <div class="form-row">

                                                <div class="col-md-2">
                                                    <i class="fas fa-user grey-text"></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="name" id="name" class="form-control mb-4" placeholder="Username" name="nama">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="md-form">
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <i class="fas fa-phone grey-text"></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="number" id="number" class="form-control mb-4" placeholder="Phone Number" name="telpon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-form">
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <i class="fas fa-envelope grey-text"></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="email" id="emailRegister" class="form-control mb-4" placeholder="E-mail" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-form">
                                            <div class="form-row">
                                                <div class="col-md-2">
                                                    <i class="fas fa-lock grey-text"></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="password" id="passwordRegister" class="form-control mb-4" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center form-sm mt-2">
                                            <input type="submit" class="btn btn-info" name="signup" value="Sign Up" />
                                        </div>                                     
                                    </form>
                                </div>
                                
                            </div>

                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="footer">
    <div class="row">
        <div class="col-md-12">
                <!-- <div class="titlefoot">
                        <h4>More About Us</h4>
                    </div> -->
                    <div class="desk">
                        <p>“Selalu kelilingi diri Anda dengan teman-teman yang memiliki banyak cahaya di dalamnya. Dengan begitu, Anda akan selalu memiliki lilin di sekitar Anda saat hari gelap.” </p>
                        <div class="media">
                            <span class="fab fa-twitter"></span>
                            <span class="fab fa-instagram"></span>
                            <span class="fab fa-facebook"></span>
                            <span class="fab fa-line"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="strip-border">

                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>