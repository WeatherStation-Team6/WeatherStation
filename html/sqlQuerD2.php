<?php

	function sqlDataD2()
	{
		    $conn = mysqli_connect("host", "dbname", "dbUser", "dbPassword");
    $sql = "[SQL QUERY HERE]";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class=tablestyle>";
        echo "<tr><th>Date <br>(yyyy-mm-dd)</th><th>Time <br>(hh:mm)</th><th>Temperature<br>C</th><th>Humidity<br>%</th><th>Airpressure<br>hPa</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {

				$timestamp = $row["Date3"]; 
				$splitTimeStamp = explode(" ",$timestamp); 
				$date = $splitTimeStamp[0];

				$splitTime = $splitTimeStamp[1]; 
				$splitTime = explode(":", $splitTimeStamp[1]);
				$hour = $splitTime[0];
				$minute = $splitTime[1]; 
				$sec = $splitTime[2]; 

            echo"<tr><td>" . $date . "</td><td>" . $hour . ":" . $minute . "</td><td>".$row["Temp3"]. "</td><td>".$row["Humid3"]. "</td><td>".$row["AirP3"]. "</td></tr>";
        }

        echo "</table>";
    }
    else {
        echo"Error";
    }

    mysqli_close($conn);
	}
	