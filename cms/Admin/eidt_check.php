<?php
include 'dbcon.php';
SESSION_START();
$title=$_POST['title'];
$imagename=$_FILES['img']['name'];
$tempname=$_FILES['img'] ['tmp_name'];
$ckeditor=$_POST['ckeditor'];
$title=mysqli_real_escape_string($conn,$title);
$ckeditor=mysqli_real_escape_string($conn,$ckeditor);
move_uploaded_file($tempname, "../Images/$imagename");
$sql="UPDATE posts set title='$title',ckeditor='$ckeditor'";
$run=mysqli_query($conn,$sql);
if ($run==TRUE) {
	$_SESSION['edit']="Edit SuccesFully";
header('location:edit.php');
}
else
{
	$_SESSION['edit']="Something Went Wrong";
	header('location:edit.php');
}
?>