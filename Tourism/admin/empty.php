<?php 
include 'connect.php';

/*if ($_GET['delid'] && !empty($_GET['delid'])) {
	$name=$_GET['delid'];
	mysqli_query($db,"delete from districtstb where id=$name; ");
	header('location: index.php');
}*/

if (isset($_POST)) {
	$id=$_GET['editid'];
	$name=$_POST['name'];
	mysqli_query($db,"update districtstb set name='$name' where id=$id ");
	header('location: index.php');
}

if ($_GET['editid']) {
$id=$_GET['editid'];
	$query=mysqli_query($db,"select * from districtstb where id=$id ");
	$rquery=mysqli_fetch_array($query);
 ?>
 <form action="empty.php" method="post">
	<input type="text" name="name" value="<?php echo $rquery['name']; ?>">
	<input type="submit" name="go" value="Update">
</form>
<?php	
}

?>