<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E - healthcard - Prescription</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/mycustom.css" rel="stylesheet">

</head>
<?php require("../config/connection.php")?>
<?php require("header.php")?>
<div class="container-fluid">
    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-1">
      <h1 class="h3 mb-0 text-gray-800">Prescriptions</h1>
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newPres"><b>Add New</b></button>
      
  </div>
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Date</th>
              <th>Prescribed by</th>
              <th>Major Issue</th>
              <th>View</th>
            </tr>
          </thead>
          <tfoot>
              <th>Date</th>
              <th>Prescribed by</th>
              <th>Major Issue</th>
              <th>View</th>
            </tr>
            </tr>
          </tfoot>
          <tbody>
              <td></td>
              <td></td>
              <td></td>
              <td><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myPres" onclick="showReport();"><b>View</b></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="modal" id="myPres" >
    <div class="modal-dialog" style="max-width: 60vw;overflow: auto;"> 
      <div class="modal-content" >
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal" id="newPres" >
    <div class="modal-dialog" style="max-width: 80vw;overflow: auto;"> 
      <div class="modal-content" >
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add new Prescriptions</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="addPris.php" method="POST">
          <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Symptoms</h6>
                    </div>
                    <div class="card-body dash-card">
                        <textarea name="sym" style="width: 100%;height: 100%;"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Diesease Diagnosis</h6>
                    </div>
                    <div class="card-body dash-card">
                        <textarea name="dds" style="width: 100%;height: 100%;"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Medication</h6>
                </div>
                <div class="card-body dash-card">
                  <div class="table-responsive">
                    <table id="medTable" class=" table order-list  table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Medicine Name</th>
                          <th>Duration</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td class="p-0" colspan="5">
                            <button type="button" class="btn btn-info btn-block" id="addMed">Add</button>
                          </td>
                        </tr>
                      </tfoot>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Prescribe Report</h6>
                  </div>
                  <div class="card-body dash-card">
                    <div class="table-responsive">
                    <table id="repTable" class=" table order-list  table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Report Type</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td class="p-0" colspan="5">
                            <button type="button" class="btn btn-info btn-block" id="addRep">Add</button>
                          </td>
                        </tr>
                      </tfoot>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Surgery Required</h6>
                  </div>
                  <div class="card-body dash-card">
                     <div class="table-responsive">
                    <table id="srgTable" class=" table order-list  table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Surgery Required</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td class="p-0" colspan="5">
                            <button type="button" class="btn btn-info btn-block" id="addsrg">Add</button>
                          </td>
                        </tr>
                      </tfoot>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Allergy Observed</h6>
                  </div>
                  <div class="card-body dash-card">
                    <div class="table-responsive">
                    <table id="algTable" class=" table order-list  table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Allergy Observed</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td class="p-0" colspan="5">
                            <button type="button" class="btn btn-info btn-block" id="addalg">Add</button>
                          </td>
                        </tr>
                      </tfoot>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>              
          </div>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require("footer.php")?>
<script>
  $(".sidebar li").removeClass("active");
  $(".sidebar li:eq(2)").addClass("active");
  $(document).ready(function () {
    var medc = 0;
    $("#addMed").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="medname' + medc + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="duration' + medc + '"/></td>';   
        cols += '<td><button class="ibtnDel btn btn-info btn-danger">Delete</button></td>';
        newRow.append(cols);
        $("#medTable").append(newRow);
        medc++;
    });
    var repc = 0;
    $("#addRep").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="repname' + repc + '"/></td>';
        cols += '<td><button class="ibtnDel btn btn-info btn-danger">Delete</button></td>';
        newRow.append(cols);
        $("#repTable").append(newRow);
        counter++;
    });
     var srgc = 0;
    $("#addsrg").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="srgname' + srgc + '"/></td>';
        cols += '<td><button class="ibtnDel btn btn-info btn-danger">Delete</button></td>';
        newRow.append(cols);
        $("#srgTable").append(newRow);
        counter++;
    });
     var argc = 0;
    $("#addalg").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="srgname' + argc + '"/></td>';
        cols += '<td><button class="ibtnDel btn btn-info btn-danger">Delete</button></td>';
        newRow.append(cols);
        $("#algTable").append(newRow);
        counter++;
    });
    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
  });
</script>