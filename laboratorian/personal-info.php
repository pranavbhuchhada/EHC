<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E - healthcard - Personal info</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/mycustom.css" rel="stylesheet">

</head>
<?php require("header.php")?>
<?php require("../config/connection.php")?>
<?php 
if (isset($_SESSION['cusername'])) {
    $username = $_SESSION['cusername'];
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
        $rnum = $row[8];
        $wnum = $row[9];
        $enum = $row[10];
        $add = $row[11];
        $city = $row[12];
        $state = $row[13];
        $country = $row[14];
        $wstatus = $row[15];
        $occupation = $row[16];
        $rdate = $row[17];
        $pin = $row[19];
        $UID = $row[20];
    }else{
        ?>
        <script type="text/javascript">
            alert("ERROR 2");
            window.location.href = "../index.php";
        </script>
        <?php 
        exit()  ;
    }
}else{
    $username = $_SESSION['username'];
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
        $rnum = $row[8];
        $wnum = $row[9];
        $enum = $row[10];
        $add = $row[11];
        $city = $row[12];
        $state = $row[13];
        $country = $row[14];
        $wstatus = $row[15];
        $occupation = $row[16];
        $rdate = $row[17];
        $pin = $row[19];
        $UID = $row[20];
    }else{
        ?>
        <script type="text/javascript">
            alert("ERROR 2");
            window.location.href = "../index.php";
        </script>
        <?php 
        exit()  ;
    }
}

?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Personal Info</h1>
        <h1 class="h3 ml-auto text-gray-800">UID - <?php echo "$UID"; ?></h1>
    </div>

    <div class="row">
        <!-- First Name -->
        <div class="col-xl-4 col-md-4 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">First Name</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$fname"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- Middle Name -->
        <div class="col-xl-4 col-md-4 mb-2">
            <div class="card border-left-success shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Middle Name</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$mname"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- Last Name -->
        <div class="col-xl-4 col-md-4 mb-2">
            <div class="card border-left-warning shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Last Name</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$lname"; ?></div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- DOB -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Date Of Birth</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$DOB"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- AGE -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Age</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo date_diff(date_create($DOB), date_create('today'))->y; ?> Years</div>
                </div>
            </div>
            </div>
        </div>
        <!-- Maratial Status -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Maratial Status</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$mstatus"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- SEX Status -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sex</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$sex"; ?></div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Mobile no. -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mobile Number</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$mnum"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- Residential No. -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-success shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Residential Number</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$rnum"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- Work no. -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-warning shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Work Contact Number</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$wnum"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- Emergency no. -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-danger shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Emergency Contact</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$enum"; ?></div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Address -->
        <div class="col-12 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Address</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$add"; ?></div>
                </div>
            </div>
            </div>
        </div>

    </div>
    <div class="row">
        <!-- City -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">City</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$city"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- State -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">State</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$state"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- Pincode -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pincode</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$pin"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!--Country -->
        <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Country</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$country"; ?></div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Work status -->
        <div class="col-xl-4 col-md-4 mb-2">
            <div class="card border-left-success shadow h-100">
                <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Work Status</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$wstatus"; ?></div>
                </div>
            </div>
            </div>
        </div>
        <!-- Occupation -->
        <div class="col-xl-4 col-md-4 mb-2">
            <div class="card border-left-warning shadow h-100">
                <div class="card-body">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Occupation</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$occupation"; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Date -->
        <div class="col-xl-4 col-md-4 mb-2">
            <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Registration Date</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "$rdate"; ?></div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php require("footer.php")?>
<script>
    $(".sidebar li").removeClass("active");
    $(".sidebar li:eq(1)").addClass("active");
</script>