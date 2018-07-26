<?php 
include '../connect.php';
include 'includes/nav.php';
if ($_POST['add']) {
	mysqli_query($db,"insert into cat() values() ");
	header('location: categories.php');
}

if ($_POST['edit']) {
	mysqli_query($db,"update table_name set cat=$cat; ")
	header('location: categories.php');
}
?>

<form action="categories.php">
	<table>
		<tr>
			<td><input name="cat" type="text"></td>
			<td><input type="submit" name="add" value="Add Category"></td>
		</tr>
	</table>
</form>
<table>
<?php 
$query=mysqli_query($db,"select * from cat");
while ( $rquery=mysqli_fetch_array($query)) { ?>
	<tr>
		<td><p><?php echo $cat; ?></p></td>
	</tr>
<?php
}
 ?>

	
</table>
<?php
if ($_GET['edit'] && !empty($_GET['edit'])) { 

 ?> 
<form action="categories.php">
	<table>
		<tr>
			<td><input type="text"></td>
			<td><input type="submit" name="edit" value="Edit Category"></td>
		</tr>
	</table>
</form>
 <?php } ?>

<?php
include 'includes/footer.php';
 ?>