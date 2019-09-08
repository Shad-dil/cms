<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
   <script type="text/javascript" src="../materialcss/js/materialize.min.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
   <script type="text/javascript" src="../jquery/ckeditor.js"></script>

   <!-- WRITE A POST-->
  <form action="write_check.php" method="post" enctype="multipart/form-data">
  	<input type="text" name="title" class="input-field" placeholder="Title">
  	<input type="file" name="img" class="input-field">
  	<textarea name="ckeditor" id="ckeditor" class="materialize-textarea" ></textarea>
  	<div class="center">
  	<input type="submit" name="submit" value="Publish" class="btn white-text">
  	</div>
  </form>