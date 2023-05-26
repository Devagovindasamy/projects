<?php
$name=$_POST['name'];
$email=$_POST['email'];
$gen=$_POST['gen'];
$phone=$_POST['phone'];
$pass=$_POST['password'];
$addr=$_POST['addr'];
$myfile=$_FILES['myfile']['name'];
$tmpfile=$_FILES['myfile']['tmp_name'];
$fpath="files/".$myfile;
$con=mysqli_connect("localhost","root","0000","github") or die ('db not connect');

//file insert
if(move_uploaded_file($tmpfile,$fpath))
{

	echo"<script>alert('File Uploaded Success');
	</script>";
}
else{
    echo "File Error";
}
$tdate=date('d/M/y');

$query="insert into register values(null,'$name','$email','$gen','$phone','$addr','$tdate','$fpath','$pass')";
//echo $name.$email.$gen.$phone.$addr;
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('data saved');
	window.location.href='fetch.php';</script>";
	
}
else
{
	echo"<script>alert('data not saved');
	</script>";
}

?>