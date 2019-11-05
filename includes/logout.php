<?php include "db.php";?>

<?php session_start();
?>
<?php

	$_SESSION['username'] = null;
	
header("Location: ../login.php");
		
?>


