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
        <h1 class="h3 mb-0 text-gray-800">Allergy List</h1>
    </div>
 <div class="card-body">
      <div class="table-responsive">
      <table id="myTable" class=" table order-list  table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Allergy Name</th>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" />
            </td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td><input type="text" name="allergyname" class="form-control" required/></td>
            <td><a class="deleteRow"></a>
            <input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>
        </tr>
    </tbody>
</table>
</div>
<button type="button" class="btn btn-success" onclick="allergy.php">Save</button>
  </div>
</div>
<?php require("footer.php")?>
<script type="text/javascript">
  $(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="allergyname' + counter + '"/></td>';
          
        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });
    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
});
function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();
}
function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>
<script>
    $(".sidebar li").removeClass("active");
    $(".sidebar li:eq(3)").addClass("active");
</script>