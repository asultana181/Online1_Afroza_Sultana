<?php

	$name = $_POST["name"];

	$date = $_POST["date"];

    $from = $_POST['from'];

    $to = $_POST['to'];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO ticket_booking VALUES ( '', '$name', '$date','$from', '$to', 'Booked' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> name = $name, From = $from - To = $to" ; 

    echo "<a href=index.php>Home</a> <br>";

?>