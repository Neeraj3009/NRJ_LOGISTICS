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
$consignmentnumber=$_POST['consignmentnumber'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contactnum=$_POST['contactnum'];
$email=$_POST['email'];
$subject=$_POST['subject'];
	

$sql="insert into tracking(consignmentnumber,firstname,lastname,contactnum,email,subject) values('$consignmentnumber','$firstname','$lastname','$contactnum','$email','$subject')";

$res=mysqli_query($conn,$sql);
if($res){
  header("refresh: 5; url=tracking.php");
  echo "<p align=center>Booking Succeesfull!!</p> ";
  echo "<p align=center>Redirecting to a payment page</p>";
}
else
{ 
  header("refresh: 5; url=tracking.php");
echo " Booking Unsccessfull!! Must be a server issue";
echo "<p align=center>Redirecting to a previous page</p>";

}
  }
}
?>