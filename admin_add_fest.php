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

        <h1 id="reg-head">Add Fest Details</h1>

        <form method="POST">
            <div>
            <input type="text"  class="user-input" placeholder="Name" name="fname" required="">
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
            <input type="date"  class="user-input" placeholder="Qualification" name="sdate" required="">
            </div>
            <div>
            <input type="date"  class="user-input" placeholder="Qualification" name="edate" required="">
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
    $name=$_REQUEST["fname"];
    $topic=$_REQUEST["etopic"];
    $description=$_REQUEST["edescription"];
    $qualification=$_REQUEST["qualification"];
    $edate=$_REQUEST["sdate"];
    $time=$_REQUEST["edate"];

    
	
	$a="insert into fest(fname,ftopic,fdescription,qualification,sdate,edate) values('$name','$topic','$description','$description','$edate','$time')";
    mysqli_query($conn,$a);
	// echo $a;

	echo "<script>alert(' Completed Successfully')</script>";
}
include("footer.html")

?>