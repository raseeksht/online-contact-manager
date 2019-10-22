<?php
$conn = mysqli_connect('localhost','root','mysql','contact');
$name = $_POST['name'];
$number = $_POST['number'];
$id = $_POST['id'];
$sql = "UPDATE `name` SET `name`='".$name."',`number`='$number' WHERE id=".$id;
if ($conn->query($sql) == true){
	echo "
	<div id='alert-success' onclick='document.getElementById(\"alert-success\").style.display=\"none\"'>
		record is updated successfully
	</div>
	";
}else{
	echo "
	<div id='alert-fail' onclick='document.getElementById(\"alert-fail\").style.display=\"none\"'>
		Failed
	</div>";
}



?>