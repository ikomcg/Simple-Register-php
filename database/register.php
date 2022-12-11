<?php
include 'server.php';

  if(isset($_POST['submit']) ){

    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone_number'];
    $House = $_POST['House'];
    $city = $_POST['city'];
    $zCode = $_POST['zCode'];
    $place = $_POST['place'];
  
    if ($mysqli->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{
    $sqlreg = "INSERT INTO account (First_Name, Last_Name, Email, Phone,House_no, City, Zip_Code, Place) VALUES ('$FName','$LName','$Email','$Phone','$House','$city','$zCode','$place')";

    if($mysqli -> query($sqlreg)){
        $mysqli->affected_rows;
        echo'<script>alert("Register Success")</script>';
        echo'<script>window.location.href = "../index.php"</script>'; 
    }  
  }            
} 
?>