<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body width=100%>
<?php
require_once('dbconnection.php');
$name='';
$email='';
$password='';
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$output=false;
if(empty($name)||empty($email)||empty($password))
{$output=true;}
if(!empty($name)&&!empty($email)&&!empty($password)){
$dbc=mysqli_connect(DB_ADDR,DB_USER,DB_PASS,DB_NAME);
$query="INSERT INTO resumecandidates (name,email,password)".
"VALUES ('$name','$email',SHA('$password'))";
$result=mysqli_query($dbc,$query)
or die('Error querying database.');
mysqli_close($dbc);
echo 'Thanks for adding your details.<br/>';
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
header('Location: ' . $home_url);}}
else{
$output=true;
}
if($output){
?>

<div id="title" >
<h1  id="titlename">Resume Builder</h1>
</div>
<div id="background">
<form  name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  onsubmit="return validateForm()">
<label for="name"> NAME:</label><br>
<input   type="text" name="name" value="<?php if(!empty($name)) echo $name; ?>"<br><div id="name" style="color:#ff0000"></div>


<label for="email">EMAIL:</label><br>
<input   type="text" name="email" value="<?php if(!empty($email)) echo $email; ?>"<br><div id="email" style="color:#ff0000"></div>

<label for="password">PASS WORD:</label><br>
<input   type="password" name="password"><br><div id="pass" style="color:#ff0000"></div>

<input id="submit" type="submit" name="submit" value="signup">
</form>
</div>

<div id="footer"  >
<p  style="text-align:center ;padding-top:40px;color:#ffffff">&#169 kiranpuppala</p>
</div>
<?php
}
?>
<script>
function validateForm() {
var x = document.forms["myform"]["name"].value;
var y= document.forms["myform"]["email"].value;
var z=document.forms["myform"]["password"].value;
var xdiv,ydiv,zdiv;
if (x.length<3)
{ xdiv= document.getElementById("name");
xdiv.innerHTML="username should atleast contain 3 characters";
return false;
}
else if(x.length>30) {
xdiv.innerHTML="username should not exceed 30 characters";
return false;
}
if (y.length<10)
{ydiv = document.getElementById("email");
ydiv.innerHTML="email not valid";
return false;
}
else if(y.length>30) {
ydiv.innerHTML="email not valid";
return false;
}
if (z.length<3)
{zdiv = document.getElementById("pass");
zdiv.innerHTML="password not strong and should  atleast 8 characters long";
return false;
}
else if(z.length>30) {
zdiv.innerHTML="password should not exceed 15 characters";
return false;
}


}
</script>
</body>
</html>