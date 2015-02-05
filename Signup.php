<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1-transitional">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
BODY {
	background-image: url("Background.jpg")
	background-position: top, center;
	background-repeat: no-repeat;
	background-size: 100% 12%;
	background-color: #FFFFFFFF;
	margin-left: 10px;
	margin-right: 10px;
	background-attachment: scroll;
	background-position: left top;
}

#logo div img {
	margin-top: -27px;
	margin-right: -27px;
	margin-bottom: -27px;
	margin-left: -27px;
}
body,td,th {
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #000000;
	background-repeat: no-repeat;
	}
	
}

-->
</style> 
<link rel="shortcut icon" href="favicon.ico.png" />
<meta http-equiv="Content-Type" content="text/html; charset= utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="styles.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
<link rel='stylesheet' id='camera-css'  href='camera.css' type='text/css' media='all' />
<title>Affinity Travel Agency</title>
</head>
<body background="Background.jpg" bgcolor="#f2f5fa" >
<!-- Logo -->
<TABLE WIDTH="100%" ALIGN="LEFT">
	<TR>
		<TD ALIGN="LEFT">
			<a href="Affinity.html">  <img src="Affinity Travels.png" width="320px" height="180px" alt=""/></A>
		</TD>
		<td align="right" valign="top">
			<h6><u><A HREF="Login.html">Login</A> | Cart</u></h6>
		</td>
		<td width="8%">
		</td>
	</TR>
</TABLE>

<br />
<!--Navigation bar-->
<TABLE WIDTH="100%" BACKGROUND="opaque_drk.png" ALIGN="CENTER" bgcolor="#515151">
	<TR>
		<td width="20%">
		</td>
		<TD ALign="Center" width="80%">
			<div id='cssmenu'>
				<ul>
				   <li class='active'><a href='Affinity.html'><span>Home</span></a></li>
				   <li><a href='Cruise.html'><span>Cruise</span></a></li>
				   <li><a href='Resort.html'><span>Resort</span></a></li>
				   <li class='last'><a href='CaliAdv.html'><span>California Adventure</span></a></li>
				   <li class='last'><a href='Testimonials.html'><span>Testimonials</span></a></li>
				   
				</ul>
			</div>
		</TD>
	</TR>
</TABLE>
<br />

<?php
function returnLine($fname)
{
	$lines= file('/home/sylsr/www/html/passwordReadWrite.txt') or die("Unable to open file");
	$line_number = false;
	while (list($key, $line) = each($lines) and !$line_number)
	{
	   $line_number = (strpos($line, $fname) !== FALSE) ? $key + 1 : $line_number;
	}
	return $line_number;
}
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$country=$_POST['country'];
$username=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$address=$_POST['address'];
$zipcode=$_POST['zipcode'];
$email=$_POST['email'];
$needle ='*';
$validatePassword=strpos ($password1 ,$needle);;
if($validatePassword!=null)
{
	$validatePassword=true;
}
if($password1!==$password2)
{
	echo "Your passwords did not match.";
}
else if($validatePassword ===true)
{
	echo "Illegal character used in password.";
}
else if(returnLine($username)!=null)
{
	echo "This username is already taken.";
}
else
{
	$loginString=$firstName.'*'.$lastName.'*'.$country.'*'.$username.'*'.$password1.'*'.$password2.'*'.$zipcode.'*'.$state.'*'.$city.'*'.$email."\n";
	$file=('/home/sylsr/www/html/passwordReadWrite.txt');
	$openFile=fopen($file, 'a') or die("This file could not be opened.");
	$writeFile=fwrite($openFile, $loginString) or die("I could not add words to the file");
	fclose($openFile);
	$openFile=fopen($file , 'r') or die("was unable to opend second time");
	$readFile=fread($openFile, filesize($file)) or die("was unable to read after write");
	echo $readFile;
}



?>

<TABLE border=0 width="1520px" background="opaque.png" align="center" bgcolor="lightblue">
	<tr>
		<TD align="center">
			<p>Affinity Travels Agency <br />New York Travelling HQ <br /> 1-800-RESORTS</p>
		</td>
	</tr>
	<tr bgcolor="lightblue">
	<td align="center">
		<p style="">© Copyright Affinity IT Squad web design powered by Overflow System</p>
	</td>
	</tr>
</TABLE>

<br />

</body>
</html>