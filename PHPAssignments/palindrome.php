<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<h2>Palindrome Validator Results</h2>
	<h4> 
<?php

/*
 * @param $string : String to be checked if it is palindrome.
 * The Function Accepts String as an argument, and validates if string is Palindrome.
 * The Function leverages the Recursive capabilities, to call itself when compare two different characters
 * sequnces from Front and beginning.
 *
 * The function is case sensitive. It returns not a palindrone result if the characters are equal but different in cases
 *
 */
function Palindrome($string)
{
    /**
     * Return the message stating that String is palindrome if the length is either 0 or 1.
     */
    if ((strlen($string) == 1) || (strlen($string) == 0)) {
        echo "Palindrome";
    } else {
        /**
         * Compare the first and last Character from the String.
         * If They found to be equal,
         * remove them and call the function again by removing the compared characters. Because of conditoion
         * stated above the comparison will continue until all the charactes are compared.
         */
        if (substr($string, 0, 1) == substr($string, (strlen($string) - 1), 1)) {
            return Palindrome(substr($string, 1, strlen($string) - 2));
        } else {

            /**
             * At any point in comparison, if the characters at first and last of the String are found not to be equal
             * function returns the message stating the String is not a palindrome and exits the loop.
             */
            echo "not a Palindrome";
        }
    }
}

?>
            <!-- PHP funtion ends here. Following code snippet calls the function and extract the results  -->
<?php
            /**
             * Read the value passed from Input form, Save it in a variable*
             */
        $testString = $_POST["val"];

            /**
             * Check if null or empty string is passed.
             * *
             */
        if (empty($testString)) {
            echo 'You have left the name field empty, You must enter a test String...';
        } else {
            echo "Entered String $testString is ";
            /**
             * Call the function to test if the input String is Palindrome.
             * *
             */
            Palindrome($testString);
        }

    ?>
        <br>
        	</h4>
        	<!-- Back Button for Better Navigation -->
        	<input type="submit" value="Back"
        	<a href="#" onclick="history.back();"></a>
        </body>
</html>