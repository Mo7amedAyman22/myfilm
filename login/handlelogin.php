<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $email = $_POST['Email'];
    $password = password_hash($_POST['Password'], PASSWORD_DEFAULT); 

    $server = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "login";

    $con = new mysqli($server, $dbUser, $dbPassword, $dbName);

    if ($con->connect_error) {
        die("Error: " . $con->connect_error);
    }

    $query="INSERT INTO userinfo (firstname, lastname, email, password)
            VALUES( '$firstname', '$lastname', '$email', '$password')";

        if($con->query($query)==true)
        {
            header("Location: ../MyFilm.html");
        }else 
        {
            die("details ".$con->error);
        }
}
?>
