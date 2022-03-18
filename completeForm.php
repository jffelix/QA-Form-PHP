<?php
    session_start();
    $idName = $_SESSION["name"];

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submitAnswers"])) {

        $connect = mysqli_connect('localhost', 'root', '', 'userInfo') or die('Connection failed: ' .mysqli_connect_error());

        if ($_POST["difficulty"] !== null && $_POST["learning"] && $_POST["adapt"] && $_POST["grateful"]) {
            $difficulty = $_POST["difficulty"];
            $learning = $_POST["learning"];
            $adapt = $_POST["adapt"];
            $grateful = $_POST["grateful"];

            $updateSql = "SELECT name, email, difficulty, learning, adapt, grateful FROM userInfo WHERE name = $sumbittedName";

            Echo $updateSql;
        }
    }