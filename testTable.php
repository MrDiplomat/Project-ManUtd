
<?php 
				$club_position=1;
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "MANUTD";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				$sql = "SELECT club_name, club_game, club_won, club_drew, club_lost, club_gDifference, club_pts FROM PremierLeagueTable ORDER BY pts DESC";
				
				echo "" .row["club_name"]."";

				php $conn->close(); 


?>