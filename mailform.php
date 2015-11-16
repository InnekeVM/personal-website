<?php

if (isset($_POST["submit"])) {
    if ($_POST["naam"] == "" || $_POST["email"] == "" || $_POST["bericht"] == "") {
        echo "<script>alert('Gelieve alle velden in te vullen');</script>";
    } else {
        // check if sender's e-mail is valid
        $email = $_POST["email"];
        //sanitize
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        //validate
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            echo"<script>alert('Onjuist e-mailadres');</script>";
        } else {
            $to = "innekevanmechelen@gmail.com";
            $subject = "via website";
            $message = $_POST["bericht"];
            $headers = "from:" . $_POST["email"];
            mail($to, $subject,$message, $headers);
            echo "<script>alert('Bedankt voor je bericht!');</script>";
        }
    }
}
?>