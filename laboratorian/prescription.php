<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E - healthcard - Reports</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/mycustom.css" rel="stylesheet">

</head>
<?php require("header.php")?>
<div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Prescription</h1>
        <h1 class="h3 ml-auto text-gray-800">UID - 9385 8771 7682</h1>
      </div>
        </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Prescription</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
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

        </div>
<?php require("footer.php")?>
<script>
    $(".sidebar li").removeClass("active");
    $(".sidebar li:eq(2)").addClass("active");
</script>
