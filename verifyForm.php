<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submitUser"])) {

        $connect = mysqli_connect('localhost', 'root', '', 'userInfo') or die('Connection failed: ' .mysqli_connect_error());

        if ($_POST["name"] !== null && $_POST["email"] !== null) {

            $name = $_POST["name"];
            $email = $_POST["email"];

            $sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";

            $query = mysqli_query($connect, $sql);

            session_start();

            $_SESSION["name"] = $name;

            if ($query) {
                Echo "User form successfully submitted!";
            } else {
                Echo "Error occurred.";
            }
        }

        header("Location: questions.php");
    }