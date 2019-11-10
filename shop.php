<?php
include('includes/header.php');
?>
<?php
include ('includes/db.php');
?>
<?php
ob_start();
?>
<body>

<?php
include('includes/navigation.php');  
?>


<div class="s130">
<form action="search.php" method="post">
<div class="inner-form">
<div class="input-field first-wrap">
<div class="svg-wrapper">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
</svg>
</div>
<input name="search" type="text" placeholder="What are you looking for?" />
</div>
<div class="input-field second-wrap">
<button name="submits" class="btn-search" type="submit">SEARCH</button>
</div>
</div>

</form>
</div>
<div>
</div>
<div class="container">
<div class="row" style="margin-bottom:30px;">
<?php
if(isset($_SESSION['username'])){
$name = $_SESSION['username'];
$query1 = "select * from users where username = '$name' ";
$res = mysqli_query($connection,$query1);
while($row1 = mysqli_fetch_assoc($res)){
$u_id = intval($row1['user_id']);		
}
$query = "select * from products ";
$result= mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
$id = $row['product_id'];
$name = $row['product_name'];
$price =  $row['product_price'];
$status = $row['product_status'];

if($status == 'reserved'){

}
else{

?>
<div class="col-md-4 col-sm-6 col-xs-6">  
<div class="products">
<div class="text-center">
<div class="product">
<div class="box-image">
<img class="image" src="images/oneplus5.png" alt="oneplus5">
</div>
<div class="info">
<span class="text"><?php echo $name ?></span>
<span class="price">  ₹ <?php echo $price ?></span>
<?php echo "<button type='button' class='btn btn-success'><a style='font-size: 15px;padding: 10px;' href='?reserve=$id'>Reserve</a></button>" ?>

</div>
</div>		
</div>


</div></div> <?php }} ?>

</div>

</div>
<?php 
if(isset($_GET['reserve'])){
$id = $_GET['reserve'];
$query1 = " Update products set product_status = 'reserved' where product_id = $id";
$result1 = mysqli_query($connection,$query1);
$que = "insert into items (product_id,user_id) values ($id,$u_id)";
$re = mysqli_query($connection,$que);
if(!$re){
die("Query Failed".mysqli_error($connection));
}
header("Location: shop.php");


}}
?>	

<script src="js/extention/choices.js"></script>

</body>