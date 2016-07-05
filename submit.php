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
  
  
  <?php
  $regno=$_COOKIE["regno"];
  include_once('data_connect.php');
  include_once('core.php');
if(isset($_POST['1'])&&isset($_POST['2'])&&isset($_POST['3'])&&isset($_POST['4'])&&isset($_POST['5'])&&isset($_POST['6'])&&isset($_POST['7'])&&isset($_POST['8'])&&isset($_POST['9'])&&isset($_POST['10'])){
$v1=$_POST['1'];
$v2=$_POST['2'];
$v3=$_POST['3'];
$v4=$_POST['4'];
$v5=$_POST['5'];
$v6=$_POST['6'];
$v7=$_POST['7'];
$v8=$_POST['8'];
$v9=$_POST['9'];
$v10=$_POST['10'];
if($v1==2&&$v2==10&&$v3==12&&$v4==17&&$v5==18&&$v6==21&&$v7==23&&$v8==27&&$v9==28&&$v10==29)
  header('Location: end.php');
else
?>
<div class="center red-text">
<h3 class='header light'><?php echo "Wrong Submission!! Try Again";?></h3></div>
<?php
$query1="update user set Score=Score-10 where RegistrationNumber='$regno'"; 
mysql_query($query1);
}
  ?>
  
<!--Content below navbar-->
<div class='container row'>
<form method="post" action="<?php echo $current_file;?>" autocomplete="off">
<div class="center">
<h3 class='header light'>Submit the missing 10 numbers in increasing order</h3>
<div class="input-field col s3 offset-s1">
<input type="text" id="1" name="1" class="validate" >
<label for="1">1</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="2" name="2" class="validate" >
<label for="2">2</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="3" name="3" class="validate" >
<label for="3">3</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="4" name="4" class="validate" >
<label for="4">4</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="5" name="5" class="validate" >
<label for="5">5</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="6" name="6" class="validate" >
<label for="6">6</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="7" name="7" class="validate" >
<label for="7">7</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="8" name="8" class="validate" >
<label for="8">8</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="9" name="9" class="validate" >
<label for="9">9</label>
</div>
<div class="input-field col s3 offset-s1">
<input type="text" id="10" name="10" class="validate" >
<label for="10">10</label>
</div>
<div class="col s5 offset-s5">
<button class="btn red darken-1 large waves-effect waves-light col s5 offset-s1" type="submit" name="action">Submit
    <i class="mdi-content-send right"></i>
  </button>
</div>
</div>
</form>
</div>  
<!--Content below navbar ends -->
  
</body>
</html>