<?php

require ("..PATHTO/Postmark.php");

$postmark = new Postmark("your-api-key","from","optional-reply-to-address");

	  //$file_as_string = base64_encode("Dummy content");
      //$file_as_string = "Dummy content";
      //both are supported

	  $result = $postmark->to("pulkitbhatiais13@gmail.com")
		->subject("Email Subject")
		->plain_message("This is a plain text message.")
		->attachment('File1.pdf', $file_as_string, 'application/pdf')
		->send($response,$http_code);

    if( $result ) {
        echo 'The email was sent!';
      } else {
        echo 'The email could not be sent!';
      }
      // Show the response and HTTP code
      echo '<pre>';
      echo 'The JSON response from Postmark:<br />';
      print_r($response);
      echo 'The HTTP code was: ' . $http_code;
      echo '</pre>';
     }