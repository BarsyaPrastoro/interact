<!DOCTYPE html>
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
        <a class="navbar-brand" href="#">INTERACT</a>
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
            <li class="nav-item active">
              <a class="nav-link" href="profile.php"><i class="fas fa fa-home"></i>Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event.php"><i class="fas fa fa-calendar"></i>Event</a>
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
        <div class="row">
          <div class="col-md-6">
            <div class='card card-profile text-center'>
              <img alt='' class='card-img-top' src='https://unsplash.it/340/160?image=354'>
              <div class='card-block'>
                <!-- <img alt='' class='card-img-profile' src='https://it.gravatar.com/userimage/3434071/205a00fc16ae537b26b56f40790910fe.jpg?size=140'> -->
                <h4 class='card-title'>
                  Nicola Pressi
                  <small>Front-end designer</small>
                </h4>
                <div class='card-links'>
                  <a href="morepages/editprofile.html" class="btn btn-md" role="button" aria-pressed="true">Edit</a>
                </div>
                <div class="card-footer">
                  <!-- <p>aaaaaaaaaaaaa</p> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div id="accordion">
              <div class="card">
                <div class="card-title title">
                  <h4>About Me</h4>
                </div>
                <div class="card-header" id="headingOne">
                    <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Interest
                    </a>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Photograhpy, Animal, Food 
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingTwo">
                    <a class="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Hobby
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Swimming
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingThree">
                    <a class="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Contact
                    </a>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    081223239422
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
          
        
      </main>  
    </body>
</html>