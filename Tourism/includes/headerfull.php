<div class="header">
	
	<?php include 'includes/nav.php'; ?>

	<div class="header-img">
		<h1>WELCOME<br> TO<br> RAJASTHAN</h1>
		<?php
		if (isset($_GET['go'])) 
		{
			$name=$_GET['cbname'];
			$name1=$_GET['sea'];
			if(!empty(name1) && $name=="ALL")
			{
				// echo "<script>alert('.$name1.')</script>";
				header('location: main.php?dis='.$name1);	
			}
			/*if(name=="All")
			{
				if (name1!="") {
					header('location: main.php?dis='.$name1);
					//return;
					}	
					header('location: main.php?dis='.$name);
			}*/
			else
			{
				// echo "<script>alert('.$name.')</script>";
				header('location: main.php?dis='.$name);		
			}
		}
		
		?>
		<form class="form" action="index.php" method="GET">
			<div>
				<select name="cbname">
					<option>ALL</option>
					<?php 
						$query=mysqli_query($db,"select name from districtstb");
						while ($rQuery=mysqli_fetch_array($query)) { ?>
						<option style="font-variant: small-caps;"><?php echo $rQuery[0]; ?></option>	
					<?php	}
					 ?>
				</select>
				<input type="text" name="sea">
				<input type="submit" name="go" value="Search">
			</div>
		</form>
	
	</div>

</div>