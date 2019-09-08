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
$sql="INSERT INTO posts (title,img,ckeditor) values ('$title','$imagename','$ckeditor')";
$run=mysqli_query($conn,$sql);
if ($run==TRUE) {
header('location:../admin/dashboard.php');
}
else
{
	echo "error";
}
?>