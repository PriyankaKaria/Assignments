<html>
<head> <h2>Multiples of 4/6 or both</h2>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head> 
 <body>
<?php

/**
 * 
 * @param  $arr : The array of Numbers to be tested for given Criteria
 * @return $resultArr[] : The array with numbers that are either multiple of 4 or 6 or both
 * The function accepts array as an input. retrives the numbers that are multiple of 4 or 6 or both and returns the array with those values
 */
function multiples($arr)
{
    /** 
     * 
     * @var $n : Length of An array.
     */
    $n =sizeof($arr);
    $count=0;
    $arr1=array();
    
   
    for ($i = 0; $i < $n; $i++)
    {
        if($arr[$i]!=0)
        {
            /** **
             *  check if the number is multiple 6.
             */
            if($arr[$i]%6==0)
                if($arr[$i]%4==0)
                    /**
                     *  check if the number is multiple both 4 and 6.
                     */
          {
                    $arr1[$count]=$arr[$i];
                    $count++;
                }
   else
           
            {
                $arr1[$count]=$arr[$i];
                $count++;
            }
            else
                /*
                 * Check if multiple of 4
                 */
                if($arr[$i]%4==0)            {
                    $arr1[$count]=$arr[$i];
                    $count++;
                }
        }
    }
    return $arr1;
}

?>
<!-- PHP funtion ends here. Following code snippet calls the function and extract the results  -->
 <?php 
        /** Read the input String from the form **/
        $testString =$_POST["val"];
        if (empty($testString)) {
            print "You have left the name field empty. You must enter a test String.";
        }else {
            /**
             * Use explode() function to convert input comma separated string into an array.
             * @var $arr : Array Converted from String
             */
            $arr=explode(",", $testString);
            print "Sorted array of input numbers:</br>";
            sort($arr);
            $len=sizeof($arr);
            for ($i = 0; $i < $len; $i++)
                print "$arr[$i] ";
        
                /**Call the multiples function to get the results **/
                $resultArr=multiples($arr);
           
           
           $n=sizeof($resultArr);
           sort($resultArr);
           
           /**Print the findings from the results **/
           
           if($n!=0)
           {
               if($n==1)
               {
                   print "</br></br></br>Following number is multiples of 4 or 6 or both:</br>";
                   for ($i = 0; $i < $n; $i++)
                       print "$resultArr[$i] ";
               }
               else
               {
                   print "</br></br></br>Following $n numbers are multiples of 4 or 6 or both:</br>";
                   for ($i = 0; $i < $n; $i++)
                       print "$resultArr[$i] ";
               }
           }
           else
               print "</br></br></br>None of the number is multiples of 4 or 6. </br>";
        
        }
        ?>
        <br/>
        <br/>
        <!-- Back button for better nevagiation -->
        <input type="submit" value="Back" <a href="#" onclick="history.back();" ></a>
	</body>
</html>
