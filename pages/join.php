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
<form class="payment" action="../indexmidtrans.php" method="post">

	<body>
		<div class="panel panel-default credit-card-box">
			<div class="panel-heading display-table">
				<div class="row display-tr">
					<h3 class="panel-title display-td">Payment Details</h3>
					<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
				</div>
			</div>
		</div>
		<br>
		<label for="cardNumber">CARD NUMBER</label>
		<input type="text" size="10" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />
		<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
		<label for="cardExpir">EXPIRATION DATE</label>
		<input type="text" size="5" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required />
		<label for="cardCVC">CV CODE</label>
		<input type="text" size="3" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required />
		<label for="couponCode">DISCOUNT CODE</label>
		<input type="text" class="form-control" name="couponCode" />
		<br>
		<button class="blueButton" style="float:right;" type="submit">Confirm Payment</button>
		<br><br>
	</form>
	<!-- If you're using Stripe for payments -->
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</form>
</body>
</html>