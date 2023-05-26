<?php 
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("localhost","root","0000","github") or die("db not connected");
$que="select * from register where name='$name'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res))
{
   if($row['password']==$pwd) 
     { 
        echo"<script> alert('login success');
        window.location.href='login.php';</script>"; 
        
     }
    else
    {
        echo"<script>alert('login unsuccess')</script>;";
    }
}
else
{
    echo"<script>alert('invalid username')
   </script>;";
}
?>