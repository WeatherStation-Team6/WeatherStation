<?php

	function sqlData($year)
	{
		$conn = mysqli_connect("dbhost", "dbname", "dbpassword", "dbuser");
		$sql = "[SQL Query here]";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<table class=tablestyle>";
			echo "<tr><th>Date <br>(yyyy-mm-dd)</th></th><th>Temperature<br>C</th><th>Humidity<br>%</th><th>Airpressure<br>hPa</th></tr>";

			while ($row = mysqli_fetch_assoc($result)) {

				echo"<tr><td>".$row["Date"]. "</td><td>".$row["Temp"]. "</td><td>".$row["Humid"]. "</td><td>".$row["AirP"]. "</td></tr>";
			}

			echo "</table>";
		}
		
		else {
			echo"Error";
		}

		mysqli_close($conn);
	}
