<?php
require("session.php");
?>
<html>
<head>
	<title>fit_ai</title>
	<link rel="stylesheet" href="style_for_login_and_website.css">
	
</head>

<body>
	<header>
		<div class="row">
			<div class="logo">
				<img src="logo2.png">
			</div>
			<ul class="main-nav">
				<li class="active"><a href="website.html">HOME</a></li>
				<li><a href="Recipes.html">RECIPES</a></li>
				<li><a href="stopwatch.html">STOPWATCH/TIMER</a></li>
				<li><a href="commentbox.html">COMMUNITY</a></li>
				<li><a href="ABOUT.html">ABOUT</a></li>
			</ul>

		</div>
		<div. class="hero">
			<h4>Welcome to FitAI</h4>
			<div class="heroo">
				<left><tr>
					<td><font color="white">Number of Calories Consumed?</font></td>
					<td><input type="text" name="noc" id="noc"
					size="30"></td>
					<br>
					<td><font color="white">Exercises Completed</font></td>
					<td><input type="text" name="Exercises" id="Exercises"
					size="30"></td><button>Submit</button>
				</tr></left>
					<br><br>
				<p><font color="white">your bmr is 1700 calories</font></p>
							<br>
				<p>your bmi is 20</p>
			</div>

			<div class="button">
				<a href="info.html" class="btn btn-one">PERSONAL INFORMATION</a>
				<a href="progress-pictures.html" class="btn btn-two"> PROGRESS PICTURES</a>
			</div>
		</div>
	</header>
</body>