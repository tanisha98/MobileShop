
<head>

<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php session_start();
?>
<?php
if(isset($_POST['login'])){


echo $username = $_POST['username'];
echo $password = $_POST['password'];

mysqli_real_escape_string($connection,$username);
mysqli_real_escape_string($connection,$password);

$query = "select * from users where username = '{$username}'";
$result =mysqli_query($connection,$query);
if(!$result){
	die("query failer".mysqli_error($connection));
}
	while($row=mysqli_fetch_array($result)){
		 $db_id = $row['user_id'];
		 $db_username = $row['username'];
		$db_password = $row['user_password'];
		
	}
	
	
	
	 if($username === $db_username && $password === $db_password){
		
		$_SESSION['username'] = $db_username;
		
		
		header("Location: shop.php");
	}else{
		echo "<p class='text-center' style='font-size:30px'> Incorrect Password or Email </p>";
	}

}
?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1> Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			
				<form action="#" method="post">
				
					<input class="text" type="text" name="username" id="username" placeholder="Enter  Username" required="">
					<input class="text" type="password" name="password" placeholder="Enter Password" required="">
				
					<input name="login"  type="submit" value="Login">
				</form>
				<p>Dont have an Account? <a href="index.php"> Signup Now!</a></p>
			</div>
		</div>

		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
