<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>
		<style type="text/css">
			h1 {
				text-align:center;
			}
			.result-box {
				width: 300px;
				margin: 0 auto;
				font-size: 20px;
				border: 1px solid darkslategray;
				border-radius: 10px;
				padding: 10px;
				box-sizing: border-box;
			}
		</style>
</head>
	<body>

		<h1>Welcome to GPA Calculator</h1>

		<?php
			function checkMarkRange($mark1, $mark2, $mark3, $mark4, $mark5){
				
				switch (true) {
					case (0 <= $mark1 && 100 >= $mark1) &&
							 (0 <= $mark2 && 100 >= $mark2) &&
							 (0 <= $mark3 && 100 >= $mark3) &&
							 (0 <= $mark4 && 100 >= $mark4) &&
							 (0 <= $mark5 && 100 >= $mark5):
								return true;
				}
			}
			
			function isFailed($mark1, $mark2, $mark3, $mark4, $mark5){
				
				switch(true){
					case 33 > $mark1:
					case 33 > $mark2:
					case 33 > $mark3:
					case 33 > $mark4:
					case 33 > $mark5:
						return true;
				}
			}

			function grade($n){
				
				switch ($n) {
					case ($n >= 80 && $n < 100):
						return "A+";
					case ($n >= 70  && $n < 80):
						return "A";
					case ($n >= 60 && $n < 70):
						return "A-";
					case ($n >= 50 && $n < 60):
						return "B";
					case ($n >= 40 && $n < 50):
						return "C";
					case ($n >= 33 && $n < 40):
						return "D";
					case ($n >= 0 && $n < 33):
						return "F";
					default:
						return false;
				}
			}
			
			echo "<br>";

			function markCalculation($mark1, $mark2, $mark3, $mark4, $mark5){
				
				$total_marks = $mark1 + $mark2 + $mark3 + $mark4 + $mark5;
				$average_marks = $total_marks / 5;
				
				switch (true){
					
					case (!checkMarkRange($mark1, $mark2, $mark3, $mark4, $mark5)):
						return "<div class='result-box'>Mark range is invalid.<br>Please provide valid mark.</div>";
					
					case (isFailed($mark1, $mark2, $mark3, $mark4, $mark5)):
						return "<div class='result-box'>Grade: F<br>The student has been failed.</div>";
					
					default :
						$result = "Total Marks: {$total_marks}<br>Average Marks: {$average_marks}<br>Grade: ".grade($average_marks);
				return "<div class='result-box'>".$result."</div>";
				}
			}
			
			// Write 5 subjects' marks in the markCalculation function given bellow.
			echo markCalculation(79.5,74.5,74,55,55);

		?>

	</body>
</html>
