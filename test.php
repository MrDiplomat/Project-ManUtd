<?php session_start();
?>    <?php $_SESSION=0;
if($_SESSION==0)
{
$_SESSION=1;
header("Location: test.php");
}
else{
	echo"GO gog o";
	session_destroy();
}
 ?>