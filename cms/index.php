	<?php
	include'./pages/navbar.php';
	include './Admin/dbcon.php';
	?>
	<title>Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="./jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="./jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/index.css">

  <!-- Main Content-->
  	<div class="row">
	 <div class="col  l9 m9 s12">
		 <div class="row">
			 
<?php
$sql="SELECT *FROM posts order by id desc";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	while ($rows=mysqli_fetch_assoc($result)) {
		?>
	<div class="col l4 m4 s12">
		<div class="card">
<div class="card-image">
	<img src="./images/<?php echo $rows['img']?>" alt="" class="responsive-image">
</div>
<div class="card-content">
	<p class=""><?php echo $rows['title']?></p>
	</div>
	<div class="card-action teal center hoverable" >
		<a href="./pages/single_post.php?id=<?php echo $rows['id']?>" class="white-text">Read More</a>
	</div>
	</div>
		</div>

	
		<?php 
	}
}
?>
  		</div>
		</div>
 <!-- Side Bar-->

	 <div class="col l3 m3 s12">
<?php
include './pages/sidebar.php';
?>
	 </div>

  </div>
 <?php
include './pages/footer.php';
?>
