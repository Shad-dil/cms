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
include 'dbcon.php';
?>
<div class="row">
	<div class="col l12 m12 s12">
		<div class="card-panel">
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
<span><a href="edit.php?id=<?php echo $rows['id'] ?>"><i class="material-icons tiny">edit</i> Edit</a>|<a href="delete 	.php?id=<?php echo $rows['id'] ?>" class="delete" id="<?php echo $rows['id'] ?>"><i class="material-icons tiny">delete</i>Delete</a>|<a href=""><i class="material-icons tiny">share</i>share</a></span>
  		</li>
  		<?php
}
}
      ?>
  		</ul>
  	</div>
	</div>
</div>
<script type="text/javascript">
	
	const del=document.querySelectorAll(".delete");
	del.forEach(function(item,index){
item.addEventListener("click",deleteNow);
});
function deleteNow(e){
	e.preventDefault();
	if(confirm("Dou You Want To Delete")){
const xhr=new XMLhttpRequest();
xhr.open("GET","delete.php?id="+NUMBER(e.target.id)+,true);
xhr.send();
	}
	else{

	}
}
</script>