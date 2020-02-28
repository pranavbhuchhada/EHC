<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E - healthcard - Dashboard</title>

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
  $result = mysqli_query($conn,"SELECT `fname`,`lname`,`mnum` FROM `userinfo` WHERE `username` = '".$row[21]."'");
  $row = mysqli_fetch_array($result);
  $fdn = $row[0]." ".$row[1];
  $fdnum = $row[2];
}else{?>
<script type="text/javascript">
  window.location.href = "../index.php";
</script>
<?php 
exit();
}
$result = mysqli_query($conn,"SELECT * FROM `dashboard` WHERE `username` = '".$username."'");
if ($row=mysqli_fetch_array($result)) {
    $pmh = $row[1];
    $fh = $row[2];
    $psh = $row[3];
    $mpl = $row[4];
    $kal = $row[5];
    $sh = $row[6];
    $hm = $row[7];
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
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <!-- Past medical History -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Past medical History</h6>
                </div>
                <div class="card-body dash-card">
                    <p><?php echo "$pmh"; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Family History -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Family History</h6>
            </div>
            <div class="card-body dash-card">
                <p><?php echo $fh; ?></p>
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
                <p><?php echo $psh; ?></p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Master Problem List History -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Master Problem List</h6>
            </div>
            <div class="card-body dash-card">
                <p><?php echo $mpl; ?></p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Known Allergies List History -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Known Allergies List</h6>
            </div>
            <div class="card-body dash-card">
                <p><?php echo $kal; ?></p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Socail History -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Social History</h6>
            </div>
            <div class="card-body dash-card">
                <p><?php echo $sh; ?></p>
            </div>
        </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Health Maintanance -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Health Maintanance</h6>
            </div>
            <div class="card-body dash-card">
                <p><?php echo $hm; ?></p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Current Medication List -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Current Medication List</h6>
            </div>
            <div class="card-body dash-card">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Medication</th>
                <th>Start Date</th>
                <th>Remaining Days</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $result=mysqli_query($conn, "SELECT `medname`,`date`,`duration` FROM `medication` WHERE `username`= '".$username."' AND `status` = 1");
            while($row=mysqli_fetch_array($result)){
                  ?>
                <tr>
                  <td><?php echo $row[0]; ?></td>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2] - date_diff(date_create($row[1]), date_create('today'))->d; ?></td>
                </tr>
                <?php
              } 
            ?>
            </tbody>
          </table>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Family Doctor Contact -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Family Doctor Contact</h6>
                </div>
                <div class="card-body dash-card">
                    <p>Name : <?php echo $fdn; ?></p>
                    <p>Mobile Number : <?php echo $fdnum; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
    <!-- End of Main Content -->


<?php require("footer.php")?>