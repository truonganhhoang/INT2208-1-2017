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
				Padding-top:60%
			}
			body{
				background-color: #FFFF99;
			}
			h1{
				Padding-bottom: 20%			
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
							</br>
						<center>
							<?php 
								session_start();
								echo 'New score:'.($_SESSION["dem"]-1); 
							?>
						</center>
						<center>						
							<?php
								if ($_SESSION["best"]<$_SESSION["dem"]) $_SESSION["best"]=$_SESSION["dem"]-1;
								echo 'Best score:'.$_SESSION["best"];
							?>
						</center>
						</br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<center>
							<a href = "3.php" >
							<button type="button" class="btn btn-default">
								Chơi Lại 
								<?php $_SESSION["dem"]=0; ?>
							</button>
							</a>
							<a href = "1.php"> 
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