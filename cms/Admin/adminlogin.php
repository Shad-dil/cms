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
  SESSION_START();
if(isset($_SESSION['error_msg'])){
	echo $_SESSION['error_msg'];
	unset($_SESSION['error_msg']);
}
  ?>
 <form action="adminlog_check.php" method="post">
        <div class="input-field">
         <input type="text" id="user1" name="username" placeholder="UserName">
      <span id="error_msg"></span>
       </div>
       <div class="input-field">
         <input type="Password" name="pwd" placeholder="Password" id="pass1">
       </div>
        <div class="input-field center">
<input type="submit" name="submit" Value="Login" class="btn waves-effect waves-light teal hoverable " id="sub_mit1">  
       </form>
       <script type="text/javascript">
       	$(document).ready(function(){
       		$('#sub_mit1').click(function(){
var user=$('#user1').val();
if(user==""){
$('#error_msg').html('username Cant be Blank').css('color','red');
return false;
}
var pass=$('#pass1').val();
if(pass==""){
$('#error_msg').html('Password Cant be Blank').css('color','red');
return false;
}
});
       	})
       </script>