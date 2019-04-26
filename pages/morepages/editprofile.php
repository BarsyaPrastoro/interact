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
        <form class="form-edit">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="name" class="form-control" id="username" placeholder="Enter your new username">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your new email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your new password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contact</label>
                <input type="number" class="form-control" id="phonenumber" placeholder="Enter your new contact">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Choose Your Interest</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Photography</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Animal</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Food</label>
                </div>
            </div>

            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </main>
</body>

</html>