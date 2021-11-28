<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

	<h2>Palindrome Validator</h2>
	<h4>The function accepts a string as input and returns the message if
		input String is palindrome or not.</h4>

	<!-- A simple form to facilitate call to palindrome function. The form leverages the capabilities offered via use of regular expressions
      to validate the input. On click of a Button the form will call a function to validate if the string is Palindrome -->
	<div class="container">
		<form action="palindrome.php" method="post">
			<div class="row">
				<div class="col-25">
					<label for="fname">Enter String:</label>
				</div>
				<div class="col-75">
					<input type="text" id="str" name="val"<input type="text" id="val"
						pattern="^[a-zA-Z0-9]*" title="Only Alpha Numeric Values"
						placeholder="Enter your string...">
				</div>
			</div>
	
	</div>
	<div class="row">
		<input type="submit" value="Validate Palindrome">
	</div>
	</form>
	</div>

</body>
</html>
