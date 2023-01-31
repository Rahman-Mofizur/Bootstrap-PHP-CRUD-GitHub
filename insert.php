<?php

include 'connect.php';

// We were using 
//          $name = $_POST['name'];
//          $email = $_POST['email']; 


// But using AJAX.jQuery we can extract with an extract Function();
extract($_POST);

if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['addressSend']) && isset($_POST['nameSend'])) {
    $sql = "INSERT into `crud_table` (name, email, mobile, address) VALUES ('$nameSend','$emailSend','$mobileSend','$addressSend')";

    $result = mysqli_query($con, $sql);
}
