<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>URINE - Reports</title>

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
    <form  action="urine.php"  method="post">
    <h1>URINALYSIS REPORT</h1>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <h4>URINALYSIS,MICROSCOPIC IF INDICATED</h4>
                  <thead>
                    <tr>
                      <th>TEST</th>
                      <th>NORMAL</th>
                      <th>ABNORMAL</th>
                      <th>FLAG</th>
                      <th>REFERENCE INTERVAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Color</td>
                      <td><input type="text" name="co_n_test"></td>
                      <td><input type="text" name="co_abn_test"></td>
                      <td><input type="text" name="co_fg_test"></td>
                      <td>YELLOW</td>
                    </tr>
                    <tr>
                      <td>Apperance</td>
                      <td><input type="text" name="ap_n_test"></td>
                      <td><input type="text" name="ap_abn_test"></td>
                      <td><input type="text" name="ap_fg_test"></td>
                      <td>CLEAR</td>
                    </tr>
                    <tr>
                      <td>Glucose</td>
                      <td><input type="text" name="gl_n_test"></td>
                      <td><input type="text" name="gl_abn_test"></td>
                      <td><input type="text" name="gl_fg_test"></td>
                      <td>NEGATIVE</td>
                    </tr>
                    <tr>
                      <td>Bilirubin</td>
                      <td><input type="text" name="br_n_test"></td>
                      <td><input type="text" name="br_abn_test"></td>
                      <td><input type="text" name="br_fg_test"></td>
                      <td>NEGATIVE</td>
                    </tr>
                    <tr>
                      <td>Ketone</td>
                      <td><input type="text" name="kt_n_test"></td>
                      <td><input type="text" name="kt_abn_test"></td>
                      <td><input type="text" name="kt_fg_test"></td>
                      <td>NEGATIVE</td>
                    </tr>
                    <tr>
                      <td>Spec Grav </td>
                      <td><input type="text" name="sg_n_test"></td>
                      <td><input type="text" name="sg_abn_test"></td>
                      <td><input type="text" name="sg_fg_test"></td>
                      <td>1.003-1.035</td>
                    </tr>
                    <tr>
                      <td>Blood</td>
                      <td><input type="text" name="bd_n_test"></td>
                      <td><input type="text" name="bd_abn_test"></td>
                      <td><input type="text" name="bd_fg_test"></td>
                      <td>NEGATIVE</td>
                    </tr>
                    <tr>
                      <td>PH</td>
                      <td><input type="text" name="ph_n_test"></td>
                      <td><input type="text" name="ph_abn_test"></td>
                      <td><input type="text" name="ph_fg_test"></td>
                      <td>5.0-8.0</td>
                    </tr>
                    <tr>
                      <td>Protein</td>
                      <td><input type="text" name="pr_n_test"></td>
                      <td><input type="text" name="pr_abn_test"></td>
                      <td><input type="text" name="pr_fg_test"></td>
                      <td>NEGATIVE</td>
                    </tr>
                    <tr>
                      <td>Urobilinogen</td>
                      <td><input type="text" name="ub_n_test"></td>
                      <td><input type="text" name="ub_abn_test"></td>
                      <td><input type="text" name="ub_fg_test"></td>
                      <td>0.1-1.0 mg/dl</td>
                    </tr>
                    <tr>
                      <td>Nitrite</td>
                      <td><input type="text" name="nt_n_test"></td>
                      <td><input type="text" name="nt_abn_test"></td>
                      <td><input type="text" name="nt_fg_test"></td>
                      <td>NEGATIVE</td>
                    </tr>
                    <tr>
                      <td>Leuk Esterase</td>
                      <td><input type="text" name="le_n_test"></td>
                      <td><input type="text" name="le_abn_test"></td>
                      <td><input type="text" name="le_fg_test"></td>
                      <td>NEGATIVE</td>
                    </tr>
                    <tr>
                      <td>Microscopic Indicated ?</td>
                      <td><input type="text" name="mi_n_test"></td>
                      <td><input type="text" name="mi_abn_test"></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <h4>URINE MICROSCOPIC</h4>
                  <thead>
                    <tr>
                      <th>TEST</th>
                      <th>NORMAL</th>
                      <th>ABNORMAL</th>
                      <th>FLAG</th>
                      <th>REFERENCE INTERVAL</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>TEST</th>
                      <th>NORMAL</th>
                      <th>ABNORMAL</th>
                      <th>FLAG</th>
                      <th>REFERENCE INTERVAL</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>RBC</td>
                      <td><input type="text" name="rbc_n_test"></td>
                      <td><input type="text" name="rbc_abn_test"></td>
                      <td><input type="text" name="rbc_fg_test"></td>
                      <td>NONE SEEN/hpf</td>
                    </tr>
                    <tr>
                      <td>WBC</td>
                      <td><input type="text" name="wbc_n_test"></td>
                      <td><input type="text" name="wbc_abn_test"></td>
                      <td><input type="text" name="wbc_fg_test"></td>
                      <td>NONE SEEN/hpf</td>
                    </tr>
                    <tr>
                      <td>Bacteria</td>
                      <td><input type="text" name="bt_n_test"></td>
                      <td><input type="text" name="bt_abn_test"></td>
                      <td><input type="text" name="bt_fg_test"></td>
                      <td>NONE SEEN/hpf</td>
                    </tr>
                  </tbody>
                </table>
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
                      <td>Urinalysis</td>
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
