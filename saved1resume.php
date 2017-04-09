<?php
require_once('dbconnection.php');
$userid=$_COOKIE['userid'];
$dbc=mysqli_connect(DB_ADDR,DB_USER,DB_PASS,DB_NAME);
$query="SELECT * FROM resume1content WHERE userid=$userid  ";
$data=mysqli_query($dbc,$query)
or die('Error querying database.');

while($row = mysqli_fetch_array($data)){

$name=$row['name'];


$email=$row['email'];
$number=$row['number'];
$obj=$row['obj'];
$mdegc=$row['mdegc'];
$mbranch=$row['mbranch'];
$myear=$row['myear'];
$muniv=$row['muniv'];
$maggr=$row['maggr'];
$bachdegco=$row['bachdegco'];
$bbranch=$row['bbranch'];
$byear=$row['byear'];
$buniv=$row['buniv'];
$baggr=$row['baggr'];
$iod=$row['iod'];
$iodcoll=$row['iodcoll'];
$iodboard=$row['iodboard'];
$iodbranch=$row['iodbranch'];
$iodyear=$row['iodyear'];
$iodaggr=$row['iodaggr'];
$ssc=$row['ssc'];
$syear=$row['syear'];
$sboard=$row['sboard'];
$saggr=$row['saggr'];
$projecttitle=$row['projecttitle'];
$projectduration=$row['projectduration'];
$projectdescr=$row['projectdescr'];
$training=$row['training'];
$proglang=$row['proglang'];
$scripting=$row['scripting'];
$dbms=$row['dbms'];
$os=$row['os'];
$aa=$row['aa'];
$eca=$row['eca'];
$aof=$row['aof'];
$namessc=$row['namessc'];
$fname=$row['fname'];
$dob=$row['dob'];
$paddr=$row['paddr'];
$villnam=$row['villnam'];
$decl=$row['decl'];
}
echo '<html>';
echo '<body >';
echo '<link rel="stylesheet" type="text/css" href="pagelay.css">';
echo '<div >';
echo '<table>';//50
echo '<tr><td class="ad">'.$name.',</td></tr>';
echo '<tr><td  class="ad" colspan="5"  >S/O '.$fname.',</td><td class="ad"  
style="text-align:right" ><b>Mobile:</b>'.$number.'</td></tr>';
echo '<tr><td class="ad" colspan="5"  >'.$villnam.'.</td><td class="ad"  
style="text-align:right"><b>Email:</b>'.$email.'</td></tr>';
echo '</table>';
echo '<hr>';
echo '<table >';
echo '<tr><td colspan="5" class="main">Career Objective:</td></tr>';
echo '<tr><p class="ad"><td>&nbsp&nbsp&nbsp&nbsp&nbsp'. 
$obj.'</td></p></tr></table><br>';

echo '<table><tr><td colspan="5"  class="main">Educational Profile:</td></tr></table>';
echo '<table border="1"><tr style="font-weight:bold"><td colspan="" class="ad">Course</td>';
echo '<td class="ad">Branch</td>';
echo '<td class="ad">College/Institution</td>';
echo '<td class="ad">University/Board</td>';
echo '<td class="ad">Year</td>';
echo '<td class="ad">Aggregate</td></tr>';

if($mdegc!=null){
echo '<tr><td class="ad">Mtech</td>';
echo '<td class="ad">'.$mbranch.'</td>';
echo '<td class="ad">'.$mdegc.'</td>';
echo '<td class="ad">'.$muniv.'</td>';
echo '<td class="ad">'.$myear.'</td>';
echo '<td class="ad">'.$maggr.'</td></tr>';
}

if($bachdegco!=null){
echo '<tr><td class="ad">Btech</td>';
echo '<td class="ad">'.$bbranch.'</td>';
echo '<td class="ad">'.$bachdegco.'</td>';
echo '<td class="ad">'.$buniv.'</td>';
echo '<td class="ad">'.$byear.'</td>';
echo '<td class="ad">'.$baggr.'</td></tr>';
}
echo '<tr><td class="ad">'.$iod.'</td>';
echo '<td class="ad">'.$iodbranch.'</td>';
echo '<td class="ad">'.$iodcoll.'</td>';
echo '<td class="ad">'.$iodboard.'</td>';
echo '<td class="ad">'.$iodyear.'</td>';
echo '<td class="ad">'.$iodaggr.'</td></tr>';

