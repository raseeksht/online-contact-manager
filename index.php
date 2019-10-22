<?php
include 'db/conn.php';
include ('layout/header.php');	

?>

<form method="post">
<input type="text" placeholder="Name" name='name'>
<input type="text" class='number' name="number" placeholder="number" pattern="[0-9]{10}" title="use 10 digit number. Alphabet are restricted" minlength="10" maxlength="10">
<input type="submit" name="add" value='add' class="btn btn-primary">
</form>



	<?php
	if (isset($_POST['add'])){
		$name=htmlspecialchars($_POST['name']);
		$number=htmlspecialchars($_POST['number']);
		$sql="insert into name values ('','$name','$number')";
		$result=$conn->query($sql);
	}
	
	$check = "select * from name";
	$cmd=$conn->query($check);
		if ($cmd->num_rows > 0){
			echo "<div class='popup'>";
			echo "<table class='table text-center table-striped'>
			<tr>
			<td>sn</td>
			<td>name</td>
			<td>number</td>
			</tr>
			
			";
			$sn=1;
			while ($row=$cmd->fetch_assoc()){
				echo "<tr><td>".$sn."</td>
				<td>".$row['name']."</td>
				<td><a target='_blank' href='tel:".$row['number']."'>".$row['number']."</a></td></tr>";
				$sn++;
			}

		}
		echo "</table></div>";
include 'layout/footer.php';
?>
