<?php
  $sender = $_REQUEST['sender'] ;
  $message = $_REQUEST['message'] ;
  $mailAddr = 'ashs@catfingers.net';
  
  if (!isset($_REQUEST['sender'])) {
    header( "Location: contact.php?failedMessage=true" );
  } elseif (empty($sender) || empty($message)) {
  	//reload the form page with hint text to fix errors. include the info in the GET string
    header( "Location: contact.php?failedMessage=true" );
  } elseif (preg_match("/[\r\n]/", $sender)) {
  	//newlines discovered in sender addr - possible spamming attack
  	header( "Location: contact.php?failedMessage=true" );
  } else {
  	mail( $mailAddr, "contact from site:", $message, "From: $sender" );
  header( "Location: index.html" );
  }
?>