<?php

if (isset($_POST['email'])){


require_once './vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465))
    ->setUsername('your username')
    ->setPassword('your password')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Some Subject'))
    ->setFrom(['john@doe.com' => 'John Doe'])
    ->setTo([$_POST['email'] => 'Calypso'])
    ->setBody('Here is the message for email')
;

// Send the message
$result = $mailer->send($message);

}

?>


<form action ="" method="post">
    <input type="text"  name="email"  placeholder="Enter your email">
    <input type="submit" value="Mail ME">
</form>