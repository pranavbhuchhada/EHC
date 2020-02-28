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
        <h1 class="h3 mb-0 text-gray-800">Reports</h1>
        <h1 class="h3 ml-auto text-gray-800">UID - 9385 8771 7682</h1>
      </div>


    <form class="form-horizontal" action="upload.php" enctype="multipart/form-data" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="report_name"><b>Report Name: </b></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="report_name" placeholder="Enter Report name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lab_name"><b>Laboratory Name :</b></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="lab_name" placeholder="Enter Laboratory Name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="dr_name"><b>Suggested Dr.Name:</b></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="dr_name" placeholder="Enter Suggested Dr. Name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="fileToUpload"><b>Upload:</b></label>
          <div class="col-sm-10">
            <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" placeholder="upload file">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success"><b>ADD</b></button>
          </div>
        </div>
      </form>

        </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Reports</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Report Name</th>
                      <th>Laboratory Name</th>
                      <th>Suggested Dr. Name</th>
                      <th>Upload</th>
                    </tr>
                  </thead>
                  <tfoot>
                      <tr>
                      <th>Date</th>
                      <th>Report Name</th>
                      <th>Laboratory Name</th>
                      <th>Suggested Dr. Name</th>
                      <th>Upload</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>2/24/2020</td>
                      <td>CBC</td>
                      <td>Devasya laboratory</td>
                      <td>Balchandani</td>
                      <td></td>
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
    $(".sidebar li:eq(3)").addClass("active");
</script>
