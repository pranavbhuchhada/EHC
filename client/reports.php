<?php session_start(); ?>
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
<?php require("../config/connection.php")?>
<?php require("header.php")?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Reports</h1>
        <!-- <h1 class="h3 ml-auto text-gray-800">UID - 9385 8771 7682</h1> -->
    </div>
    <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Date</th>
              <th>Report Name</th>
              <th>Laboratory Name</th>
              <th>Suggested Dr. Name</th>
              <th>View</th>
            </tr>
          </thead>
          <tfoot>
              <tr>
              <th>Date</th>
              <th>Report Name</th>
              <th>Laboratory Name</th>
              <th>Suggested Dr. Name</th>
              <th>View</th>
            </tr>
          </tfoot>
          <tbody>
            <?php 
              $username = $_SESSION['username'];            
              $result = mysqli_query($conn,"SELECT * FROM `reports` WHERE `username` = '".$username."'");
              while ($row = mysqli_fetch_array($result)):
            ?>
            <tr>
              <td><?php echo $row[3]; ?></td>
              <td><?php echo $row[2]; ?></td>
              <td><?php echo $row[4]; ?></td>
              <td><?php echo $row[5]; ?></td>
              <td><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myReport" onclick="showReport('<?php echo $row[2] ?>','<?php echo $row[0] ?>');"><b>View</b></button></td>
            </tr>
              <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="modal" id="myReport" >
    <div class="modal-dialog" style="max-width: 60vw;overflow: auto;"> 
      <div class="modal-content" >
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Report</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <h4>BLOOD COUNTS & INIDICES</h4>
            <thead>
              <tr>
                <th>TEST</th>
                <th>RESULT</th>
                <th>UNIT</th>
                <th>REFERENCE INTERVAL</th>
              </tr>
            </thead>
            <tbody id="tb1">
              
            </tbody>
          </table>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <h4>DIFFERENTIAL LEUCOCYTES COUNT</h4>
            <thead>
              <tr>
                <th>TEST</th>
                <th>RESULT</th>
                <th>UNIT</th>
                <th>REFERENCE INTERVAL</th>
              </tr>
            </thead>
            <tbody id="tb2">
            </tbody>
          </table>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
<?php require("footer.php")?>
<script>
    $(".sidebar li").removeClass("active");
    $(".sidebar li:eq(3)").addClass("active");
    function showReport(rname,id) {
      var username = "<?php echo $username; ?>";
      $.ajax({
        url: "getReport.php" ,
        data: {"username":username,"rname":rname,'id':id},
        dataType: "json",
        success: function(result,status,xhr) {
          if (result != "no") {
            console.log(result);
            var t1 = "<tr><td>Haemoglobin</td><td>"+result.Haemoglobin+
            "</td><td>gm%</td><td>13.5-17.0 gm%</td></tr><tr><td>Total RBC</td><td>"+result.TotalRBC+
            "</td><td>mill/cmm</td><td>4.6-6.2 mill/cmm</td></tr><tr><td>PCV</td><td>"+result.PCV+
            "</td><td>%</td><td>40-54%</td></tr><tr><td>MCV</td><td>"+result.MCV+
            "</td><td>fl</td><td>80-96 fl</td></tr><tr><td>MCH</td><td>"+result.MCH+
            "</td><td>pg</td><td>27-31 pg</td></tr><tr><td>MCHC</td><td>"+result.MCHC+
            "</td><td>%</td><td>32-36 %</td></tr><tr><td>RDW</td><td>"+result.RDW+
            "</td><td>%</td><td>10-15 %</td></tr><tr><td>Total WBC</td><td>"+result.TotalWBC+
            "</td><td>/cmm</td><td>4000-10000</td></tr><tr><td>Platelet Count</td><td>"+result.PlateletCount+
            "</td><td>/cmm</td><td>1.5-4.0 Lac/cmm</td></tr>";
            document.getElementById('tb1').innerHTML = t1;
            var t2  = "<tr><td>Neutrophils</td><td>"+result.Neutrophils+
            "</td><td>%</td><td>55-70 %</td></tr><tr><td>Lymphocytes</td><td>"+result.Lymphocytes+
            "</td><td>%</td><td>20-40 %</td></tr><tr><td>Eosinophils</td><td>"+result.Eosinophils+
            "</td><td>%</td><td>01-06 %</td></tr><tr><td>Monocytes</td><td>"+result.Monocytes+
            "</td><td>fl</td><td>02-08 %</td></tr><tr><td>Basophils</td><td>"+result.Basophils+
            "</td><td>pg</td><td>00-01 %</td></tr>";
            document.getElementById('tb2').innerHTML = t2;
          }else{
            document.getElementById('tb1').innerHTML = "NO DATA";
            document.getElementById('tb2').innerHTML = "NO DATA";
          }
        }
      });
    }
</script>