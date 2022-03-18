<!DOCTYPE html>
<html>
    <head>
        <title>Questions Form 1</title>
    </head>
    <body>
        <h1>Questions Form (Part 1)</h1>
        <?php
            // isset is connected to action attribute from form
            if (isset($_POST["submit"])) {
                $name = $_POST["name"];
                $email = $_POST["email"];

                Echo "Welcome " . $name;
            } 
        ?>
    </body>
</html>