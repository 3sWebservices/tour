<?php 
$query=mysqli_query($db,"select * from hackthon") or die(mysqli_connect_error());
while ($rquery=mysqli_fetch_array($query)) { ?>

	<img src="<?php echo $rquery['img'] ?>" alt="Photo">
	<h1><?php echo $rquery['title']; ?></h1>
<?php }

$count=mysqli_query($db,"select count(*) from table_name where email=$email and password=$passwd")
if($count >= 1)
{
	header("location: index.php");
}
else{
	echo "<script>alert('Email or Password do not match');</script>";
}

 ?>
