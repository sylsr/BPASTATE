<HTML>
<HEAD>
</HEAD>
<BODY>
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
$usernameL=$_POST['usernameL'];
$passwordL=$_POST['passwordL'];
$search1= $usernameL;
$search2= $passwordL;
$usernameLNum =returnLine($search1);
$passwordLNum =returnLine($search2);
if($usernameLNum==$passwordLNum)
{
	session_start();
	$_SESSION['usernameL'];
	$_SESSION['passwordL'];
	echo "You have sucessfully logged in.";
}
else
{
	echo "The username or password did not match";
}

?>

</BODY>
</HTML>