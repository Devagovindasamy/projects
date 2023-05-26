<html> 
<head> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style> 

.outer{  
margin:auto; 
height:300px; 
width:400px; 
border:2px solid black; 
position:relative;
} 
body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #f2f2f2;
  /* background-image: url(log3.jpg); */
  background: linear-gradient(-135deg, #f1ff34, #ff4141);
}
p{ 
margin-left:80px; 
} 
.in{ 
margin-left:80px; 
padding:10px 
} 
#bt{ 
margin-top:20px; 
position:absolute; 
left:150px; 
} 
#bt:hover{ 
background:green; 
font-size:13px; 
cursor:pointer; 
color:white; 
} 
</style> 
<script> 
function fa(){ 
if(a.value=="" || b.value==""){ 
f() 
document.getElementById("a").style.border="3px solid red" 
document.getElementById("b").style.border="3px solid red" 
bt.value="Enter the value" 
} 
else{ 
document.getElementById("a").style.border="3px solid green" 
document.getElementById("b").style.border="3px solid green" 
bt.value="login" 
bt.style.left="120px"; 
} 
} 
flag=1 
function f(){ 
if(flag==1){ 
bt.style.left="210px" 
flag=2 
} 
else if(flag==2){ 
bt.style.left="80px" 
flag=1 
} 
} 
</script> 
</head> 

<body>
<form action="log2.php" method="post">
<div class="outer"> 
<h1 style="text-align:center">Log in</h1> 
<p>Enter username</p> 
<input class="in" type="text" name="name" placeholder="Enter username" id="a"/> 
<p>Enter password</p> 
<input class="in" type="password" name="pwd" placeholder="Enter password" id="b"/> 
<br> 
<button type="submit" onmouseenter="fa()"  id="bt" class="btn btn-success"> login</button> 

</div> 
</form>
</body> 
</html>