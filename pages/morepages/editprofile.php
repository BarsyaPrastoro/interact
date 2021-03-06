<html>
<?php  
require '../../session.php';
require '../../connection.php';
$email = $_SESSION['email'];

$sqlprofil = "SELECT * FROM pengguna WHERE email = '$email'";
$profil= mysqli_query($con,$sqlprofil) or die(mysqli_error($con));

if(!empty($_POST['update'])) {    
  $nama=$_POST['nama'];
  $password=$_POST['password'];
  $telpon=$_POST['telpon'];
  $bio=$_POST['bio'];              
  $uprofil="UPDATE pengguna set nama='$nama', password='$password', telpon='$telpon', bio='$bio' where email='$email'";
  if (mysqli_query($con, $uprofil)) { 
    echo "DATA ENTRY COMPLETE";
    header('Refresh: 0');
}
else { 
    echo "DATA ENTRY FAILED"; 
}                   
}
?>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTERACT</title>


    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/stylePages.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="../../css/animated.css">



    <link rel="stylesheet" href="../../font/fontawesome/css/all.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/customPages.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>



    <style>
        .footer {
          position: absolute;
          bottom: 0;
          width: 100%;
          height: 3.5rem;
          line-height: 3.5rem;
          background-color: #ccc;
      }

      .nav-link:hover {
          transition: all 0.4s;
      }

      .nav-link-collapse:after {
          float: right;
          content: '\f067';
          font-family: 'FontAwesome';
      }

      .nav-link-show:after {
          float: right;
          content: '\f068';
          font-family: 'FontAwesome';
      }

      .nav-item ul.nav-second-level {
          padding-left: 0;
      }

      .nav-item ul.nav-second-level>.nav-item {
          padding-left: 20px;
      }

      @media (min-width: 992px) {
          .sidenav {
            position: absolute;
            top: 0;
            left: 0;
            width: 230px;
            height: calc(100vh - 3.5rem);
            margin-top: 3.5rem;
            background: #343a40;
            box-sizing: border-box;
            border-top: 1px solid rgba(0, 0, 0, 0.3);
        }

        .navbar-expand-lg .sidenav {
            flex-direction: column;
        }

        .content-wrapper {
            margin-left: 230px;
            overflow-x: hidden;
            margin-top: 55px;
        }

        .nav-item i {
            padding: 10px;
        }

        nav a .navbar-brand {
            margin-left: 50px !important;
        }
    }

    .btn-logout {
      color: #ccc;
      /* float: right !important; */
      font-size: 20px;
      cursor: pointer;
  }
</style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">INTERACT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav sidenav" id="navAccordion">
            <li class="nav-item active">
                <a class="nav-link" href="../profile.php"><i class="fas fa fa-home"></i>Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../event.php"><i class="fas fa fa-calendar"></i>Event <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../report.php"><i class="fas fa fa-newspaper"></i>Report <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../transaksi.php"><i class="fas fa fa-shopping-cart"></i>Transaksi <span class="sr-only">(current)</span></a>
          </li>
      </ul>

      <!-- <span class="fas fa-sign-out-alt btn-logout ml-auto" title="logout"><a class="fas fa-sign-out-alt btn-logout ml-auto" href="index.php"></span></a> -->
      <a class="fas fa-sign-out-alt btn-logout ml-auto" href="../index.php"></a>

  </div>
</nav>

<main class="content-wrapper">
    <?php while($profiles = mysqli_fetch_array($profil)): ?>
        <form class="form-edit" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="name" class="form-control" id="username" name="nama" value="<?= $profiles['nama'] ?>">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= $profiles['password'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contact</label>
                <input type="text" class="form-control" id="phonenumber" name="telpon" value="<?= $profiles['telpon'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Bio</label>
                <input type="text" class="form-control" name="bio" value="<?= $profiles['bio'] ?>">
            </div>


            <input type="submit" name="update" class="btn btn-secondary" value="Update" />
        </form>
    <?php endwhile; ?> 
</main>
</body>

</html>