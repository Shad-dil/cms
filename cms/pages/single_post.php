<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
  <style type="text/css">
  	::placeholder {
  color: #abc342 !important;
 
}
  </style>
  <?php 
include 'navbar.php';
  ?>
<div class="row">
	<div class="col l9 m8 s12">
		

<?php

// DIsplay Post Contents

include '../admin/dbcon.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];

	$id=mysqli_real_escape_string($conn,$id);
	$id=htmlentities($id);
	$sql="SELECT *FROM posts where id=$id";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0){
		$sql2="SELECT view FROM posts where id=$id";
            $res2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($res2);
            $view=$row2['view'];
            $view=$view+1;
            $sql3="UPDATE posts set view=$view where id=$id";
            mysqli_query($conn,$sql3);
$rows=mysqli_fetch_assoc($res);
	?>
	<div class="card-panel">
		<h3 class="center"><?php echo $rows['title']; ?></h3>
		<br>
		<div class="center">
			<img src="../images/<?php echo $rows['img'];?>" class="responsive-img">
		</div>
		<div class="center">
			<p class="center" style="    position: relative;text-align: justify;"><?php echo $rows['ckeditor']?></p>
		</div>
	</div>
	<?php
}
}
else{
	header('location:../index.php');
}

?>

<!--COMMENT AREA -->

<div class="card-panel teal lighten-5">
	<h5> Write Comment</h5>
	<?php
	SESSION_START();
	if(isset($_SESSION['msg2'])){
  echo $_SESSION['msg2'];
  unset($_SESSION['msg2']);
}   
	if (isset($_SESSION['msg1'])) {
		echo $_SESSION['msg1'];
		unset($_SESSION['msg1']);
	}
	?>
	<br>
<img src="../siteimg/comment.png" class="responsive-img" alt="" style="width: 100px;height: 100pxl">
<form action="single_post.php?id=<?php echo $rows['id'];?>" method="post">
	
	<div class="input-field">
	<input type="Email" name="Email" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" placeholder="Email..">
	</div>
	<div class="input-field">
	<textarea class="materialize-textarea" name="msg" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" placeholder="Message.."></textarea>
	</div>
	<input type="submit" name="submit" value="Comment"  class="btn waves-effect waves-light teal hoverable ">
</form>
<h5> Comments</h5>
<?php
$sql4="SELECT *FROM comment where id=$id order by id desc";
$res4=mysqli_query($conn,$sql4);
if (mysqli_num_rows($res4)>0) {
	while ($row4=mysqli_fetch_assoc($res4)) {
		?>
		<ul class="collection">
	<li class="collection-item">
		<?php echo $row4['msg'];?> 
		<span class="secondary-content"><?php echo $row4['Email'];?></span>
	</li>
</ul>
	<?php	
	}
}
?>

</div>
	</div>
	<div class="col l3 m4 s12">
		<?php
include 'sidebar.php';
		?>
	</div>
</div>
<?php 
include 'footer.php';
  ?>
  <?php

 ?>
<?php
include '../admin/dbcon.php';
if (isset($_POST['submit'])) {
	$email=$_POST['Email'];
	$msg=$_POST['msg'];
	$id=$_GET['id'];
	$id=mysqli_real_escape_string($conn,$id);
	$id=htmlentities($id);
	$sql="INSERT INTO comment (email,msg) values('$email','$msg')";
	$res=mysqli_query($conn,$sql);
	if ($res) {
	$_SESSION['msg2']='<div class="teal center">Thanks For Your Feed Back</div>';
		
	}
	else{
		$_SESSION['msg1']='<div class="teal">Something Went Wrong</div>';
		header('location: single_post.php?id=$id');
	}
}
?>