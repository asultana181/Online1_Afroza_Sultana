<?php
	   require_once('dbconfig.php');
       $connect = mysqli_connect( HOST, USER, PASS, DB )
           or die("Can not connect");
   
   
       $results = mysqli_query( $connect, "SELECT * FROM t0" )
           or die("Can not execute query");
   
       echo "<table border> \n";
       echo "<th>Name</th> <th>Date</th> <th>From</th> <th>To</th> <th>Status</th> <th> delete </th> \n";
   
       while( $rows = mysqli_fetch_array( $results ) ) {
           extract( $rows );
           echo "<tr>";
           echo "<td> $name </td>";
           echo "<td> $appt_date </td>";
           echo "<td> $from_location </td>";
           echo "<td> $to_location </td>";
           echo "<td> $status </td>";
           echo "<td> <a href = 'cancel.php?id=$id'> Cancel </a> </td>";
           echo "</tr> \n";
       }
   
       echo "</table> \n";
   
       
   
   
   echo "<a href=appt_input.php>AddBooking</a> <br>";
   echo "<a href=cancelBooking.php>CancelBooking</a>";
   
   ?>