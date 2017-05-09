 <?php
       
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $user_name = addslashes ($_POST['user_name']);
               $favourite_player = addslashes ($_POST['favourite_player']);
            }
            else {
               $user_name = $_POST['user_name'];
               $favourite_player = $_POST['favourite_player'];
            }
            
            $user_password = $_POST['user_password'];
            
            $sql = "INSERT INTO user ". "(user_name,favourite_player, user_password) ". "VALUES('$user_name','$favourite_player','$user_password')";
               
            mysql_select_db('MANUTD');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         
            
      ?>