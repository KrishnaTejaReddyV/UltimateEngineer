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
  $sno=$_COOKIE["sno"];
  include_once('data_connect.php');
  include_once('core.php');
$queryque="select Question from questions where S_no='$sno'";
$question=implode(mysql_fetch_row(mysql_query($queryque)));
$queryopt1="select Option1 from questions where S_no='$sno'";
$opt1=implode(mysql_fetch_row(mysql_query($queryopt1)));
$queryopt2="select Option2 from questions where S_no='$sno'";
$opt2=implode(mysql_fetch_row(mysql_query($queryopt2)));
$queryopt3="select Option3 from questions where S_no='$sno'";
$opt3=implode(mysql_fetch_row(mysql_query($queryopt3)));
$queryopt4="select Option4 from questions where S_no='$sno'";
$opt4=implode(mysql_fetch_row(mysql_query($queryopt4)));  
$queryque5="select Q_no from questions where S_no='$sno'";
$qno=implode(mysql_fetch_row(mysql_query($queryque5)));

if(isset($_POST['group1'])){
$opt=$_POST['group1'];
if(!empty($opt)){
if($sno==20)
{
if($opt==28)
{header('Location: submit.php');
}
else
{?>
<div class="center red-text">
<h3 class='header light'><?php echo "Wrong Answer!! Try Again";?></h3></div>
<?php
$queryque5="select Q_no from questions where S_no='$sno'";
$qno=implode(mysql_fetch_row(mysql_query($queryque5)));
$query1="update user set Score=Score-1 where RegistrationNumber='$regno'"; 
mysql_query($query1);
}
}
else{
$next=$sno+1;
$query="select Q_no from questions where S_no='$next'";
$qno=implode(mysql_fetch_row(mysql_query($query)));
if($opt==$qno)
{
$sno=$sno+1;
setcookie("sno",$sno);
$querychange="update user set QS_no='$sno' where RegistrationNumber='$regno'";
mysql_query($querychange);

$queryque="select Question from questions where S_no='$sno'";
$question=implode(mysql_fetch_row(mysql_query($queryque)));
$queryopt1="select Option1 from questions where S_no='$sno'";
$opt1=implode(mysql_fetch_row(mysql_query($queryopt1)));
$queryopt2="select Option2 from questions where S_no='$sno'";
$opt2=implode(mysql_fetch_row(mysql_query($queryopt2)));
$queryopt3="select Option3 from questions where S_no='$sno'";
$opt3=implode(mysql_fetch_row(mysql_query($queryopt3)));
$queryopt4="select Option4 from questions where S_no='$sno'";
$opt4=implode(mysql_fetch_row(mysql_query($queryopt4)));  
$queryque5="select Q_no from questions where S_no='$sno'";
$qno=implode(mysql_fetch_row(mysql_query($queryque5)));

}
else
{?>
<div class="center red-text">
<h3 class='header light'><?php echo "Wrong Answer!! Try Again";?></h3></div>
<?php
$queryque5="select Q_no from questions where S_no='$sno'";
$qno=implode(mysql_fetch_row(mysql_query($queryque5)));
$query1="update user set Score=Score-1 where RegistrationNumber='$regno'"; 
mysql_query($query1);
}
}
}
}

?>
  

<!--Content below navbar-->
<div class='container row'>
<form method="post" action="<?php echo $current_file;?>">
<div class="center">
<h3 class='header light'><?php echo $qno.')  '.$question;?></h3></div>
<div class="col s3 offset-s5">
    <p>
      <input class="with-gap" name="group1" type="radio" id="test1" value="<?= $opt1; ?>"/>
      <label class="black-text" for="test1"><?php echo $opt1; ?></label>
    </p>
    <p>
      <input class="with-gap" name="group1" type="radio" id="test2" value="<?= $opt2; ?>"/>
      <label class="black-text" for="test2"><?php echo $opt2; ?></label>
    </p>
    <p>
      <input class="with-gap" name="group1" type="radio" id="test3"  value="<?= $opt3; ?>"/>
      <label class="black-text" for="test3"><?php echo $opt3; ?></label>
    </p>
    <p>
       <input class="with-gap" name="group1" type="radio" id="test4" value="<?= $opt4; ?>"/>
       <label class="black-text" for="test4"><?php echo $opt4; ?></label>
    </p>
	<br>
	</div>
	<div class="col s5 offset-s4">
<button class="btn red darken-1 large waves-effect waves-light col s5 offset-s1" type="submit" name="action">Submit
    <i class="mdi-content-send right"></i>
  </button>
</div>
	</form>
	</div>
  
</body>
</html>