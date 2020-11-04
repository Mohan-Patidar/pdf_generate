<?php
use Dompdf\Dompdf;

require 'autoload.inc.php';
$abc =  '<style>
table {
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>    <h1>Nextige Soft</h1>
<p>Nextige Soft,Petlawad</p>
<p>Employee Name:
'.$_POST["name"].'</p>
<p>Designation:
'.$_POST["designation"].'</p>
<p>Month&Year:
'.$_POST["month_year"].'</p>


<table class="table table-bordered" border="1" style="border-collapse: collapse;">
<thead>
<tr>
  <th scope="col">Earnings</th>
  <th scope="col"></th>
  <th scope="col">Deduction</th>
 <th scope="col"></th>
</tr>
</thead>
<tbody>
<tr>
  <td>Basic&DA</td>
  <td>'.$_POST["basic_da"].'</td>
  <td>Provident fund</td>
 <td>'.$_POST["provident_fund"].'</td>
</tr>
<tr>
  <td>HRA</td>
  <td>'.$_POST["hra"].'</td>
  <td>E.S.I</td>
 <td>'.$_POST["esi"].'</td>
</tr>
<tr>
  <td>Conveyance</td>
  <td>'.$_POST["conveyance"].'</td>
  <td>loan</td>
 <td>'.$_POST["loan"].'</td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td>Profession Tax</td>
 <td>'.$_POST["p_tax"].'</td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td>TSD/IT</td>
 <td>'.$_POST["tsd"].'</td>
</tr>
<tr>
  <td >Total Addition</td>
  <td>'.$_POST["total_add"].'</td>
  <td>Total Deduction</td>
 <td>'.$_POST["total_deduction"].'</td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td>Net Salary</td>
 <td>'.$_POST["net_salary"].'</td>
</tr>
</tbody>
</table>
<p>Name of Bank:
'.$_POST["bname"].'</p>
<p>Date
'.$_POST["date"].'</p>
<p>Signature of Employee </p>
<p>Signature of Director</p>';
$html = $abc;

$codeHtml = utf8_encode($html);

$dompdf = new Dompdf();

$dompdf->load_html($codeHtml);

$dompdf->setPaper('A4','landscape');
$dompdf->set_option('defaultFont','Courier');

$dompdf->render();

$dompdf->stream('invoice.pdf');

