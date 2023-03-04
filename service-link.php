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
$pickaddress=$_POST['pickaddress'];
$dropaddress=$_POST['dropaddress'];
$typeofcargo=$_POST['typeofcargo'];
$numberofcargo=$_POST['numberofcargo'];
$more=$_POST['more'];	

$sql="insert into service(firstname,lastname,contactnum,email,pickaddress,dropaddress,typeofcargo,numberofcargo,more) values('$firstname','$lastname','$contactnum','$email','$pickaddress','$dropaddress','$typeofcargo','$numberofcargo','$more')";

$res=mysqli_query($conn,$sql);
if($res){
  header("refresh: 5; url=service.php");
  echo "<p align=center>Booking Succeesfull!!</p> ";
  echo "<p align=center>Redirecting to a payment page</p>";
}
else
{ 
  header("refresh: 5; url=service.php");
echo " Booking Unsccessfull!! Must be a server issue";
echo "<p align=center>Redirecting to a previous page</p>";

}
  }
}
?>