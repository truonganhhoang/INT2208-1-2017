<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>4</title>

		<meta name="description" content="Source code generated using layoutit.com">
		<meta name="author" content="LayoutIt!">
		<link href="css/style.css" rel="stylesheet">
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

		<div class="container-fluid">
			<div class="row">
				<div class="row">
					<div class"col-md-12">
						<center>
							<h1 style="color: red">Game Over</h1>
						</center>							
						<center><img src="https://i.ytimg.com/vi/KJOjrXA9fZg/hqdefault.jpg"></center>
						<center>
							<?php 
								session_start();
								echo 'New score: '.($_SESSION["dem"]-1); 
							?>
							
						</center>
						<center>						
							<?php
								if ($_SESSION["best"]<$_SESSION["dem"]) {$_SESSION["best"]=($_SESSION["dem"]-1);}
								echo 'Best score: '.$_SESSION["best"];
							?>
						</center>
						</br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<center>
							<a href = "3.php" style="text-decoration: none;">
							<button type="button" class="btn btn-default">
								Play Again
								<?php $_SESSION["dem"]=0; ?>
							</button>
							</a>
							<a href = "index.php" style="text-decoration: none;"> 
							<button type="button" class="btn btn-default">
								Menu 
							</button></a>
						</center>
					</div>
				</div>
					</br>
			</div>
		</div>		
	<footer style="text-align: center">
	© C3H, Inc.
	</footer>
    
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>