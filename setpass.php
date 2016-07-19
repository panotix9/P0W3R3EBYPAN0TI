<?php
include 'pass.php' ; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Codebase.eu - Change password</title>
 </head>
 <body>



<center>
<br />
WARNING! if you are allowing users to access this page, you should do some input cheking on your password! If you don't users can inject code here.
<br />



<form name="change password" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

<table>
<tr>
<td>Enter the new password :</td>
<td><input  type="text" name="newpass" maxlength="60" size="30"></td>
</tr>
<tr>
<td>Enter the new password again :</td>
<td><input  type="text" name="newpass2" maxlength="60" size="30"></td>
</tr>
</table>

<br />
<input type="submit" value="Change password"> 
<br />
<br />

</form>

<?php

if (isset($_POST['newpass']))
{
if ($_POST['newpass'] == '') die ('please enter a new password');
if ($_POST['newpass'] !=  $_POST['newpass2']) die ('your passwords don\'t match');
updatepass($_POST['newpass']) ;  
}


function updatepass($new){

	global $passwordlocation ;

 	// chose any type of encryption you like here 
	$encryptedPassword = crypt($new,'$5$rounds=5000$saltgoeshere$');
	if (is_writable($passwordlocation) == FALSE) die ("The password file must be writable.") ; 

	// Open the file and erase the contents if any
	$fp = fopen($passwordlocation, "w");

	// Write the data to the file
	// CODE INJECTION WARNING!
  	fwrite($fp, "<?php\n\$passwd='$encryptedPassword';\n// Remember not to change this file\n?>");	  	
  	// Close the file
  	fclose($fp);

  	echo 'Your new password has been saved' ;
}

?>

</center>
</body>
</html>
