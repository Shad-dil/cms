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
include 'navbar.php';
  ?>
  <div class="row">
	<div class="col l9 m8 s12">
		<div class="row">

			<!--First Semester-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">1<sup>st</sup> Semester</h5>
					<ul class="collection">
<?php

$conn=mysqli_connect('localhost','root','','Manuu');
$sql="SELECT *FROM Upload order by id desc";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while ($row=mysqli_fetch_assoc($res)) {
	?>
	<a href="../first/<?php echo $row['upload']; ?>" class="collection-item" target="_blank"><?php echo $row['upload']?>
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
	<?php	
	}
}


?>
</ul>
</div>
</div>

			<!--SECOND SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">2<sup>nd</sup> Semester</h5>
					<ul class="collection">
						<?php

$conn=mysqli_connect('localhost','root','','Manuu');
$sql="SELECT *FROM second order by id desc";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while ($row=mysqli_fetch_assoc($res)) {
	?>
	<a href="../first/<?php echo $row['upload']; ?>" class="collection-item" target="_blank"><?php echo $row['upload']?>
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
	<?php	
	}
}


?>
						
					</ul>
				</div>
			</div>

			<!--3rd  SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">3<sup>rd</sup> Semester</h5>
					<ul class="collection">
						<?php

$conn=mysqli_connect('localhost','root','','Manuu');
$sql="SELECT *FROM third order by id desc";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while ($row=mysqli_fetch_assoc($res)) {
	?>
	<a href="../first/<?php echo $row['upload']; ?>" class="collection-item" target="_blank"><?php echo $row['upload']?>
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
	<?php	
	}
}


?>
					</ul>
				</div>
			</div>

			<!--4th  SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">4<sup>th</sup> Semester</h5>
					<ul class="collection">
						<?php

$conn=mysqli_connect('localhost','root','','Manuu');
$sql="SELECT *FROM fourth order by id desc";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while ($row=mysqli_fetch_assoc($res)) {
	?>
	<a href="../first/<?php echo $row['upload']; ?>" class="collection-item" target="_blank"><?php echo $row['upload']?>
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
	<?php	
	}
}


?>
					</ul>
				</div>
			</div>
			<!--5th  SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">5<sup>th</sup> Semester</h5>
					<ul class="collection">
						<?php

$conn=mysqli_connect('localhost','root','','Manuu');
$sql="SELECT *FROM fifth order by id desc";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while ($row=mysqli_fetch_assoc($res)) {
	?>
	<a href="../first/<?php echo $row['upload']; ?>" class="collection-item" target="_blank"><?php echo $row['upload']?>
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
	<?php	
	}
}


?>
					</ul>
				</div>
			</div>
			<!--6Th  SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">6<sup>th</sup> Semester</h5>
					<ul class="collection">
						<?php

$conn=mysqli_connect('localhost','root','','Manuu');
$sql="SELECT *FROM sixth order by id desc";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while ($row=mysqli_fetch_assoc($res)) {
	?>
	<a href="../first/<?php echo $row['upload']; ?>" class="collection-item" target="_blank"><?php echo $row['upload']?>
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
	<?php	
	}
}


?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col l3 m3 s12">
		<?php
include 'sidebar.php';
		?>
	</div>
</div>
<?php
include 'footer.php';
?>