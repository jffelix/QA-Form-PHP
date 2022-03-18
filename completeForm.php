<?php
    session_start();
    $idName = $_SESSION["name"];

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submitAnswers"])) {

        $connect = mysqli_connect('localhost', 'root', '', 'userInfo') or die('Connection failed: ' .mysqli_connect_error());

        if ($_POST["difficulty"] !== null && $_POST["learning"] !== null && $_POST["adapt"] !== null && $_POST["grateful"] !== null) {
            $difficulty = $_POST["difficulty"];
            $learning = $_POST["learning"];
            $adapt = $_POST["adapt"];
            $grateful = $_POST["grateful"];

            $updateSql = "UPDATE user SET difficulty = '$difficulty', learning = '$learning', adapt = '$adapt', grateful = '$grateful' WHERE name = '$idName';";

            $updateQuery = mysqli_query($connect, $updateSql);

            if ($updateQuery) {
                Echo "Thank you for taking the survey. You may close this window.";
            } else {
                Echo "Error occurred.";
            }
        }
    }