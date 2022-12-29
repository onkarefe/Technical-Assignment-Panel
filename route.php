<?php

$name = $_POST['username'];
$dispname = $_POST['displayname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$role = $_POST['roles'];
$able = $_POST['able'];

if($able == 1){
    $able = "Enable";
}
elseif($able ==0){
    $able = "Disable";
}

include_once('login.php');
$sorgu = $baglan->prepare("insert into users values(?,?,?,?,?,?,?)");
$ekle = $sorgu->execute(array(NULL, $name, $dispname, $phone, $email, $role, $able ));

header("Location:board.php");