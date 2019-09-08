<?php
SESSION_START();
include 'dbcon.php';
$user=$_POST['username'];
$pass=$_POST['pwd'];
$sql="SELECT *FROM adminlogin where username='$user' && pwd='$pass' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row['username']==$user && $row['pwd']==$pass){
	header('location:dashboard.php');

}
else
{
	header('location:adminlogin.php');
	$_SESSION['error_msg']="Invailed Username Or PassWord";
}
?>