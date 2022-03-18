<?php
    // // isset is connected to action attribute from form
    // if (isset($_POST["submit"])) {
    //     $name = $_POST["name"];
    //     $email = $_POST["email"];

    //     Echo "Welcome " . $name;
    // } 

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submitUser"])) {

        $connect = mysqli_connect("localhost", "root", "", "userInfo") or die("Connection failed: " .mysqli_connect_error());

        if ($_POST["name"] !== null && $_POST["email"] !== null) {

            $name = $_POST["name"];
            $email = $_POST["email"];

            $sql = "INSERT INTO `user` (`name`, `email`) VALUES ('$name', '$email')";

            $query = mysql_query($connect, $sql);

            if ($query) {
                Echo "User form successfully submitted!";
            } else {
                Echo "Error occurred.";
            }
        }
    }