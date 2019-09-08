<?php
SESSION_START();
if (isset($_SESSION['username'])) 
{
  
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
<style type="text/css">
  
  #dash{
    top: 0;
    position: sticky;
    z-index: 1;

  }
</style>
  <div class="row">
  	<div class="col l3 m3 s12" id="dash">
  		<div class="card-panel">
        <div class="center">
  		<img src="../images/shad.jpeg" alt="" class="responsive-img circle">
      </div>
      <p class="flow-text center"><?php echo $_SESSION['username']; ?></p>
  		<ul class="collection">
  			<li class="collection-item">
  				<a href="">Dashboard</a>
  			</li>
  			<li class="collection-item">
  				<a id="post" style="cursor: pointer;">Posts</a>
  			</li>
  			<li class="collection-item">
  				<a id="img" style="cursor: pointer;">Images</a>
  			</li>
  			<li class="collection-item">
  				<a href="">Comments</a>
  			</li>
  			<li class="collection-item">
  				<a href="setting.php" target="_blank">Setting</a>
  			</li>
  			<div class="divider"></div>
  			<li class="collection-item">
  				<a href="logout.php">LogOut</a>
  			</li>
  		</ul>
  		</div>
  	</div>
  	<div class="col l9 m9 s12">
  		<nav class="teal">
  	<div class="nav-wrapper">
  		<div class="container">
  		<a href="" class="brand-logo center">Shad Blog</a>
</div>
</div>
  </nav>
  
  <div class="row" id="content">
  	<div class="col l6 m6 s12">
  		<ul class="collection with-header">
  			<li class="collection-header teal">
  				<h5 class=" white-text center">Recent post</h5>
  			</li>
         <?php
          include 'dbcon.php';
          $sql="SELECT *FROM posts order by id desc";
          $res=mysqli_query($conn,$sql);
          if(mysqli_num_rows($res)>0)
          {
            while ($rows=mysqli_fetch_assoc($res)) {
            
          ?>

  			<li class="collection-item"><a href=""><?php echo $rows['title'] ?> </a>
  			<br>
<span><a href=""><i class="material-icons tiny">edit</i> Edit</a>|<a href=""><i class="material-icons tiny">delete</i>Delete</a>|<a href=""><i class="material-icons tiny">share</i>share</a></span>
  		</li>
  		<?php
}
}
      ?>
  		</ul>
  	</div>
  	<div class="col l6 m6 s12">
  		<ul class="collection with-header">
  			<li class="collection-header teal">
  				<h5 class=" white-text center">Recent Comments</h5>
  			</li>
        <?php
include 'dbcon.php';
$sql="SELECT *FROM comment order by id desc";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)>0) {
  while ($row=mysqli_fetch_assoc($res)) {
    ?>
    <li class="collection-item"><a href=""><?php echo $row['msg'];?></a>
        <br>
<span><a href=""><i class="material-icons tiny green-text">done</i> Approve</a>|<a href=""><i class="material-icons tiny ">clear</i> Remove</a>|</span>
      </li>
    <?php
  }
}
        ?>
  			
  		
  		</ul>
  	</div>
  </div>
  <div class="fixed-action-btn" id="edit">
  	<a class="btn-floating btn btn-large white-text pulse" ><i class="material-icons">edit</i> </a>
  </div>
  	</div>
  </div>
<?php
}
else
{
$_SESSION['login']='<p style="text-align: center;color: teal;">Login To Continue</p>';
header('location:form.php');
} 
?>
<!--JQUERY -->

 <script type="text/javascript">
$(document).ready(function(){
$('#edit').click(function(){
$('#content').load('write.php')
});
$('#post').click(function(){
$('#content').load('post.php')
});
$('#img').click(function(){
$('#content').load('images.php')
});

});
</script>
