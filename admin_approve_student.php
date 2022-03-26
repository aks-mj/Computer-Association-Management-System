<?php
	include 'connection.php';
	$sid = $_REQUEST['id'];
	
	$query = "update login set status='approved' where username = '$sid'";
	$result = mysqli_query($conn,$query);
	
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Approved\");
					window.location = (\"admin_view_students.php\")
				</script>";
	}
?>