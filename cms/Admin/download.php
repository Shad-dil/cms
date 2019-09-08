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
					<h5 class="center white-text">1st Semester</h5>
					<ul class="collection">
<?php

$conn=mysqli_connect('localhost','root','','Manuu');
$sql="SELECT *FROM Upload order by id desc";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while ($row=mysqli_fetch_assoc($res)) {
	?>
	<a href="../Documnets/<?php echo $row['upload']; ?>" class="collection-item"><?php echo $row['upload']?>
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
					<h5 class="center white-text">2nd Semester</h5>
					<ul class="collection">
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
					</ul>
				</div>
			</div>

			<!--3rd  SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">3rd Semester</h5>
					<ul class="collection">
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
					</ul>
				</div>
			</div>
			<!--4th  SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">4th Semester</h5>
					<ul class="collection">
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
					</ul>
				</div>
			</div>
			<!--5th  SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">5th Semester</h5>
					<ul class="collection">
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
					</ul>
				</div>
			</div>
			<!--6Th  SEMESTER-->

			<div class="col l4 m3 s12">
				<div class="card-panel teal">
					<h5 class="center white-text">6th Semester</h5>
					<ul class="collection">
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<a href="" class="collection-item">Math
						<span class="secondary-content"><i class="fa fa-download" aria-hidden="true"></i></span></a>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col l3 m3 s12">
		<?php
include '../pages/sidebar.php';
		?>
	</div>
</div>
<?php
include '../pages/footer.php';
?>