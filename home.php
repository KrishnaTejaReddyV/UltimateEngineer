<html>
<head>
<title>
Ultimate Engineer
</title>
</head>

<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="css/extra.css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/extra.js"></script>

<body>

<!--Navbar with logo-->
<div id="logo" class="navbar center">
<nav  style="height:15%" class="blue darken-4">
<div class="row ">
<img src="logo.png" class="col s12">

</div>
</nav>
</div>
<!--Navbar with logo end-->


<!--Navbar with tabs-->
  <div id="nav" class="navbar row z-depth-2">
  <nav style="height:13%;padding:1%" class=" blue darken-4">
	<div class="center white-text " style="font-size:60px">Ultimate Engineer</div>
  </nav>
</div>
<!--Navbar with tabs ends-->
  

<!--Content below navbar(random example)-->
<div class="center"><h2>Login</h2></div>
<form method="post" action="<?php echo $current_file;?>" autocomplete="off">
<div class="row">
<div class="input-field col s10 offset-s1">
<input type="text" id="name" name="name" class="validate" >
<label for="name">Enter Name</label>
</div>
<div class="input-field col s10 offset-s1">
<input type="text" id="rn" name="rn" class="validate" >
<label for="rn">Enter Registration Number</label>
</div>
<div class="input-field col s10 offset-s1">
<input type="text" id="mn" name="mn" class="validate" >
<label for="mn">Enter Mobile Number</label>
</div>

</div><br>
<div class="row center">
<button class="btn red darken-1 large waves-effect waves-light col s2 offset-s1" type="submit" name="action">Start the Game !!
    <i class="mdi-content-send right"></i>
  </button>
</div>
</form>
<!--Content below navbar ends-->



  
  <?php
  include_once('data_connect.php');
  include_once('core.php');
if(isset($_POST['name'])&&isset($_POST['rn'])&&isset($_POST['mn'])){
$name=$_POST['name'];
$mobile=$_POST['mn'];
$regno=$_POST['rn'];

if(!empty($name)&&!empty($mobile)&&!empty($regno)){
$querycheck="select Name from user where RegistrationNumber='$regno'";
if(!mysql_num_rows(mysql_query($querycheck))){
$query="insert into user(Name,RegistrationNumber,MobileNumber,QS_no) values('$name','$regno','$mobile',1)";
mysql_query($query);
setcookie("sno",1, time() + (86400 * 1), "/");
setcookie("regno",$regno, time() + (86400 * 1), "/");
} 
$queryget="select QS_no from user where RegistrationNumber='$regno'";
setcookie("sno",implode(mysql_fetch_row(mysql_query($queryget)))); 
header('Location: main.php');
}
}
else{
//ADD STUFF
}
?>
  
  
  

  
</body>
</html>