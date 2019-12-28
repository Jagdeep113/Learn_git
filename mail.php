<?php
$to="singhjagdeep113@gmail.com";
$subject="New purchase";
$message =  
            'user email:'.$to.' "<br>"
             user email:'.$to.' "<br>"
             user email:'.$to.' "<br>"
             user email:'.$to.' "<br>"
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header="From: sales@getrealboost.com";

mail($to, $subject, $message,$header);

	




 ?>