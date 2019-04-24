<?php
include "../database/event.php";

?>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INTERACT</title>
        
        
        <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/stylePages.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../css/animated.css">
        
        
        
        <link rel="stylesheet" href="../font/fontawesome/css/all.css">
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        
        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/customPages.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        
        
        
        
        
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="#">interACT</a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-toggle="collapse"
                      data-target="#navbarCollapse"
                      aria-controls="navbarCollapse"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
                        <li class="nav-item">
                          <a class="nav-link" href="profile.php"><i class="fas fa fa-home"></i>Profile </a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="event.php"><i class="fas fa fa-calendar"></i>Event<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="report.php"><i class="fas fa fa-newspaper"></i>Report</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="transaksi.php"><i class="fas fa fa-shopping-cart"></i>Transaksi</a>
                        </li>
                      </ul>
                      <form class="form-inline ml-auto mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
                  
                  <main class="content-wrapper">
                        <section id="content-wrapper" class="event">
                                <div class="row">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="../img/service/join.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row["nama"]; ?></h5>
                                            <p class="card-text">Pada event ini, kita akan kumpul developer dengan bahasan java</p>
                                            <a href="#" class="btn btn-primary">Join Event</a>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="../img/service/join.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Photography</h5>
                                            <p class="card-text">Pada event ini, kita akan bertukar pikiran tentang kamera</p>
                                            <a href="#" class="btn btn-primary">Join Event</a>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="../img/service/join.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Photography</h5>
                                            <p class="card-text">Pada event ini, kita akan bertukar pikiran tentang kamera</p>
                                            <a href="#" class="btn btn-primary">Join Event</a>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="../img/service/join.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Photography</h5>
                                            <p class="card-text">Pada event ini, kita akan bertukar pikiran tentang kamera</p>
                                            <a href="#" class="btn btn-primary">Join Event</a>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="../img/service/join.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Photography</h5>
                                            <p class="card-text">Pada event ini, kita akan bertukar pikiran tentang kamera</p>
                                            <a href="#" class="btn btn-primary">Join Event</a>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="../img/service/join.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Photography</h5>
                                            <p class="card-text">Pada event ini, kita akan bertukar pikiran tentang kamera</p>
                                            <a href="#" class="btn btn-primary">Join Event</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="create" >
                                        <span class="fa fa-plus"></span>
                                    </div>
                            </section>
                  </main>

            
            
        </div>
    </body>
</html>