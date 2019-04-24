<?php

$con = new mysqli("localhost","root","","interact");

if ($con->connect_error) {
			die('cannot connect to database');
		}

 ?>