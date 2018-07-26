<?php 
include 'includes/header.php';
include 'includes/headerpar.php';
 ?>
 
 <?php 
 $cat=$_GET['ser'];
 $dis=$_GET['dis'];
$query=mysqli_query($db,"select * from services where cat='$cat' and dis='$dis' ");
while ($rquery=mysqli_fetch_array($query)) { ?>

<div class="ser-outer">

		<img src="img/garh.jpg">
		<div>
			<h1><?php echo $rquery['name']; ?></h1>
			<h6><?php echo "Area -" . $rquery['area']; ?></h6>
			<h6><?php echo $rquery['price']; ?></h6>
			<button>BOOK NOW</button>
		</div>

</div>

<?php
	
}
  ?>



<?php 
include 'includes/footer.php'; ?>