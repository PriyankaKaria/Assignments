<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Link to Style Sheet -->
<link rel="stylesheet" href="style.css">
</head>
<body>

	<h2>
		Mulitiple of 4 or 6 or both <br />
	</h2>
	<h4>The function accepts an array of numbers as input and returns the
		count of numbers which are multiples of 4 or 6 or both.</h4>

	<!-- A simple form to facilitate call to palindrome function. The form leverages the capabilities offered via use of regular expressions
        to validate the input. The form accepts only positive or negative integers separated by comma.
        On click of a Button the form will call a function to validate if the string is Palindrome -->


	<div class="container">
		<form action="arrayFunction.php" method="post">
			<div class="row">
				<div class="col-25">
					<label for="fname">Enter Numbers:</label>
				</div>
				<div class="col-75">
					<input type="text" name="val"<input type="text" id="val"
						pattern="^(-?[0-9])+(,-?[0-9]+)*$"
						title="Only Numbers Separated with Comma" required="true"
						placeholder="Enter numbers...separated with Comma,E.g. 12,4,5,55,77">
				</div>
			</div>
	
	</div>
	<div class="row">
		<input type="submit" value="Find Multiples">
	</div>
	</form>
	</div>

</body>
</html>
