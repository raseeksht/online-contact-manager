<?php
$conn = mysqli_connect('localhost','root','mysql','contact');
$cmd=$conn->query('select * from name order by name');
		if ($cmd->num_rows > 0){
			echo "<div class='popup'>";
			echo "<table class='table text-center table-striped'>
			<tr>
			<td>sn</td>
			<td>name</td>
			<td>ip</td>
			</tr>
			";
			$sn=1;
			while ($row=$cmd->fetch_assoc()){
				echo "<tr><td>".$sn."</td>
				<td>".$row['name']."</td>
				<td id='number".$row['id']."'>".$row['number']." &nbsp; &nbsp &nbsp 

				<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' onclick='show(".$row['id'].",".$row['number'].")'>Edit</button>
				 </td></tr>";
				$sn++;
			}

		}
		echo "</table></div>";
	?>
