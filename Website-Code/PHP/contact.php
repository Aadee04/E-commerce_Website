<?php

$reg_name = $_POST['name'];
$reg_phone = $_POST['phone'];
$reg_email = $_POST['email'];
$reg_text = $_POST['message'];

$conn = new mysqli('localhost','root','Josh@2005','test');
$stmt = $conn->prepare("insert into reg_table(reg_name,reg_phone,reg_email,reg_text)values(?,?,?,?)");
$stmt->bind_param("siss",$reg_name,$reg_phone,$reg_email,$reg_text);
$stmt->execute();


?>



