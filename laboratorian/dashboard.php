<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>                                            

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lab - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/mycustom.css" rel="stylesheet">

</head>
<?php require("../config/connection.php")?>
<?php require("header.php")?>
<?php 
if (isset($_SESSION['cusername'])) {
  $username = $_SESSION['cusername'];
}else{
  $username = $_SESSION['username'];
}
$result = mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `username` = '".$username."'");
if ($row=mysqli_fetch_array($result)) {
    $fname = $row[0];
    $mname = $row[1];
    $lname = $row[2];
    $DOB = $row[3];
    $mstatus = $row[4];
    $sex = $row[5];
    $bg = $row[6];
    $mnum = $row[7];
    $enum = $row[10];
    $add = $row[11].",".$row[12].",".$row[13].",".$row[14];
}else{?>
  <script type="text/javascript">
    window.location.href = "../index.php";
  </script>
<?php 
  exit();
}
$result = mysqli_query($conn,"SELECT `kal`,`psh` FROM `dashboard` WHERE `username` = '".$username."'");
if ($row=mysqli_fetch_array($result)) {
    $psh = $row[1];
    $kal = $row[0];
}else{
    ?>
    <script type="text/javascript">
        window.location.href = "../index.php";
    </script>
    <?php 
    exit()  ;
}
 ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- Content Row -->
    <div class="row"> 
        <div class="col-12 mb-4">
            
            <!-- Client info -->
            <div class="card shadow mb-4 dash">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo "$fname $mname $lname"; ?></h6>
            </div>
            <div class="card-body row">
                <div class="text-center col-lg-6">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../user_pp/<?php echo $username.'.jpg' ?>" alt="Client Image">
            </div>
                <div class="col-lg-6">
                <p>DOB : <?php echo "$DOB"; ?> </p>
                <p>Age : <?php echo date_diff(date_create($DOB), date_create('today'))->y; ?> </p>
                <p>Sex : <?php echo "$sex"; ?> </p>
                <p>Blood Group : <?php echo "$bg"; ?> </p>
                <p>Contact : <?php echo "$mnum"; ?> </p>
                <p>Emergency Contact : <?php echo "$enum"; ?> </p>
                <p>Address : <?php echo "$add"; ?></p>
                </div>
                <!-- <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a> -->
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <!-- Past medical History -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Report Prescribed </h6>
                </div>
                <div class="card-body dash-card">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Report Name</th>
                    </tr>
                  </thead>
                  <tfoot>
                      <tr>
                       <th>Date</th>
                      <th>Report Name</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>2/24/2020</td>
                      <td>CBC</td>
                    </tr>
                  </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Master Medication List History -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Known Allergies List</h6>
            </div>
            <div class="card-body dash-card">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!--Past surgical History -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Past surgical History</h6>
            </div>
            <div class="card-body dash-card">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
            </div>
            </div>
        </div>
       
        
    </div>
    <!-- /.container-fluid -->
</div>
    <!-- End of Main Content -->


<?php require("footer.php")?>