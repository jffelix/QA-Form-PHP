<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submitUser"])) {

        // similar to mysql_connection in mysql library
        $connect = mysqli_connect('localhost', 'root', '', 'userInfo') or die('Connection failed: ' .mysqli_connect_error());

        // checks if both input fields are not blank
        if ($_POST["name"] !== null && $_POST["email"] !== null) {

            $name = $_POST["name"];
            $email = $_POST["email"];

            // similar to queryStr
            $sql = "INSERT INTO user (name, email, difficulty, learning, adapt, grateful) VALUES ('$name', '$email', null, null, null, null)";

            // invokes the sql statement to the database
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