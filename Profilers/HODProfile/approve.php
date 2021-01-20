<?php
  session_start();
 if ($_SESSION['husername']){
  }
   else {
	   header("location: index.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
<!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
        <meta http-equiv='refresh' content ='3; url=login.php'>
		</head>
		</html>
<?php
$id = $_POST["id"];
$dob = $_POST["DOB"];
$link=mysqlii_connect("localhost","root","","details");

if($link === false)
{
die("error:".mysqlii_connect_error());
}
$sql = "UPDATE `basicdetails` SET Approve='1',ApprovalDate='$dob' where USN = '$id' ";
if(mysqlii_query($link,$sql))
{
echo "$id";
echo "\n";echo "\n";
echo "approved";
}
else 
{
echo "error:".mysqlii_error($link);
}
 	
mysqlii_close($link);
?>
