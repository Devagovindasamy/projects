<?php
$con=mysqli_connect("localhost","root","0000","github") or die ('db not connect');
$id=$_GET['id'];
$query="delete from register where id=$id";
if($res=mysqli_query($con,$query))
{
    echo"<script>alert('deleted successfully');
    window.location.href='fetch.php';</script>";
}
else
{
    echo"<script>alert(' not deleted successfully')</script>"; 
}
?>
