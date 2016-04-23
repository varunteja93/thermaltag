<?php session_start();
require_once('config.php');
if(!isset($_SESSION['username'])){
        header('Location: error.php');
    }
$uniqueID = $_GET['id'];
$result=$pdo->query("SELECT * FROM detail_view WHERE unique_id='$uniqueID'");
$re = $result->fetch();
//var_dump($re);
$org = $re['org_shipper'];
$temp = $re['temp'];
$date = $re['harvest_date'];
$loc = $re['harvest_location'];
$shell = $re['type_of_shellfish'];
$datescan =$re['date_of_scan'];
$timescan =$re['time_of_scan'];
$geo =$re['geo_location'];
$uid = $re['unique_id'];
$quan = $re['quantity'];
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <link href="css/metisMenu.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="css/dataTables.responsive.css" rel="stylesheet">
	<link href="css/typeahead.css" rel="stylesheet">
<body>






<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-1">
				<a onclick="goBack()" >go Back</>


				
				</div>
				<div class="col-lg-10">
                    
				</div>
				<div class="col-lg-1">
                <a href="logout.php" >Logout</a>
				</div>
				
				
				
			</div>
					
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ThermalTag: Detail View</h1>
					
                <!-- /.col-lg-12 -->
            </div>
            <div>

            <!-- /.row -->

            <div  class="row">
            	<div id="square" class="col-lg-6">
            		Tag Image
            	</div>
            	<div id="square" class="col-lg-6">
            		Temp
            	</div>
            	
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Details:
                        </div>
                      	Original shipper:<?php echo $org?>
                        <br>
                        Temprature:<?php echo $temp?>
                        <br>
                        Harvest Date:<?php echo $date?>
                        <br>
                        Harvest Location:<?php echo $loc?>
                        <br>
                        Type of Shellfish:<?php echo $shell?>
                        <br>
                        Quantity:<?php echo $quan?>
                        <br>
                        Unique ID:<?php echo $uid?>
                        <br>
                        Date of Scan:<?php echo $datescan?>
                        <br>
                        Time of Scan:<?php echo $timescan?>
                        <br>
                        GEO Location:<?php echo $geo?>
                        <br>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>


    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

   <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/typeahead.min.js"></script>

   

    </body>
	<script>
	function goBack() {
		window.history.back();
		
		
	}
</script>
</html>