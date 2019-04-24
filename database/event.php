<?php

require "../connection.php";
$query = "SELECT * FROM event";
$sql = $con->query($query);
$row = mysqli_fetch_assoc($sql);


?>