<?php
$conn = mysqli_connect('localhost','root','mysql','contact');
$id = $_POST['id'];
$sql = "DELETE FROM `name` WHERE id=".$id;
if ($conn->query($sql) == true){
	echo "
	<div id='alert-success' onclick='document.getElementById(\"alert-success\").style.display=\"none\"'>
		record is deleted successfully
	</div>
	";
}else{
	echo "
	<div id='alert-fail' onclick='document.getElementById(\"alert-fail\").style.display=\"none\"'>
		Failed
	</div>";
}
?>