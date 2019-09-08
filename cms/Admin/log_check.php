<?php
SESSION_START();
include 'dbcon.php';
$user=$_POST['username'];
$pass=$_POST['pwd'];
$sql="SELECT *FROM signup where username='$user' && pwd='$pass' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row['username']==$user && $row['pwd']==$pass)
{
	$_SESSION['username']=$user;
	header('location:dashboard.php');

}
else
{
$_SESSION['error_msg']='<p style="text-align: center;color: red;">invailed username Or Password</p>';
	header('location:form.php');
	
}
?>