echo '<tr><td class="ad">SSC</td>';
echo '<td class="ad">-------</td>';
echo '<td class="ad">'.$ssc.'</td>';
echo '<td class="ad">'.$sboard.'</td>';
echo '<td class="ad">'.$syear.'</td>';
echo '<td class="ad">'.$saggr.'</td></tr></table><br>';//100

echo '<table border="1"><tr><td colspan="5" class="main">Academic  
Project:</td></tr>';
echo '<tr><td class="ad" width="25%">Name:</td>';
echo '<td class="ad" width="75%">'.$projecttitle.'</td></tr>';
echo '<tr><td class="ad" width="25%">Duration:</td>';
echo '<td class="ad" width="75%">'.$projectduration.'</td></tr>';
echo '<tr><td class="ad" width="25%">Description</td>';
echo '<td class="ad" width="75%">'.$projectdescr.'</td></tr></table><br>';
if(strtoupper($training)!="NO"&&$training!=null){
echo '<table><tr><td  colspan="5" class="main">Training:</td></tr>';
echo '<tr><td class="ad">&nbsp&nbsp&nbsp&nbsp&nbsp'.$training.'</td></tr></table><br>';
}

if(!($proglang!=null&&$scripting!=null&&$dbms!=null&&$os!=null))
{
echo '<table border="1"><tr><td  colspan="8" class="main">Software  
skills:</td></tr>';
}
if($proglang!=null){
echo '<tr><td class="ad" width="25%">Programming Languages:</td>';
echo '<td class="ad" width="75%">'.$proglang.'</td></tr>';
}
if($scripting!=null){
echo '<tr><td class="ad">Scripting:</td>';
echo '<td class="ad">'.$scripting.'</td></tr>';
}
if($dbms!=null){
echo '<tr><td class="ad">DBMS:</td>';
echo '<td class="ad">'.$dbms.'</td></tr>';
}
if($os!=null){
echo '<tr><td class="ad">OS</td>';
echo '<td class="ad">'.$os.'</td></tr></table><br>';
}
if($aa!=null){
echo '<table ><tr><td colspan="5"  class="main">Achievements and  
Awards:</td></tr>';
echo '<td class="ad">'.$aa.'</td></tr></table><br>';
}
echo '<table  ><tr><td colspan="5"  class="main">Extra Curricular  
Acitivities:</td></tr>';
echo '<tr><td class="ad">'.$eca.'</td></tr></table><br>';
echo '<table ><tr><td colspan="5" class="main">Area Of Interest:</td></tr>';
echo '<tr><td class="ad">&nbsp&nbsp&nbsp&nbsp&nbsp'. $aof.'</td></tr></table><br>';
echo '<table  ><tr><td colspan="5"  class="main">Permanent Address:  </td></tr>';
echo '<tr><td class="ad">'.$namessc.'</td></tr>';
echo '<tr><td class="ad">'.$fname.'</td></tr>';
echo '<tr><td class="ad">'.$dob.'</td></tr>';
echo '<tr><td class="ad">'.$paddr.'</td></tr>';
echo '<tr><td class="ad">'.$villnam.'</td></tr></table><br>';
echo '<table ><tr><td colspan="5" class="main">Declaration:</td></tr>';
echo '<tr><td class="ad">&nbsp&nbsp&nbsp&nbsp&nbsp'.$decl.'</td></tr></table><br><br><br><br>';
echo '<table  style="text-align:right;font-weight:bold"><tr><td  >Signature of candidate</td></tr></table>';



//echo 'Thanks for adding your details.<br/>';
//$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
//header('Location: ' . $home_url);

echo '<button onclick="return printresume() ">Print</button>';
echo '</div>';
echo '<script>';
echo 'function printresume(){';
echo 'window.print();';
echo '};';
echo '</script>';
echo '</body>';
echo '</html>';
mysqli_close($dbc);
exit();
?>