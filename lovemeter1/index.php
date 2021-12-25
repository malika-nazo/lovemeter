<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		form{
			text-align: center;
			margin-top: 30vh;
			font-family: "Lucida Console", "Courier New", monospace;
		}

		.class2, .button{
			margin-top: 10vh;
		}

		body{
			background-image: url(love.jpg);
			background-size: 50%;
		}
	</style>
</head>
<body>

	<form method="post">
		<div class="class1">
			<label for="name1">YOUR NAME</label>
			<input type="text" name="name1" id="name1" placeholder="Enter Your Name" required>
			<br>
			<label>
				<input type="radio" name="g1">
				MALE
			</label>
			<label>
				<input type="radio" name="g1">
				FEMALE
			</label>
		</div>

		<div class="class2">
			<label for="name2">PARTNER'S NAME</label>
			<input type="text" name="name2" id="name2" placeholder="Enter Partner's Name" required>
			<br>
			<label>
				<input type="radio" name="g2">
				MALE
			</label>
			<label>
				<input type="radio" name="g2" checked>
				FEMALE
			</label>
		</div>

		<div class="button"><button type="submit" name="button">CALCULATE LOVE %</button></div>

		<div class="php">
			<?php
				if (isset($_POST['button'])) {
					$string = "Percentage of love between ".$_POST['name1']." & ".$_POST['name2']." is ". rand(0, 100);
					echo $string;
					$file = fopen("names.txt", "a");
					fwrite($file, $string."\n");
					fclose($file);
				}	
			?>
		</div>
	</form>

	
</body>
</html>