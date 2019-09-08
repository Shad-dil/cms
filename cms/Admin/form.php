 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../materialcss/css/materialize.min.css.">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../jquery/jquery-ui.min.css">
  <script type="text/javascript" src="../jquery/jquery.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>
  <style type="text/css">
     .card-panel{
      position: relative;
      top: 60px;
     }
     #crd{
          /*background: teal;
    color: #fff;*/
    transition: 0.6s ease-in;
     }
  </style>
 <div class="row">
    <div class="col l6 offset-l3 m9 offset-m4">
       <?php
  SESSION_START();
if(isset($_SESSION['message'])){
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}   
if(isset($_SESSION['error'])){
  echo $_SESSION['error'];
  unset($_SESSION['error']);
}


?>
<?php
if (!isset($_SESSION['username'])) {
  ?>
 <div class="card-panel" id="crd">
  <?php
if(isset($_SESSION['error_msg'])){
  echo $_SESSION['error_msg'];
  unset($_SESSION['error_msg']);
}

if(isset($_SESSION['login'])){
  echo $_SESSION['login'];
  unset($_SESSION['login']);
}
         ?>
         <p class="center" id="login">
<span class="flow-text" id="login_frm">Login</span>
         </p>

       <form action="log_check.php" method="post" id="login_form">
        <div class="input-field">
          <input type="text" name="username" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" placeholder="UserName" id="user1">
      <span id="error_msg"></span>
       </div>
       <div class="input-field">
            <input type="Password" name="pwd" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" placeholder="Password" id="pass1">
       </div>
        <div class="input-field center">
<input type="submit" name="submit" Value="Login" class="btn waves-effect waves-light teal hoverable center" id="sub_mit1">
<!--<a href="" class="right" style="cursor: pointer;">forgot Pasword</a> --> 
       </form>
 </div>
 <script type="text/javascript">
 $(document).ready(function(){
$('#sub_mit1').click(function(){
var user=$('#user1').val();
if(user==""){
$('#error_msg').html('username Cant be Blank').css('color','rgb(216, 60, 60);');
return false;
}
var pass=$('#pass1').val();
if(pass==""){
$('#error_msg').html('Password Cant be Blank').css('color','rgb(216, 60, 60)');
return false;
}
});
    });
 </script> 
 <?php
}
else
{
  header('location:dashboard.php');
}
?>
       