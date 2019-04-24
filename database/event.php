<?php

require "connection.php";
$query = "SELECT * FROM event";
$sql = $con->query($query);
$result = [];
if ($sql->num_rows > 0) {
	while ($row = mysqli_fetch_row($sql)){
		return $row;
	}
}
?>