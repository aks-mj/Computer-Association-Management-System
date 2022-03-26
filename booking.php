<?php
include("connection.php");
session_start();

$oid=$_REQUEST['id'];

$sid=$_SESSION['sid'];
$date=date('Y-m-d');
$qry="insert into booking (sid,eid,date,status) values('$sid','$oid','$date','joined')";
mysqli_query($conn,$qry);
echo "<script type = \"text/javascript\">
					alert(\"Successfully Registrred\");
					window.location = (\"student_view_event.php\")
				</script>";



?>