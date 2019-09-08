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

include 'dbcon.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$id=mysqli_real_escape_string($conn,$id);
	$id=htmlentities($id);
	echo $id;
	$sql="SELECT *FROM posts where id=$id";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0){
		$rows=mysqli_fetch_assoc($res);
?>
<?php
SESSION_START();
if (isset($_SESSION{'edit'})) {
	echo $_SESSION['edit'];
	unset($_SESSION['edit']);
}
if (isset($_SESSION{'edit_err'})) {
	echo $_SESSION['edit_err'];
	unset($_SESSION['edit_err']);
}
?>
<form action="edit_check.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data">
	
  	<textarea  name="title"  placeholder="Title"  class="materialize-textarea" >
  		<?php echo $rows['title'];?>
  		</textarea> 
  	<input type="file" name="img" class="input-field">
  	<textarea name="ckeditor" id="ckeditor" class="materialize-textarea" >
  		<?php echo $rows['ckeditor'];?></textarea>
  	<div class="center">
  	<input type="submit" name="submit" value="Edit" class="btn white-text">
  	</div>
  </form>
<?php
	}
	else{

	}
}
?>