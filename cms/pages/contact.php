  <?php
  include 'navbar.php';
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
  <style type="text/css">
  	#touch {
    left: 235px;
    top: 0;
    color: teal;
    font-weight: 700;
}
#bg {
    background:url('../siteimg/contact.png');
    width: 100%;
    height: 100vh;
}
.btn{
	border-radius: 20px;
}
  </style>
  <div id="bg">
<div class="row">
	<div class="col l6 offset-l3 m4 offset-m4 s12 ">

	<div class="card">
	<div class="card-image">
		<img src="../siteimg/contact-us.jpg" class="responsive-img" alt="">
		<h1 class="card-title" id="touch">Get In Touch</h1>
		<p class="center">
		<span id="err" >Feel Free To Drop A Line Below</span>
	</p>
		</div>
		<div class="card-content">
			<form action="contact_check.php">
				<div class="form-input">
					<input type="text" name="name" placeholder="Name.." autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
				</div>
				<div class="form-input">
					<input type="text" name="name" placeholder="Email.." autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
				</div>
				<div class="form-input">
					<input type="text" name="name" placeholder="Subject.." autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
				</div>
				<div class="form-input">
					<input type="text" name="name" placeholder="Message.." autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
				</div>
				<br>
				<div class="center">
				<input type="submit" name="submit" value="Send" class = "btn waves-effect waves-teal hoverable ">
				</div>
			</form>
		</div>
	
	</div>
</div>
</div>
</div>