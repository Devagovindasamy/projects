<?php
session_start();
include('pdocon.php');
 
 if(isset($_POST['submit']))
 {
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $password=$_POST['password'];
 $addr=$_POST['addr'];

  $query=" insert into pdoreg (name ,email,phone,password,address) values (:name ,:email,:phone,:password,:addr) ";
  $query_run=$con->prepare($query);

  $data=[
    ':name' => $name,
    ':email' => $email,
    ':phone' => $phone,
    ':password' => $password,
    ':addr' => $addr,
  ];
  $query_execute= $query_run->execute($data);
  if ($query_execute)
  {
    $_SESSION['message']="insert success";
    header('location:pdofetch.php');
    exit(0);
  }
  else{
    $_SESSION['message']=" not insert success";
    header('location:pdoreg.php');
    exit(0);
  }
  }
?>