<?php
	include 'connection.php';
	$sid = $_REQUEST['id'];
	
	$query = "delete from booking where bid = '$sid'";
	$result = mysqli_query($conn,$query);
	
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Removed\");
					window.location = (\"admin_view_participants.php\")
				</script>";
	}
?>