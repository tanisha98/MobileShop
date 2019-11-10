<?php session_start();
?>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Smartphone Shopping</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="shop.php">Home</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
     <?php 
		if(isset($_SESSION['username'])){
			
		
echo  "<li><a href='#' style='text-transform: uppercase;'> ". $_SESSION['username'] . "</a> </li>" ;
echo  "<li><a href='product.php'> Product Reserved </a> </li>" ;
echo "  <li><a href='includes/logout.php'><span class='glyphicon glyphicon-log-in'></span> Log out </a></li>" ;

		}
		?>
    </ul>
  </div>
  </div>
</nav>

