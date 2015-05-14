<?php

   if (preg_match('/^\d+$/',$_POST['delay']) && ($_POST['delay'] > 0)) {
    //Implement time delay here
    sleep($_POST['delay']);

    // Include the Twilio PHP library
    require ('twilio-php-master/Services/Twilio.php');
 
    // Set our Account SID and AuthToken
    $account_sid = 'ACf24e2df1cbb1caffa21765dd70240524';
    $auth_token = '13cxxxxxxxxxxxxxxxxxxxxxxxc5ac';
 
    // Instantiate a new Twilio Rest Client
    $client = new Services_Twilio($account_sid, $auth_token);
    $myphone = '415xxxxxx';
    
    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            $myphone, // The number of the phone initiating the call
            $_POST['fb'], // The number of the phone receiving call
            'index.php' // The URL Twilio will request when the call is answered
        );
        echo 'Started call: ' . $call->sid;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
  } 
  else {
	  header('Location: index.php');
  }
 
?>
