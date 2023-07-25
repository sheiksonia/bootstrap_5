<?php
  $hostName="localhost";
  $userName="root";
  $passWord="";
  $dbName="batch1";

  if (isset($_POST["save"])) {

    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $massage=$_POST["massage"];



    

    $con = new mysqli($hostName,$userName,$passWord,$dbName);
$qr = $con->query("INSERT INTO  employee(name,email,subject,massage)VALUES('$name','$email','$subject','$massage')");
if ($qr) {
    echo " Data saved ";
  }else{
    echo " error ";
  }
  }



?>