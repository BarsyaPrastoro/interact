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






</head>

<body>
    <?php include '../../navbar.php'; ?>

    <main class="content-wrapper">
        <form class="form-create">
            <div class="form-group">
                <label for="exampleInputEmail1">Event Name</label>
                <input type="event" class="form-control" id="event" placeholder="Enter your event">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Place</label>
                <select class="form-control" id="place">
                    <option>Zero Hour</option>
                    <option>Eat Boss</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Choose Your Event</label>
                <select class="form-control" id="place">
                    <option>Photography</option>
                    <option>Animal</option>
                    <option>Food</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </main>
</body>

</html>