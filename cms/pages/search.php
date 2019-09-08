<?php
include 'navbar.php';
include '../admin/dbcon.php';
if(isset($_GET['submit'])){
$q=$_GET['search'];
$q=mysqli_real_escape_string($conn,$q);
$q=htmlentities($q);
$sql="SELECT *FROM posts where title like '$q' or ckeditor like '$q' or title like'%$q%' or ckeditor like '%$q%'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)>0) {
	?>
	<div class="row">
		<div class="col l9 m6 s12">
			<div class="row">
				
			
	<?php
while ($rows=mysqli_fetch_assoc($res)) {
		?>
	<div class="col l4 m4 s12">
		<div class="card">
<div class="card-image">
	<img src="../images/<?php echo $rows['img']?>" alt="" class="responsive-image">
	
</div>
<div class="card-content">
	<p class=""><?php echo $rows['title']?></p>
	</div>
	<div class="card-action teal center hoverable">
		<a href="single_post.php?id=<?php echo $rows['id']?>" class="white-text">Read More</a>
	</div>
	</div>
		</div>

	
		<?php 
	}	
}
else{
	?>
	<div class="row">
		<div class="col l9 m6 s12">
			<div class="row">
	<h5>Sorry Nothing Match Your Feed Plzz Try With Diffrent Key Word </h5>
</div>
</div>
</div>
	<?php
}
}
else{
	header('location:http://localhost/cms/');
}
?>
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