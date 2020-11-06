<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
require_once 'autoload.inc.php';

use Dompdf\Dompdf;


$abc =  '<style>
body {
  font-family: system-ui;
}
table {
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #000;
text-align: left;
padding: 5px 8px;
}

.text-center {
    text-align: center;
}
.text-right {
  text-align: right;
}
.net-salary {
    font-size: 18px;
    font-weight: 700;
}
.container {
  max-width: 700px;
  width: 100%;
  margin: 0 auto;
  
}
.d-flex {
    display: inline-block;
    width:100%;
}
.col-6 {
  width:50%;
  float:left;
  
}
.col-6::after{
  content:"";
clear:both;
}


.mt-0 {
  margin-top: 0;
}
.font-18 {
  font-size: 18px;
}
// .border-bottom {
//   display: inline-block;
//   border-bottom: 1px dashed;
//   min-width: 170px;
// }
.mb--10 {
  margin-bottom: -10px;
}
.mt-20 {
  margin-top: 20px;
}
.mb-30 {
  margin-bottom: 30px;
}
</style>  
<div class="container">
  <div class="text-center mb-30">  
      <h1 class="mb--10 mt-20">Nextige Soft</h1>
      <p>Nextige Soft,Petlawad</p>
  </div>
  <p> <b class="font-18">Employee Name: </b>
  <span class="border-bottom"> '.$_POST["name"].'</span> </p>
  <p> <b class="font-18">Designation: </b>
    <span class="border-bottom">'.$_POST["designation"].'</span>
  </p>
  <p> <b class="font-18"> Month&Year: </b>
    <span class="border-bottom"> '.$_POST["month_year"].'</span>
  </p>
</div>
<d iv class="container">
<table class="table table-bordered" border="1" style="border-collapse: collapse;">
<thead>
<tr>
  <th scope="col" class="font-18">Earnings</th>
  <th scope="col" class="font-18"></th>
  <th scope="col" class="font-18">Deduction</th>
 <th scope="col" class="font-18"></th>
</tr>
</thead>
<tbody>
<tr>
  <td>Basic&DA</td>
  <td class="text-right">'.$_POST["basic_da"].'</td>
  <td>Provident fund</td>
  <td class="text-right">'.$_POST["provident_fund"].'</td>
</tr>
<tr>
  <td>HRA</td>
  <td class="text-right">'.$_POST["hra"].' </td>
  <td>E.S.I</td>
 <td class="text-right">'.$_POST["esi"].'</td>
</tr>
<tr>
  <td>Conveyance</td>
  <td class="text-right">'.$_POST["conveyance"].'</td>
  <td>loan</td>
 <td class="text-right">'.$_POST["loan"].'</td>
</tr>
<tr>
  <td></td>
  <td class="text-right"></td>
  <td>Profession Tax</td>
 <td class="text-right">'.$_POST["p_tax"].'</td>
</tr>
<tr>
  <td></td>
  <td class="text-right"></td>
  <td>TSD/IT</td>
 <td class="text-right">'.$_POST["tsd"].' </td>
</tr>
<tr>
  <td >Total Addition</td>
  <td class="text-right"> <span>'.$_POST["total_add"].'<span></td>
  <td>Total Deduction</td>
 <td class="text-right">'.$_POST["total_deduction"].'</td>
</tr>
<tr>
  <td></td>
  <td class="text-right"></td>
  <td class="net-salary">Net Salary</td>
 <td class="net-salary text-right">'.$_POST["net_salary"].'</td>
</tr>
</tbody>
</table>
</div>
<div class="container">
  <p>Name of Bank:
    <span class="border-bottom"> '.$_POST["bname"].' </span>
  </p>
  <p>Date
  <span class="border-bottom">'.$_POST["date"].'</span>
  </p>
  <div class="d-flex">
      <div class="col-6">
        <p class="mt-0">Signature of Employee 
          <span class="border-bottom">  </span>
        </p>
      </div>
      <div class="col-6">
          <p class="mt-0">Signature of Director
            <span class="border-bottom">  </span>
          </p>
      </div>
  </div>
</div>
';?>
<div class="container">
<?php echo $abc; ?>
</div>
<?php


$html = $abc;
$file_name = 'slip.pdf';
$codeHtml = utf8_encode($html);

$dompdf = new Dompdf();

$dompdf->load_html($codeHtml);

$dompdf->setPaper('A4','landscape');
$dompdf->set_option('defaultFont','Courier');

$dompdf->render();
$file = $dompdf->output();
file_put_contents($file_name, $file);


?>
<div class="container">
  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Send Pdf
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Send To</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="javascript:void(0)" method="Post" >
        <label>Enter Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" id="send" class="open" value="Send" />
			  </form>
        </div>
      </div>
    </div>
  </div>
  
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(function () {    
  $("#send").on('click',function (e) {
    e.preventDefault();
    $email =$('#email').val();
    $.ajax({
      type: "POST", 
      url: "mail_data.php",
      data: {'email':$email},
      success:function(res){
        alert (res);
      }
    });
    });
  }) 


</script>