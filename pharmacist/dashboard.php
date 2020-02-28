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

<?php require("header.php")?>
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
                <h6 class="m-0 font-weight-bold text-primary">Client Name</h6>
            </div>
            <div class="card-body row">
                <div class="text-center col-lg-6">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="https://media.istockphoto.com/vectors/user-icon-white-silhouette-on-blue-round-background-vector-id1003393752?k=6&m=1003393752&s=170667a&w=0&h=tHxs8MigTmRinLWCbU75QmSdVEZg1-2wZeH4tiPP-LQ=" alt="Client Image">
            </div>
                <div class="col-lg-6">
                <p>DOB : 11 - 09 - 1999 </p>
                <p>Age : 26 </p>
                <p>Sex : Male </p>
                <p>Blood Group : A+ </p>
                <p>Contact : +91 9876543210 </p>
                <p>Emergency Contact : +91 9876543210 </p>
                <p>Address :  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
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
                    <h6 class="m-0 font-weight-bold text-primary">Pending Prescription</h6>
                </div>
                <div class="card-body dash-card">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Family History -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Past medical History</h6>
            </div>
            <div class="card-body dash-card">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <!-- Master Medication List History -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Master Medication List</h6>
            </div>
            <div class="card-body dash-card">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
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
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est vitae felis tincidunt pellentesque vitae sed diam. Donec auctor ante nec nibh gravida vulputate aliquam ac quam.</p>
            </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
    <!-- End of Main Content -->


<?php require("footer.php")?>