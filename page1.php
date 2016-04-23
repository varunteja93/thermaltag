<?php 
	require_once('config.php');
   $Name = $_GET['normaluser'];
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
			
                <?php session_start();
                if(ISSET($_SESSION['username'])){
                ?>
                <a href="logout.php">Logout</a> 
                <?php
                }else{
                ?>This page just for registered users. You are not authorized to access this page. Please <a href="login.php">Login</a> first<?php
                }
                ?>
				
				
			</div>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ThermalTag: Search</h1>
                    
                <!-- /.col-lg-12 -->
            </div>
            <div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pages Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>S.No.</th>
                                        	<th>ID</th>
                                            <th>Scan ID</th>
                                            <th>Scan date</th>   
                                            <th>oyster type</th>
                                            <th>quantity</th>
                                            <th>temp</th> 
                                            <th>status</th>
                                          	<th>actions</th>                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    	$res=$pdo->query("SELECT * FROM tag_search WHERE username='$Name'");
                                    	
                                        $i=1;
                                        while($row=$res->fetch())
                                        {   
                                            ?>
                                            <tr class="odd gradeX">
                                            <td><?php echo $i;?></td>    
                                            <td><?php echo $row['ID']; ?></td>
                                            <td><?php echo $row['scan_ID']; ?></td>
                                            <td><?php echo $row['scan_date']; ?></td>
                                            <td><?php echo $row['oyster_type']; ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td><?php echo $row['temp']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td><a href="page2.php?id=<?php echo $row['ID'] ?>">view</a></td>
                                            </tr>

                                            <?php $i++;} ?>
                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
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

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    </body>
</html>