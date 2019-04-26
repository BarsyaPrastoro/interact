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
      <?php include '../navbar.php'; ?>
      
      <main class="content-wrapper">
        <div class="row">
          <div class="col-md-6">
            <div class='card card-profile text-center'>
              <img alt='' class='card-img-top' src='https://unsplash.it/340/160?image=354'>
              <div class='card-block'>
                <!-- <img alt='' class='card-img-profile' src='https://it.gravatar.com/userimage/3434071/205a00fc16ae537b26b56f40790910fe.jpg?size=140'> -->
                <h4 class='card-title' id="username">
                  Juan Putranto
                  <small id="email">juanputrantoo@gmail.com</small>
                </h4>
                <div class='card-links'>
                  <a href="morepages/editprofile.php" class="btn btn-md" role="button" aria-pressed="true">Edit</a>
                </div>
                <div class="card-footer">
                  
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
                    <i class="fas fa-angle-down"></i>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Photograhpy, Animal, Food 
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingThree">
                    <a class="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Contact
                    </a>
                    <i class="fas fa-angle-down"></i>
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