<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary slip</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<form method="Post" action="dompdf/pdf.php">

    <label>Employee Name</label>
    <input type="text" name="name" ></br>
    <label>Designation</label>
    <input type="text" name="designation"></br>
    <label>Month&Year</label>
    <input type="text" name="month_year"></br>
    <label>Name of Bank</label>
    <input type="taxt" name="bname"></br>
    <label>Date</label>
    <input type="text" name="date"></br>
    <label>Basic&DA</label>
    <input type="number" name="basic_da" id="basic_da"   ></br>
    <label>HRA</label>
    <input type="number" name="hra" id="hra" class="add" ></br>
    <label>Conveyance</label>
    <input type="number" name="conveyance" id="conveyance" class="add" ></br>
    <label>Total Addition</label>
    <input type="number" name="total_add" id="total_add" class="net"></br>
    <label>Provident fund</label>
    <input type="number" name="provident_fund" id="provident_fund" class="add"></br>
    <label>E.S.I</label>
    <input type="number" name="esi" id="esi" class="add"></br>
    <label>loan</label>
    <input type="number" name="loan" id="loan" class="add"></br>
    <label>Profession Tax</label>
    <input type="number" name="p_tax" id="p_tax" class="add"></br>
    <label>TSD/IT</label>
    <input type="number" name="tsd" id="tsd" class="add"></br>
    <label>Total Deduction</label>
    <input type="number" name="total_deduction" id="total_deduction" class="net"></br>
    <label>Net Salary</label>
    <input type="number" name="net_salary" id="net_salary"></br>
    <button name="submit" value="submit">Submit</button>
</form>
<script>
$(document).ready(function(){
   
    
    $('.add').keyup(function(){
    var a = parseInt($("#basic_da").val());
    var b =  parseInt($("#hra").val());
    var c =  parseInt($("#conveyance").val());
    var d = parseInt($("#provident_fund").val());
    var e =  parseInt($("#esi").val());
    var f =  parseInt($("#loan").val());
    var g =  parseInt($("#p_tax").val()); 
    var h =  parseInt($("#tsd").val());  
    
    var sum = a + b+c;
    var sub = d + e + f + g + h;
    $("#total_add").val(sum);
    $("#total_deduction").val(sub);
        var m =parseInt($('#total_add').val());
        
        var n =parseInt($('#total_deduction').val());
        var sub = m - n ;
        $("#net_salary").val(sub);
  });
 
})

</script>