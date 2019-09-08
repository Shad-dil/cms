	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>

  <ul class="collection">
	 		<li class="collection-item">
	 			<h5>Search</h5>
	 			<form action="http://localhost/cms/pages/search.php" method="get">
	 			<div class="input-field">
	 				<input type="text" name="search" placeholder="Search Anything.." id="search" class="hoverable">
	 				<div class="center">
	 				<input type="submit" name="submit" class="btn teal" value="Search">
	 				</div>
	 			</div>
	 			</form>
	 		</li>
	 	</ul>
	 	<h5 class="flow-text center">Trending Post</h5>
	 	<div class="collection">
  <?php
$conn=mysqli_connect('localhost','root','','user');
$sql="SELECT *FROM posts order by view desc limit 5";
$run=mysqli_query($conn,$sql);
if(mysqli_num_rows($run)){
	while ($rows=mysqli_fetch_assoc($run)) {
	?>
	 	
	 		
<a href="http://localhost/cms/pages/single_post.php?id=<?php echo $rows['id'];?>" class="collection-item"><?php echo $rows['title']; ?></a>

<?php
	}
}
  ?>
</div>
