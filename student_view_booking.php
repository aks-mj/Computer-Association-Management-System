<?php
include('connection.php');
include('sheader.html');

?>
<style>
.customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin: auto;
    width: auto; 
    align-items: center;
    align-self: center;
    align-content: center;
    padding-bottom: 100px;

}
  
  .customers td, .customers th {
    border: 1px solid #ddd;
    padding: 8px;
    /* margin-right: 90px; */
  }
  
  .customers tr:nth-child(even){background-color: #f2f2f2;}
  
  .customers tr:hover {background-color: #ddd;}
  
  .customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    width: auto;
  }
  </style>
    <br>
    <br>
    <br>
    <CENTER><h3>Event Details</h3></CENTER>
    <br>
    <br> 
    <center>
    <table border="4">

<tr>
  <th>Event Name</th>
  <th>Event Topic</th><th>Event Description</th><th>Qualification</th><th>Date</th><th>time</th>

</tr>
<?php 
session_start();
$sids=$_SESSION['sid'];
$e="SELECT booking.*,student.*,event.* FROM student join booking on student.sid=booking.sid join event on booking.eid=event.eid where student.sid='$sids'";

// echo $e;
					$res=mysqli_query($conn,$e);
          // echo $res;
	  				while($data=mysqli_fetch_array($res))
					{
                        $id1 = $data['ename'];
                        $oid = $data['eid'];
						$id = $data['etopic'];
						$na = $data['edescription'];
                        $na1 = $data['qualification'];
                        $spid = $data['edate'];
                        $spid1 = $data['etime'];
                        $bid = $data['bid'];
						?>
         
						
<tr>
							<td><h3><?php echo $id1;  ?></h3></td>
							<td>	<p><?php echo $id;  ?></p><br></td>
							<td>	<p><?php echo $na;  ?></p><br></td>
							<td>	<p><?php echo $na1;  ?></p><br></td>
							<td>	<p><?php echo $spid;  ?></p><br></td>
							<td>	<p><?php echo $spid1;  ?></p><br></td>
              <td>	<p><a href="removeb.php?id=<?php echo $bid;  ?> ">Remove </a></p><br></td>
          </tr>
<?php } ?>
              </table>

            </center>


<?php
         
          ?>
          </div>
        </div>

        </center>
        <br>
            
        <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

<?php

include('footer.html');
?>