<?php
 $con=mysqli_connect("localhost","root","0000","github") or die ('db not connect');
 $id1=$_POST['id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
//  $gen=$_POST['gen'];
 $phone=$_POST['pno'];
 $addr=$_POST['address'];
 $query="update register set name='$name',email='$email',pno='$phone',address='$addr' where id=$id1";
 if($res=mysqli_query($con,$query))
 {
    echo"<script> alert('update successfullu');
    window.location.href='fetch.php';</script>";
 }
 else
 {
    echo"<script> alert('update not successfullu')</script>";
 }
 ?>
