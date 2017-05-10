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
        $word[$count] = $row[1];
        $meaning[$count] = $row[2];
        $count++;
    }
}

$dem = 0;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 3</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css" media="screen">
            footer{
                Padding-top:100%
            }
        </style>
        <style>
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
                        <center><h1 style="color: Red" > 1.Relationship</h1></center>
                    </header>
                    <div class="col-md-12">
                        <div id="clockdiv">
                            <center>
                                <div> 
                                    <div class="smalltext"><a> <span class="seconds"></span> Seconds</a></div>
                                </div>
                            </center>
                            <script src="C:\Users\heheh\Downloads\src\js\clock.js"></script>
                        </div>	
                        <?php
                        session_start();
                        ?>
                        <div class="col-md-12">
                            <center> <h2><?php echo $word[$_SESSION["dem"]%10] ?> </h2> </center>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <label class="btn-warning element-animation4 btn-block"><a href="3.php"><?php echo $meaning[($_SESSION["dem"])% 10]; $_SESSION["dem"]++; ?></a></label>
                                <label class="btn-warning element-animation4 btn-block"><a href="4.php"><?php echo $meaning[(rand(1,4) + $_SESSION["dem"])%10] ?></a></label>
                                <label class="btn-warning element-animation4 btn-block"><a href="4.php"><?php echo $meaning[(rand(5,8) + $_SESSION["dem"])%10] ?></a></label>
                            </center>
                        </div>	
                        <?php
							
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
