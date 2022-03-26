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

        <h1 id="reg-head">Add Webinar Details</h1>

        <form method="POST">
            <div>
            <input type="text"  class="user-input" placeholder="Name" name="webinarname" required="">
            </div>
            <div>
            <input type="text"  class="user-input" placeholder="Topic" name="topic" required="">
            </div>
            <div>
            <input type="text"  class="user-input" placeholder="Description" name="description" required="">
            </div>
            <div>
            <input type="text"  class="user-input" placeholder="Webinar Link" name="Weblink" required="">
            </div>
            <div>
            <input type="date"  class="user-input" placeholder="Webinar Link" name="date" required="">
            </div>
            <div>
            <input type="time"  class="user-input" placeholder="Webinar Link" name="time" required="">
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
    $name=$_REQUEST["webinarname"];
    $topic=$_REQUEST["topic"];
    $description=$_REQUEST["description"];
    $weblink=$_REQUEST["Weblink"];
    $date=$_REQUEST["date"];
    $time=$_REQUEST["time"];

    
	
	$a="insert into webinar(webinarname,topic,description,weblink,date,time) values('$name','$topic','$description','$weblink','$date','$time')";
    mysqli_query($conn,$a);
	// echo $a;

	echo "<script>alert(' Completed Successfully')</script>";
}
include("footer.html")

?>