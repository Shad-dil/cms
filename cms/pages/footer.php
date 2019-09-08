<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
  <footer class="page-footer teal">
  <div class="row">
  	<div class="col l4 m4 s12">
  		<h5 class="center">Usefull Links</h5>
  		<ul class="collection center">
  			<li class="collection-item"><a href="http://localhost/cms/pages/download.php">Download</a></li>
  			<li class="collection-item"><a href="http://localhost/cms/pages/about.php">About Us</a></li>
  			<li class="collection-item"><a href="http://localhost/cms/pages/contact.php">Contact us</a></li>
  		</ul>
  	</div>
    	<div class="col l4 m4 s12">
  		<h5 class="center">Recent Post</h5>
  		<ul class="collection center">
  			<?php
$conn=mysqli_connect('localhost','root','','user');
$sql="SELECT *FROM posts order by id desc limit 3";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
  while ($row=mysqli_fetch_assoc($res)) {
   ?>
   <li class="collection-item"><a href="http://localhost/cms/pages/single_post.php?id=<?php echo $row['id'];?>">
     <?php echo $row['title']?>
   </a></li>
   <?php 
  }
}
        ?>
  			
  		</ul>
  	</div>
      <div class="col l4 m4 s12">
      <h5 class="center">Follow Us</h5>
      <ul class="center">
        
        <li class="collection-item"><a class="waves-effect waves-light btn-floating social instagram hoverable">
<i class="fa fa-instagram"></i> Sign in with instagram</a></li>
        <li class="collection-item"><a class="waves-effect waves-light btn-floating social twitter hoverable">
<i class="fa fa-twitter"></i> Sign in with twitter</a></li>
        <li class="collection-item"><a class="waves-effect waves-light btn-floating social facebook hoverable">
<i class="fa fa-facebook "></i> Sign in with facebook</a></li>
      </ul>
    </div>

  </div>
  	<div class="footer-copyright">
  		<div class="container">
  		&copy; All Rights Reserved, Shad Blog 
  		</div>
  	</div>
  </footer>