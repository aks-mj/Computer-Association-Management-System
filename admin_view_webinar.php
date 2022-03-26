<?php
include('connection.php');
include('aheader.html');

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
    <CENTER><h3>Webinar Details</h3></CENTER>
    <br>
    <br> 

<table class="customers">
            <tr>
                   <th> ID</th>
                    <th>  Name</th>
                    <th>Topic</th>
                    <th>Description</th>
                    <th> Date</th>
                    <th>time</th>

					<th>Delete Now</th>
                   
                </tr>
<?php 
$e="SELECT * from webinar";
					$res=mysqli_query($conn,$e);
	  				while($data=mysqli_fetch_assoc($res))
					{
                        $id1 = $data['webinarname'];
						$id = $data['topic'];
						$na = $data['description'];
                        $na1 = $data['weblink'];
                        $wid = $data['wid'];
                        $date = $data['date'];
                        $time = $data['time'];
                       
                       
						echo "
                <tr>
           
                <td>$id</td>
                    <td>$id1</td>
                    <td>$na</td>
                    <td>$na1</td>
                    <td>$date</td>
                    <td>$time</td>
                    <td><a href='admin_delete_webinar.php?id=$wid'>Delete NoW</a></td>
					
                </tr>";
					}
						?>
						





            </table>        </center>
            <br>
            <br>
            <br>
            <br>

<?php

include('footer.html');
?>