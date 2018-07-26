
<?php 
include 'connect.php';
include 'includes/header.php';
include 'includes/nav.php';
?>
<?php
$des=$name1="";

if(isset($_POST['sbshow']))
{
	$name1=$_POST['cbname'];
	$rs=mysqli_query($db,"select * from districtstb where name='$name1'");

	while ($row=mysqli_fetch_array($rs)) {
		$des=$row[2];
	}
}

if(isset($_POST['update']))
{
	$name1=$_POST['cbname'];
	$rs=mysqli_query($db,"select * from districtstb where name='$name1'");
			$des=$_POST['txdes'];
	

	mysqli_query($db,"update districtstb set des='$des' where name='$name1'");
}

if (isset($_POST['delete'])) {

	$name1=$_POST['cbname'];
	$rs=mysqli_query($db,"delete from districtstb where name='$name1'");
	
}

?>



<form action="index.php" method="post">

<?php
	$rs=mysqli_query($db,"select name from districtstb");

	echo "Name <select name='cbname'><option>select</option>";

	while ($row=mysqli_fetch_array($rs)) {
		$name=$row[0];
echo"<option ";
if($name==$name1)
	echo "selected='selected' ";

echo " >$name</option>";
}


	echo "</select>";
?>
<input type="submit" name="sbshow" value="show">
<table>
	<tr>
		<th>
			Description
		</th>
		<td>
			<textarea name="txdes"><?php echo $des; ?></textarea>
		</td>
	</tr>

	<tr>
		<td><input type="submit" name="update" value="edit"></td>
		<td><input type="submit" name="delete" value="delete"></td>
	</tr>

</table>	

</form>
 <?php
 include '../includes/footer.php';
 ?>