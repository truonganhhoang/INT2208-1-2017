<?php
$db = array(
    'server' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'dbname' => 'vocabulary'
);

$conn = mysqli_connect($db['server'], $db['user'], $db['pass'], $db['dbname']);

if (!$conn) {
    die('ket noi that bai' . mysqli_connect_error($conn));
}

$sql = "select * from topic order by TopicId asc";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error' . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    $count = 0;
    $topic = array();
    while ($row = mysqli_fetch_row($result)) {
        $topic[$count] = $row[1];
        $count++;
    }
}

session_start();
$_SESSION['dem']=0;

if(isset($_GET['topic'])){
	$_SESSION['tId']=$_GET['topic'];
	$_SESSION['tName']=$topic[$_GET['topic']];
	} 
else {
	$_SESSION['tId']=0;
	$_SESSION['tName']=$topic[0];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>2</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css" media="screen">
		footer{
			Padding-top:10%
		}
		body{
			background-color: #FFFF99;
		}
	</style>

  </head>
  <body>
	<center>
	<h2 id="" style="color: Red"><?php echo $_SESSION['tName'] ?><h2>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<button type="button" class="btn btn-default">
				<a href = "index.php" style="text-decoration: none;"> Back </a>
			</button> 
			<button type="button" class="btn btn-default">				
				<a href = "3.php" style="text-decoration: none;">Start Game</a>
			</button>

		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<br><img alt="Bootstrap Image Preview" src="http://www.accollege.edu.au/wp-content/uploads/2016/10/english-1.jpg" />
		</div>
	</div>
</div>
</center>
	<footer style="text-align: center">
	© C3H, Inc.
	</footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>