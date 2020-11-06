<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary slip</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        
        input {
            display: block;
            width: 100%;
            height: 28px;
            border-radius: 5px;
            margin-bottom: 7px;
            padding: 0 10px;
            border: 1px solid #000;
            font-size: 14px;
        }
        input:focus {
            outline: none;
            border: 1px solid #009688;
        }
        label {
            margin: 0 !important;
            font-size: 12px;
        }
        .heading {
            font-size: 25px;
            padding: 10px 0;
        }
        body {
            background-color: #1a1041;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="">
            <h3 class="text-center heading">Salary Slip</h3>
            <form method="Post" action="dompdf/pdf.php">
                <div class="">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Employee Name</label>
                            <input type="text" name="name" placeholder="Employee Name">
                        </div>
                        <div class="col-md-4">
                            <label>Designation</label>
                            <input type="text" name="designation" placeholder="Designation">
                        </div>
                        <div class="col-md-4">
                            <label>Month&Year</label>
                            <input type="text" name="month_year" placeholder="Month & Year">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name of Bank</label>
                            <input type="taxt" name="bname" placeholder="Name of Bank">
                        </div>
                        <div class="col-md-6">
                            <label>Date</label>
                            <input type="text" name="date" placeholder="Date">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <label>Basic&DA</label>
                                <input type="number" name="basic_da" id="basic_da" placeholder="Basic & DA">
                            </div>
                            <div class="col-12">
                                <label>HRA</label>
                                <input type="number" name="hra" id="hra" class="add" placeholder="HRA">
                            </div>
                            <div class="col-12">
                                <label>Conveyance</label>
                                <input type="number" name="conveyance" id="conveyance" class="add" placeholder="Conveyance">
                            </div>
                            <div class="col-12">
                                <label>Total Addition</label>
                                <input type="number" name="total_add" id="total_add" class="net" placeholder="Total Addition">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <label>Provident fund</label>
                                <input type="number" name="provident_fund" id="provident_fund" class="add" placeholder="Provident fund">
                            </div>
                            <div class="col-12">
                                <label>E.S.I</label>
                                <input type="number" name="esi" id="esi" class="add" placeholder="E.S.I">
                            </div>
                            <div class="col-12">
                                <label>loan</label>
                                <input type="number" name="loan" id="loan" class="add" placeholder="loan">
                            </div>
                            <div class="col-12">
                                <label>Profession Tax</label>
                                <input type="number" name="p_tax" id="p_tax" class="add" placeholder="Profession Tax">
                            </div>
                            <div class="col-12">
                                <label>TSD/IT</label>
                                <input type="number" name="tsd" id="tsd" class="add" placeholder="TSD / IT">
                            </div>
                            <div class="col-12">
                                <label>Total Deduction</label>
                                <input type="number" name="total_deduction" id="total_deduction" class="net" placeholder="Total Deduction">
                            </div>
                            <div class="col-12">
                                <label>Net Salary</label>
                                <input type="number" name="net_salary" id="net_salary" placeholder="Net Salary">
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="text-center">
                    <button na`me="submit" class="btn btn-primary " value="submit">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
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
<?php
$message=""?>