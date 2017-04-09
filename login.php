 <?php
require_once('dbconnection.php');
session_start();
$userid='';
if(!isset($_SESSION['userid'])){
if(isset($_POST['submit'])){
$dbc=mysqli_connect(DB_ADDR,DB_USER,DB_PASS,DB_NAME);
$email=     $_POST['email'];                                                    //mysqli_real_escape_string($dbc,trim($_POST['email']));
$password=  $_POST['password'];                                                //mysqli_real_escape_string($dbc,trim($_POST['password']));
if(!empty($email)&&!empty($password)){
$query="SELECT id,name FROM resumecandidates WHERE email='$email' AND password=SHA('$password') ";
$data=mysqli_query($dbc,$query);
if(mysqli_num_rows($data)==1){
$row=mysqli_fetch_array($data);
$_SESSION['userid']=$row['id'];
$userid=$_SESSION['userid'];
$_SESSION['username']=$row['name'];
setcookie('userid',$row['id'],time() + (60 * 60 * 24 * 30));
setcookie('username',$row['name'],time() + (60 * 60 * 24 * 30));
mysqli_close($dbc);
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php?id='. $userid.' ';
header('Location: ' . $home_url);
}
else{
echo'<html>';
echo '<body width=100%>';
echo '<link rel="stylesheet" type="text/css" href="login.css">';
echo '<div id="wrongmail"><p style="color:#ff0000">Email or Password are not valid</p></div>';
echo '</body></html>';
}
}
}
?>
<html>
<body width=100%>
<link rel="stylesheet" type="text/css" href="login.css">
<div  id="title" >
<h1 id="titlename" >Resume Builder</h1>
</div>
<div id="background">
<form  name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  >
<label for="email" id="un">&nbspEMAIL</label><br>
&nbsp<input class="un" name="email" type="text" value="<?php if(!empty($email)) echo $email; ?>"><BR/>
<label for="password" id="pw">&nbspPASSWORD</label><br>
&nbsp<input class="pw" name="password" type="password" size="20"><br>

<input class="submit" type="submit" value="login" name="submit" size="20">
<p class="g">Not a member yet?click here to <a href="signup1.php">signup</a></p>
</form>
</div>
<div id="footer">
<p  style="text-align:center ;padding-top:40px;color:#ffffff">&#169 kiranpuppala</p>
</div>

</html>
</body>
<?php
}
?>