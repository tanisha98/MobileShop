
<head>

<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>
<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password =$_POST['password'];
	$phone =$_POST['number'];
	$address =$_POST['address'];
	
	$username = mysqli_real_escape_string($connection,$username);
$email = mysqli_real_escape_string($connection,$email);
$password = mysqli_real_escape_string($connection,$password);

	
	  if (!empty($username) && !empty($email) && !empty($password)&& !empty($phone)&& !empty($address)) {
	$query1 = "insert into users (username,user_email,user_password,user_phone,user_add)";
	$query1 .= "values('{$username}','$email','$password','$phone','$address')";
	$result1=mysqli_query($connection,$query1);
	
		if(!$result1){
		die("Query Failed".mysqli_error($connection). ''.mysqli_errno($connection));

	}

		  header("Location:login.php");

}else
	  {
		$msg =  "Fields cannot be empty";
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
		<h1> SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			
				<form action="#" method="post">
				
					<input class="text" type="text" name="username" id="username" placeholder="Enter Desired Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text" type="text" name="number" placeholder="Number" required="">
							<input class="text" type="text" name="address" placeholder="Address" required="">
				
					<input name="submit"  type="submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login.php">Click here!</a></p>
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
