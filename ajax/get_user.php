<?php
	$conn = mysqli_connect('localhost','root','mysql','contact');
	$id = $_POST['id'];
	$sql='SELECT * FROM name where id='.$id;
	$result = $conn -> query($sql);
	echo "
	<table class='table table-striped'>
	<tbody>
	<tr>
	";
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "<td><label>Name</label></td><td><input type='text' class='usr_name' value='".$row['name']."'></td></tr>";
			echo "<tr><td><label>Number</label></td><td><input type='text' class='usr_number' value='".$row['number']."'></td></tr>";
			echo "<input type='hidden' id='id' value='".$row['id']."'>";			
		}
	}
	?>
</tbody>
<table>
