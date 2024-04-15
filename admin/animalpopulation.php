<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['zmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    $foodCost=$_POST['FoodCost'];
    $extraCost=$_POST['ExtraCost'];
    $salaryGiven=$_POST['salaryGiven'];
    $start_date=$_POST['start_date'];
    $totalAttractionRevenue=$_POST['totalAttractionRevenue'];
    $query=mysqli_query($con, "insert into   add_details(date, foodCost,extraCost, salaryGiven, totalAttractonRevenue) value('$start_date',  '$foodCost', '$extraCost', '$salaryGiven', '$totalAttractionRevenue')");
    
}
  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add More Detailed Input - Zoo Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>

<body>
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
     <?php include_once('includes/sidebar.php');?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
          <?php include_once('includes/header.php');?>
            <!-- header area end -->
            <!-- page title area start -->
           <?php include_once('includes/pagetitle.php');?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
          
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add More Detailed Information</h4>
                                        <form method="post" enctype="multipart/form-data">
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Food Cost</label>
                                                <input type="text" class="form-control  mb-3" id="foodCost" name="foodCost" aria-describedby="Name" placeholder="100$" value="" required="true">
                                            </div>

                                                                                       
                                           <div class="form-group">
                                                <label for="exampleInputEmail1">Salary Given</label>
                                                <input type="text" class="form-control  mb-3" id="salaryGiven" name="salaryGiven" aria-describedby="salaryGiven" placeholder="NA" value="" required="true" maxlength="10">
                                            </div> 
                                                                                       
                                           <div class="form-group">
                                                <label for="exampleInputEmail1">Attraction Extra Revenue</label>
                                                <input type="text" class="form-control  mb-3" id="totalAttractionRevenue" name="totalAttractionRevenue" aria-describedby="totalAttractionRevenue" placeholder="NA" value="" required="true" maxlength="10">
                                            </div> 
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Extras</label>
                                                <input type="text" class="form-control mb-3" id="extraCost" name="extraCost" aria-describedby="extraCost" placeholder="200Spent" value="" required="true" maxlength="20"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Start Date</label>
                                                <input type="date" class="form-control" id="start_date" name="start_date" aria-describedby="emailHelp" placeholder="Enter breed" value="" required="true">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <table class="table text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>Serial Number</th>
                                                <th>Date</th>
                                                <th>Food Cost</th>
                                                <th>Extra Cost</th>
                                                <th>Salary Given</th>
                                                <th align="right">Total Attraction Revenue</th>  
                                            </tr>
                                        </thead>
                                        <?php
$ret=mysqli_query($con,"select * from add_details order by ID desc");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                        <tbody>
          <tr data-expanded="true">
            <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['date'];?></td>
                  <td><?php  echo $row['foodCost'];?></td>
                  <td><?php  echo $row['extraCost'];?></td>
                  <td><?php echo $row['salaryGiven'];?></td>
                  <td><?php echo $row['totalAttractonRevenue'];?></td>

                </tr>
                <?php 
$cnt=$cnt+1;
}?>
 </tbody>
                                    </table>

                        <div><div><div>
                        <table class="table text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr><tbody><td><?php echo $row['ret2'];?>
<?php
$ret2=mysqli_query($con, "Select * from add_details order by totalAttractonRevenue desc limit 3;");
$cnt=1;
while ($row=mysqli_fetch_array($ret2)) {

?>
        <tbody>
          <tr data-expanded="true"><th>Best three </th>
            <td><?php echo $cntw;?></td>
              
                  <td><?php  echo $row['date'];?></td>
                  <td><?php  echo $row['foodCost'];?></td>
                  <td><?php  echo $row['extraCost'];?></td>
                  <td><?php  echo $row['salaryGiven'];?></td>
                  <td><?php  echo $row['totalAttractonRevenue'];?></td>

                </tr>
<?php 
$cnt=$cnt+1;
}?>
                                        </tbody></td></tr></thead></table>
                        </div></div></div>
                            <!-- basic form end -->
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?php include_once('includes/footer.php');?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
<?php }  ?>