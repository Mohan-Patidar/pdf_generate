<?php
if(isset($_POST['email'])!=""){ 
  $to = 'balmukund1998@gmail.com';
  $subject = 'Salary slip';
  $message = 'Hello Balmukund'; 
  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: Site <patidarmohan59@mail.com>\r\n"; 
$headers .= 'Content-type: "application/pdf"; charset="iso-8859-1"'; 
$headers .= 'Content-disposition: attachment; filename="slip.pdf"';
mail($to, $subject, $message, $headers);

  echo json_encode(array('status' => 'success'));
  unlink('slip.pdf');
} else {
  echo json_encode(array('status' => 'error'));
}