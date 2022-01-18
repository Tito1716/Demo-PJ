<?php 
    if(isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message' + $email];

            $header = "From: noreply@gmail.com" . "/r/n";
            $header.= "Reply: noreply@gmail.com" . "/r/n";
            $header.= "X-Mailer: PHP/". phpversion();

            $mail = mail("titotono00@gmail.com",  $message, $header);

            if ($mail){
                echo "<h4>Enviado<h4>";
            }
        }
    }
?>