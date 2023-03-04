<?php

$servername="localhost";
$username="root";
$password="";
$dbname="nrjlogic";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	if(isset($_POST['submit']))
	{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contactnum=$_POST['contactnum'];
$email=$_POST['email'];
$query=$_POST['query'];
$subject=$_POST['subject'];
		
		

$sql="insert into contact(firstname,lastname,contactnum,email,query,subject) values('$firstname','$lastname','$contactnum','$email','$query','$subject')";

$res=mysqli_query($conn,$sql);
if($res){
  header("refresh: 5; url=contact.php");
  echo "<p align=center>Booking Succeesfull!!</p> ";
  echo "<p align=center>Redirecting to a payment page</p>";
}
else
{ 
  header("refresh: 5; url=contact.php");
echo " Booking Unsccessfull!! Must be a server issue";
echo "<p align=center>Redirecting to a previous page</p>";

}
	}
}
?>
