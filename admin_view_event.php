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
    <CENTER><h3>Event Details</h3></CENTER>
    <br>
    <br> 

<?php 
$e="SELECT * from event";
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

                       
						
              
				
						?>
						


<div class="col-md-3 w3_agileits_banner_bottom_grid">
				<div class="agileinfo_banner_bottom_grid_main">
					<div class="wthree_banner_bottom_grid1">
						<p><?php echo $oid;  ?></p>
					</div>
				</div>
        <a href='admin_delete_event.php?id=<?php echo $oid?>'>
				<div class="agileits_grid">
					<figure class="effect-layla">
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h3><?php echo $id1;  ?></h3>
							<p><?php echo $id;  ?>
						<?php echo $na;  ?></p>
							<p><?php echo $na1;  ?></p>
							<p><?php echo $spid;  ?>
						<?php echo $spid1;  ?></p>

                            <p><?php echo "REMOVE EVENT";  ?></p><br>


						</figcaption>			
					</figure>
				</div>
        </a>

</div>

<?php
          }
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