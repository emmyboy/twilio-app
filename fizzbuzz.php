<?php
    header('Content-type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';
 
    echo '<Response>';
 
    # @start snippet
    $user_pushed = (int) $_REQUEST['Digits'];
    # @end snippet

   for($i = 1;$i <= $user_pushed;$i++){
        if (($i % 15)==0) {
	   echo '<Say>FizzBuzz.</Say>';
        }
        elseif (($i % 5)==0) {
	   echo '<Say>Buzz.</Say>';
        }
        elseif (($i % 3)==0) {
	   echo '<Say>Fizz.</Say>';
        }
        else echo "<Say>$i</Say>";
   } 
    echo '</Response>';
?>
