<?php
include 'dbcon.php';
$dir='../images/';
$files=scandir($dir);
if($files){
	?>
<div class="row">
	
</div>
	<?php
	foreach ($files as $file) 
	{
	?>
	<div class="col l4 m3 s6">
		<div class="card">
			<div class="card-img">
			<img src="../images/<?php echo $file; ?>" class="responsive-img">
			<span class="card-title"><?php echo $file; ?></span>
			</div>
		</div>
	</div>
	<?php	
	}
}
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
   <script type="text/javascript" src="../materialcss/js/materialize.min.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
