<html>

<head>
<?php
// $stmid=$_REQUEST["id"];
include("connection.php");
include("aheader.html");
include("cstyle.html");

?>
</head>

<body>


    <div id="main-header">

        <h1 id="reg-head">Add Event Details</h1>

        <form method="POST">
            <div>
            <input type="text"  class="user-input" placeholder="Name" name="ename" required="">
            </div>
            <div>
            <input type="text"  class="user-input" placeholder="Topic" name="etopic" required="">
            </div>
            <div>
            <input type="text"  class="user-input" placeholder="Description" name="edescription" required="">
            </div>
            <div>
            <input type="text"  class="user-input" placeholder="Qualification" name="qualification" required="">
            </div>
            <div>
            <input type="date"  class="user-input" placeholder="Qualification" name="edate" required="">
            </div>
            <div>
            <input type="time"  class="user-input" placeholder="Qualification" name="etime" required="">
            </div>
            <div>
                <input class="user-input-button" type="submit" value="Add Now" name="submit" placeholder="Add Now">
            </div>
           

           
        </form>

    </div>


</body>




<?php

if(isset($_REQUEST['submit']))
{
	// echo "hello";
    $name=$_REQUEST["ename"];
    $topic=$_REQUEST["etopic"];
    $description=$_REQUEST["edescription"];
    $qualification=$_REQUEST["qualification"];
    $edate=$_REQUEST["edate"];
    $time=$_REQUEST["etime"];

    
	
	$a="insert into event(ename,etopic,edescription,qualification,edate,etime) values('$name','$topic','$description','$description','$edate','$time')";
    // echo $a;
    mysqli_query($conn,$a);
	// echo $a;

	echo "<script>alert(' Completed Successfully')</script>";
}
include("footer.html")

?>