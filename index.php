<?php
$home_url='';
require_once('starsess.php');
require_once('dbconnection.php');
if(isset($_SESSION['userid']))
{
$userid=$_COOKIE['userid'];

if (isset($_POST['submit1'])) 
{
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$obj=$_POST['obj'];
$mdegc=$_POST['mdegc'];
$mbranch=$_POST['mbranch'];
$myear=$_POST['myear'];
$muniv=$_POST['muniv'];
$maggr=$_POST['maggr'];
$bachdegco=$_POST['bachdegco'];
$bbranch=$_POST['bbranch'];
$byear=$_POST['byear'];
$buniv=$_POST['buniv'];
$baggr=$_POST['baggr'];
$iod=$_POST['iod'];
$iodcoll=$_POST['iodcoll'];
$iodboard=$_POST['iodboard'];
$iodbranch=$_POST['iodbranch'];
$iodyear=$_POST['iodyear'];
$iodaggr=$_POST['iodaggr'];
$ssc=$_POST['ssc'];
$syear=$_POST['syear'];
$sboard=$_POST['sboard'];
$saggr=$_POST['saggr'];
$projecttitle=$_POST['projecttitle'];
$projectduration=$_POST['projectduration'];
$projectdescr=$_POST['projectdescr'];
$training=$_POST['training'];
$proglang=$_POST['proglang'];
$scripting=$_POST['scripting'];
$dbms=$_POST['dbms'];
$os=$_POST['os'];
$aa=$_POST['aa'];
$eca=$_POST['eca'];
$aof=$_POST['aof'];
$namessc=$_POST['namessc'];
$fname=$_POST['fname'];
$dob=$_POST['dob'];
$paddr=$_POST['paddr'];
$villnam=$_POST['villnam'];
$decl=$_POST['decl'];

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

$dbc=mysqli_connect(DB_ADDR,DB_USER,DB_PASS,DB_NAME);
$query="INSERT INTO resume1content  VALUES ('','$userid','$name','$email','$number','$obj','$mdegc','$mbranch','$myear','$muniv','$maggr','$bachdegco','$bbranch','$byear',".
"'$buniv','$baggr','$iod','$iodcoll','$iodboard','$iodbranch','$iodyear','$iodaggr','$ssc','$syear',".
"'$sboard','$saggr','$projecttitle','$projectduration','$projectdescr','$training','$proglang','$scripting','$dbms','$os','$aa','$eca',".
"'$aof','$namessc','$fname','$dob','$paddr','$villnam','$decl')";
$result=mysqli_query($dbc,$query)
or die('Error querying database.');
mysqli_close($dbc);
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
exit();}
?>
<html>
<body >
<link rel="stylesheet" type="text/css" href="resumeformat.css">
<div id="title">
<h1  id="titlename">Resume Builder </h1>
</div>
<div id="navmenu">

<a  style="background-color:#FF6600;padding:10px;text-decoration:none;font-size:150%;color:#ffffff;font-family:Microsoft Yi Baiti,Microsoft JhengHei UI Light,century gothic" href="logout.php">Log Out</a>

<a  style="background-color:#FF6600;padding:10px;text-decoration:none;font-size:150%;color:#ffffff;font-family:Microsoft Yi Baiti,Microsoft JhengHei UI Light,century gothic" href="saved1resume.php">Saved Resume</a>

</div>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<div id="background">

<p  style="font-size:30px;text-align:center;text-decoration:underline">ENTER DETAILS FOR YOUR  
RESUME HERE</p>
<p>All fields are mandatory except those with * marked</p>
<label for="name" id="label">NAME:</label>
<input id="name" type="text" name="name" size="20">
<label for="email" id="label">EMAIL:</label>
<input id="email" type="text" name="email" size="20">
<label for="number" id="label">MOBILE:</label>
<input id="number" type="text" name="number" size="20"><br/></br></br>
<label for="objective" id="label" style="font-size:30px">CAREER  
OBJECTIVE:</label><br/><br/>
<textarea id="objective" type="text" rows="4" cols="20"  
name="obj"></textarea><br/></br></br>

<label for="quali" id="label" style="font-size:30px">EDUCATIONAL  
QUALIFICATIONS:</label><br/><br/>

<!------------------------------------Master Degree  ----------------------------------------------------------->

<label for="mdegc">MASTER DEGREE*:</label>
<label for="bachdegco">College:</label>
<select name="mdegc">
<option selected="selected" value="">No Master Degree</option>
<option   value="Srkr Engineering College">Srkr Engineering College</option>
<option   value="Andhra University">Andhra University</option>
</select>

<label for="muniv">University/Board:</label>
<select name="muniv">
<option selected="selected"  value="------">------</option>
<option   value="Andhra University">Andhra University</option>
<option  value="JNTUK">JNTUK</option>
<option value="JNTUH">JNTUH</option>
</select>

<label for="mbranch">Specialization:</label>
<select name="mbranch">
<option selected="selected" value="------">None</option>
</select>

<label for="myear">Year:</label>
<select name="myear">
<option selected="selected" value="-----">-----</option>
<option value="2010">2010</option>
<option  value="2011">2011</option>
<option value="2012">2012</option>
<option  value="2012">2012</option>
<option value="2013">2013</option>
<option  value="2014">2014</option>
<option value="2015">2015</option>
<option  value="2016">2016</option>
<option  value="2017">2017</option>
<option  value="2018">2018</option>
<option  value="2019">2019</option>
<option  value="2020">2020</option>
<option  value="2021">2021</option>
<option  value="2022">2022</option>
<option  value="2023">2023</option>
<option  value="2024">2024</option>
</select><br>


<label for="maggr" >Aggregate:</label>
<input id="maggr" type="text" name="maggr" size="20"><br/><br/>

<!----------------------------------------------Bachelor  
Degree----------------------------------------->


<label for="bachdegco">BACHELOR DEGREE*:</label>
<label for="bachdegco">College:</label>
<select name="bachdegco">
<option  selected="selected" value="">No Bachelor Degree</option>
<option   value="Srkr Engineering College">Srkr Engineering College</option>
<option value="Vishnu Engineering College">Vishnu Engineering College</option>
</select>

<label for="buniv">University/Board:</label>
<select name="buniv">
<option  selected="selected"   value="-----">----</option>
<option value="Andhra University">Andhra University</option>
<option  value="JNTUK">JNTUK</option>
<option value="JNTUH">JNTUH</option>
</select>



<label for="bbranch">Branch:</label>
<select name="bbranch">
<option selected="selected" value="-------">--------</option>
<option  value="ECE">ECE</option>
<option value="EEE">EEE</option>
<option value="CSE">CSE</option>
<option value="CIVIL">CIVIL</option>
<option value="IT">IT</option>
<option value="Mechanical">Mech</option>
</select>

<label for="byear">Year:</label>
<select name="byear">
<option selected="selected" value="-------">-------</option>
<option value="2010">2010</option>
<option  value="2011">2011</option>
<option value="2012">2012</option>
<option  value="2012">2012</option>
<option value="2013">2013</option>
<option  value="2014">2014</option>
<option value="2015">2015</option>
<option  value="2016">2016</option>
<option  value="2017">2017</option>
<option  value="2018">2018</option>
<option  value="2019">2019</option>
<option  value="2020">2020</option>
<option  value="2021">2021</option>
<option  value="2022">2022</option>
<option  value="2023">2023</option>
<option  value="2024">2024</option>
</select>



<label for="baggr" >Aggregate:</label>
<input id="baggr" type="text" name="baggr" size="20"><br/><br/>

<!--------------------------------Diploma/Intermediate------------------------------->
<label for="iod">INTER OR DIPLOMA:</label>

<select name="iod">
<option  selected="selected" value="inter">Inter</option>
<option value="dip">Diploma</option>
</select>

<label for="iodcoll" >College:</label>
<input id="iodcoll" type="text" name="iodcoll" size="20">

<label for="iodboard" >Board:</label>
<input id="iodboard" type="text" name="iodboard" size="20">


<label for="iodbranch" >Branch:</label>
<input id="iodbranch" type="text" name="iodbranch" size="20">


<label for="iodyear">Year:</label>
<select name="iodyear">
<option selected="selected" value="-------">------</option>
<option value="2010">2010</option>
<option  value="2011">2011</option>
<option value="2012">2012</option>
<option  value="2012">2012</option>
<option value="2013">2013</option>
<option  value="2014">2014</option>
<option value="2015">2015</option>
<option  value="2016">2016</option>
<option  value="2017">2017</option>
<option  value="2018">2018</option>
<option  value="2019">2019</option>
<option  value="2020">2020</option>
<option  value="2021">2021</option>
<option  value="2022">2022</option>
<option  value="2023">2023</option>
<option  value="2024">2024</option>
</select>




<label for="iodaggr" >Aggregate:</label>
<input id="iodaggr" type="text" name="iodaggr" size="20"><br/><br/>





<!-------------------------------------------------------SSC------------------------------------->


<label for="ssc">SSC:</label>
<label for="ssc">School Name:</label>


<input  type="text" name="ssc" size="20">



<label for="sboard">Board:</label>
<select name="sboard">
<option selected="selected" value="------">------</option>
<option   value="Board of secondary school education">Board Of Sec School  
Education</option>
<option  value="cbse">CBSE</option>
</select>



<label for="syear">Year:</label>
<select name="syear">
<option selected="selected" value="------">-----</option>
<option value="2010">2010</option>
<option  value="2011">2011</option>
<option value="2012">2012</option>
<option  value="2012">2012</option>
<option value="2013">2013</option>
<option  value="2014">2014</option>
<option value="2015">2015</option>
<option  value="2016">2016</option>
<option value="2017">2017</option>
<option  value="2018">2018</option>
<option  value="2019">2019</option>
<option  value="2020">2020</option>
<option  value="2021">2021</option>
<option  value="2022">2022</option>
<option  value="2023">2023</option>
<option  value="2024">2024</option>
</select>

<label for="saggr" >Aggregate:</label>
<input id="saggr" type="text" name="saggr" size="20"></br></br><br/>


<!-------------------------------------------------------------->

<label  style="font-size:30px">ACADEMIC PROJECT:</label><br/><br/>
<label for="projecttitle" id="label">Project Title:</label>
<input id="projecttitle" type="text" name="projecttitle" size="20">

<label for="projectduration" id="label">Project duration:</label>
<input id="projectduration" type="text" name="projectduration" size="20"><br/>

<label for="projectdescr" id="label">Project Description:</label></br>
<textarea id="projectdescr" type="text" rows="4" cols="20"  
name="projectdescr"></textarea><br/></br></br>

<label for="training" id="label" style="font-size:30px">TRAINING:</label><br/><br/>
<textarea id="training" type="text" rows="4" cols="20"  placeholder="skip this field if you have not taken training"
name="training"></textarea><br/></br></br>

<label for="SoftwareSkills" style="font-size:30px">SOFTWARE  
SKILLS:</label><br/><br/>


<label for="proglang" id="label">Programming Languages:</label>
<input id="proglang" type="text" name="proglang" size="20" placeholder="skip this field if you don't know">

<label for="scripting" id="label">Scripting and Markup:</label>
<input id="scripting" type="text" name="scripting" size="20" placeholder="skip this field if you don't know"><br/>

<label for="dbms" id="label">DBMS:</label>
<input id="dbms" type="text" name="dbms" size="20" placeholder="skip this field if you don't know">

<label for="os">Operating Systems:</label>
<input id="os"  type="text" name="os" size="20" placeholder="skip this field if you don't know"><br/></br></br>


<label style="font-size:30px" >OTHER:</label><br/><br/>
<label for="aa" >Achievements and Awards:</label>
<input id="aa" type="text" name="aa" size="20" placeholder="skip this field if you don't have">


<label for="eca" >Extra Curricular Activities</label>
<input id="eca"  type="text" name="eca" size="20"><br/>

<label for="aof" >Area Of Interest:</label>
<input id="aof"  type="text" name="aof" size="20"><br/></br></br>


<label for="PI" style="font-size:30px" >PERSONNAL INFORMATION:</label><br/><br/>
<label for="namessc" >Name as per SSC:</label>
<input id="namessc" type="text" name="namessc" size="20">

<label for="fname" >Father's name:</label>
<input id="fname" type="text" name="fname" size="20">

<label for="dob" >Date Of Birth:</label>
<input id="dob" type="date" name="dob" size="20"><br/>

<label for="paddr" >Permanent address:</label><br/>
<textarea id="paddr" type="text" rows="4" cols="20"  
name="paddr"></textarea><br/>

<label for="villnam" >Village Name:</label><br/>
<input id="villnam" type="text" name="villnam" size="20"><br/></br></br>


<label for="decl" style="font-size:30px">DECLARATION:</label><br/>
<textarea id="decl" type="text" rows="4" cols="20" name="decl">I hereby declare that the information furnished above is true to the best of my  
knowledge.</textarea><br/>

<p style="color:#ff0000">By clicking save resume you can have your resume in the saved resume list mentioned in the tab above</p>
<input type="submit" name="submit1" id="submit" style="background-color:#ff6600;color:#fff;text-align:center;padding:10px 10px;margin:2px;;"   value="save resume">


</form>



<div id="footer">
<p  style="text-align:center ;padding-top:40px;color:#ffffff">&#169 kiranpuppala</p>
</div>

</div>
</html>
<?php
}
else{
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
header('Location: ' . $home_url);
}
?>

