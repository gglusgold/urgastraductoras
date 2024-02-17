<?php 
if(isset($_POST['submit'])){
    
    $to = "urgas@protonmail.com"; 
    $from = $_POST['email']; 
    if(empty($from)){
        exit;
    }
    $name = $_POST['name'];
    $subject = "Consulta desde urgas website";
    $message = $name . " " . " envió el siguiente mensaje:" . "\n\n" . $_POST['comments'];
    
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    
    //$subject2 = "Copy of your form submission";
    //$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['comments'];
    //$headers2 = "From:" . $to;
   // mail($from,$subject2,$message2,$headers2); // copy of the message to the sender
}
?>