<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_['message'];

        $header = "Portfolio email from:".$email;
        $body = "You recieve email from: ".$name.".\n\n".$message;

        $mailTo = "alussius@yahoo.com";

        mail($mailTo, $header, $body);
        header("Location: index.html?mailsent");
    }
?>