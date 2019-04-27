<?php

$con = new mysqli("localhost","root","","interact");

if ($con->connect_error) {
	die('cannot connect to database');
}

// $sqlacara = ('select * from tempatacara');
// $acara= mysqli_query($con, $sqlacara) or die(mysqli_error($con));

?>