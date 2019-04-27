<?php
require '../../session.php';
?>
<html>
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
        <form method="post" class="form-create">
            <div class="form-group">
                <label for="nama">Event Name</label>
                <input name="nama" type="event" class="form-control" id="event" placeholder="Enter your event name">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="deskripsi">Description</label>
                <input name="deskripsi" type="text " class="md-textarea form-control" id="exampleInputPassword1" placeholder="event description">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Place</label>
                <select name="tempat" class="form-control" id="place">
                    <option value="3">Zero Hour</option>
                    <option value="2">Eat Boss</option>
                    <option value="1">UNPAR</option>
                </select>
            </div>
            <div class="form-group">
                <label for="harga" >PRICE</label>
                <input name="harga" type="event" class="form-control" id="event" placeholder="ENTER THE COST TO JOIN YOUR EVENT">
            </div>
            
            <button type="submit" name="createevent" class="btn btn-secondary">Submit</button>
        </form>
    </main>
</body>

</html>