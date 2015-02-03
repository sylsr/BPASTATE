<html>
<head>
<title>PHP Test</title>
</head>
<body>
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
$state=$_POST['state'];
$city=$_POST['city'];
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
 </body>
</html>