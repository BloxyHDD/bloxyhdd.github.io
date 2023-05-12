<?php 
if(isset($_POST['submit'])){
    $to = "matejwernisch@email.cz"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address

    $subject = "Commission sent from website! Objednávka";

    $subject2 = "Commission to BloxyHDD"; //co prijde senderovi

    $message = $_POST['message'];
    $message2 = "Thanks for your commission, I will reply ASAP!, (This message was sent by a bot, not me!)";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: index.html');
    }
?>
