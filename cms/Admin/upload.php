<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
   <script type="text/javascript" src="../materialcss/js/materialize.min.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
<?php
$conn=mysqli_connect('localhost','root','','Manuu');
if (isset($_REQUEST['submit'])) {
	$filename=$_FILES['file']['name'];
	$tempname=$_FILES['file']['tmp_name'];
	move_uploaded_file($tempname, "../first/$filename");
	$sql="INSERT INTO Upload (upload) values('$filename')";
	$res=mysqli_query($conn,$sql);
}
?>
<form enctype="multipart/form-data" method="post">
	<div class="input-field">
		<input type="file" name="file">
	</div>
	<div class="input-field">
		<input type="submit" name="submit" value="Upload" class="btn floating-waves teal">
	</div>
</form>