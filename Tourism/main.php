<?php 
include 'includes/header.php';
include 'includes/headerpar.php';
 ?>
<h1 style="position: absolute;color: #ffa; text-shadow: 1px 1px red; font-size: 350%; font-variant: small-caps; top: 10%; left: 40%"><?php echo $_GET['dis']; ?></h1>
<div class="services">
	<div>
		<img src="img/room.jpg">
		<h3>ROOMS</h3>
		<a href="main2.php?dis=<?php echo $_GET['dis'];  ?>&&ser=<?php echo 'room' ?>">READ MORE</a>
	</div>
	<div>
		<img src="img/room.jpg">
		<h3>GUIDES</h3>
		<a href="main2.php?dis=<?php echo $_GET['dis'];  ?>&&ser=<?php echo 'guide' ?>">READ MORE</a>
	</div>
	<div>
		<img src="img/room.jpg">
		<h3>SHOPES</h3>
		<a href="main2.php?dis=<?php echo $_GET['dis'];  ?>&&ser=<?php echo 'shopes' ?>">READ MORE</a>
	</div>
	<div>
		<img src="img/room.jpg">
		<h3>CABS</h3>
		<a href="main2.php?dis=<?php echo $_GET['dis'];  ?>&&ser=<?php echo 'cabs' ?>">READ MORE</a>
	</div>
</div>

<?php 
include 'includes/footer.php'; ?>