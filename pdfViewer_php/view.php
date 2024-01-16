<?php

if(isset($_POST['submit'])){
	header('Location:read.php');
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Read pdf</title>
</head>

	<style type="text/css">

		*{
			font-family: sans-serif;
		}

		.container{
			height: 10rem;
			width: 50%;
			display: flex;
			justify-content: center;
			align-content: center;
			flex-direction: column;

		}

		button{
			height: 50px;
			width: 220px;
			background-color: crimson;
			border: 1px solid black;
			outline: none;
			color: white;
			font-size: 1.5rem;
			cursor: pointer;
		}
		.hero{
			padding-top: 90px;
		}
	</style>
<body>

	<div class="container">
		<div class="wrapper"></div>
			<h1 class="hero">Read PDF files</h1>
	</div>
	
	<div class="wrapper">
		<img src="dsa_Bookpic.jpg" class="image" height="300px" width="200px" margin-right
		: 50% >
	</div>

	<div class="wrapper">
		<form method="POST">
			<button type="submit" name="submit" value="submit">Read PDF</button>
		</form>
	</div>

		<div class="wrapper">
			<h3>Made with <span>22</span>DSA</h3>
		</div>


</body>
</html>