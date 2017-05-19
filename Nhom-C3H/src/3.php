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

$sql = "select * from db order by Id asc";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error' . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    $count = 0;
    $word = array();
    $meaning = array();
    while ($row = mysqli_fetch_row($result)) {
        $id[$count] = $row[0];
		$word[$count] = $row[1];
        $meaning[$count] = $row[2];
        $count++;
    }
}

session_start();
$temp = $_SESSION['tId'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css" media="screen">
            footer{
                Padding-top:35%
            }
            body{
                background-color: #FFFF99;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <header id="header" style="background-color: #FFFF99;">
                        <center>
							<h1 style="color: Red" ><?php echo $_SESSION['tName'] ?></h1>
						</center>
                    </header>
                    <div class="col-md-12">
                        <div id="clockdiv">
                            <center>
                                <div> 
                                    <div class="smalltext"><a> <span class="seconds"></span> Seconds</a></div>
                                </div>
                            </center>
                            <script>
								function getTimeRemaining(endtime) {
								var t = Date.parse(endtime) - Date.parse(new Date());
								var seconds = Math.floor((t / 1000) % 60);
								var minutes = Math.floor((t / 1000 / 60) % 60);
  
								return {
									'total': t,
									'seconds': seconds
								};
								}

								function initializeClock(id, endtime) {
									var clock = document.getElementById(id);
									var secondsSpan = clock.querySelector('.seconds');

								function updateClock() {
									var t = getTimeRemaining(endtime);
									secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
									if (t.total <= 0) {
										clearInterval(timeinterval);
										window.location = "4.php";
									}
								}
								updateClock();
								var timeinterval = setInterval(updateClock, 1000);
								}
								var deadline = new Date(Date.parse(new Date()) + 10 * 1000);
								initializeClock('clockdiv', deadline);
							</script>
                        </div>	
                        <?php
						$arr = array(
							$temp*10+$_SESSION["dem"]%10,
							$temp*10+(rand(5,9)+$_SESSION["dem"])%10,
							$temp*10+(rand(1,4)+$_SESSION["dem"])%10
						);
						$r = rand(0,2);
						$a = $arr[$r];
						$b = $arr[($r+1)%3];
						$c = $arr[($r+2)%3];
						$check = array (false,false,false);
						if ($a==$temp*10+$_SESSION["dem"]%10) {$check[0]=true;}
							else if ($b==$temp*10+$_SESSION["dem"]%10) {$check[1]=true;}
								else {$check[2]=true;};
						?>
                        <div class="col-md-12">
                            <center> <h2><?php echo $word[$temp*10+$_SESSION["dem"]%10] ?> </h2> </center>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <label class="btn-warning element-animation4 btn-block">
									<?php 
										if ($check[0]) {echo '<a href="3.php">'.$meaning[$a].'</a>';} 
										else {echo '<a href="4.php">'.$meaning[$a].'</a>';}
									?>
								</label>
                                <label class="btn-warning element-animation4 btn-block">
									<?php 
										if ($check[1]) {echo '<a href="3.php">'.$meaning[$b].'</a>';} 
										else {echo '<a href="4.php">'.$meaning[$b].'</a>';}
									?>
								</label>
                                <label class="btn-warning element-animation4 btn-block">
									<?php 
										if ($check[2]) {echo '<a href="3.php">'.$meaning[$c].'</a>';} 
										else {echo '<a href="4.php">'.$meaning[$c].'</a>';}
									?>
								</label>
                            </center>
                        </div>	
						<?php
						$_SESSION["dem"]++
                        ?>
                    </div>
                    <div class="footer" >
                        <center>
                            <footer>@C3H, Inc.</footer>
                        </center>
                    </div>	
                </div>
            </div>

            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/scripts.js"></script>
    </body>
</html>
