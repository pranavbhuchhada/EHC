<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CBC - Reports</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/mycustom.css" rel="stylesheet">

</head>
<?php require("header.php")?>
<div class="container-fluid">
  <div class="card-body">
    <form  action="cbc.php"  method="post">
    <h1>COMPLETE BLOOD COUNT</h1>
              <div class="table-responsive">
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
                  <tbody>
                    <tr>
                      <td>Haemoglobin</td>
                      <td><input type="text" name="hg_test"></td>
                      <td>gm%</td>
                      <td>13.5-17.0 gm%</td>
                    </tr>
                    <tr>
                      <td>Total RBC</td>
                      <td><input type="text" name="rbc_test"></td>
                      <td>mill/cmm</td>
                      <td>4.6-6.2 mill/cmm</td>
                    </tr>
                    <tr>
                      <td>PCV</td>
                      <td><input type="text" name="pcv_test"></td>
                      <td>%</td>
                      <td>40-54%</td>
                    </tr>
                    <tr>
                      <td>MCV</td>
                      <td><input type="text" name="mcv_test"></td>
                      <td>fl</td>
                      <td>80-96 fl</td>
                    </tr>
                    <tr>
                      <td>MCH</td>
                      <td><input type="text" name="mch_test"></td>
                      <td>pg</td>
                      <td>27-31 pg</td>
                    </tr>
                    <tr>
                      <td>MCHC</td>
                      <td><input type="text" name="mchc_test"></td>
                      <td>%</td>
                      <td>32-36 %</td>
                    </tr>
                    <tr>
                      <td>RDW</td>
                      <td><input type="text" name="rdw_test"></td>
                      <td>%</td>
                      <td>10-15 %</td>
                    </tr>
                    <tr>
                      <td>Total WBC</td>
                      <td><input type="text" name="wbc_test"></td>
                      <td>/cmm</td>
                      <td>4000-10000</td>
                    </tr>
                      <tr>
                      <td>Platelet Count</td>
                      <td><input type="text" name="pc_test"></td>
                      <td>/cmm</td>
                      <td>1.5-4.0 Lac/cmm</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
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
                  <tfoot>
                      <tr>
                      <th>TEST</th>
                      <th>RESULT</th>
                      <th>UNIT</th>
                      <th>REFERENCE INTERVAL</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Neutrophils</td>
                      <td><input type="text" name="np_test"></td>
                      <td>%</td>
                      <td>55-70 %</td>
                    </tr>
                    <tr>
                      <td>Lymphocytes</td>
                      <td><input type="text" name="lc_test"></td>
                      <td>%</td>
                      <td>20-40 %</td>
                    </tr>
                    <tr>
                      <td>Eosinophils</td>
                      <td><input type="text" name="es_test"></td>
                      <td>%</td>
                      <td>01-06 %</td>
                    </tr>
                    <tr>
                      <td>Monocytes</td>
                      <td><input type="text" name="mc_test"></td>
                      <td>fl</td>
                      <td>02-08 %</td>
                    </tr>
                    <tr>
                      <td>Basophils</td>
                      <td><input type="text" name="bp_test"></td>
                      <td>pg</td>
                      <td>00-01 %</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Generate Report</button>
                  </div>
                </div>
          </div>
      </form>
    </div>
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
<?php require("footer.php")?>
<script>
    $(".sidebar li").removeClass("active");
    $(".sidebar li:eq(2)").addClass("active");
</script>
