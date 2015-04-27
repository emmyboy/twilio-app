<?php

$request_headers = getallheaders();
if (isset($request_headers['X-Twilio-Signature'])) {
    header('Content-type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';
 
    echo '<Response>';
    echo '<Gather action="fizzbuzz.php">';
    echo '<Say>Welcome to my coding challenge.</Say>';
    echo '<Say>Please enter a number you wish to fizzbuzz followed by the pound key.</Say>';
    echo '</Gather>';
    echo '</Response>';
}
else {
print '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <title>Coding challenge</title>
        </head>
	<body>
	<form method="POST" action="phases.php">
	Enter a 10-digit phone number to dial: <input type="text" name="fb" size="10" /><br /><br />
	Enter the time delay (in secs) for call: <input type="text" name="delay" size="5" /><br />
	<input type="submit" name="submit" value="FizzBuzz" />
        </form>
	</body>
	</html>';
}

?>
