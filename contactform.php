<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $nsubject = $_POST['subject'];

    $mailto = "hendrickp23@gmail.com";
    $headers = "From: ".$name;
    $txt = "You have received an e-mail from ".$name.".\n\n".$subject

    mail($mailto, $email, $product, $txt, $headers);
    header("Location: index.html?mailsend");
}

