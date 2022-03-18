<!DOCTYPE html>
<html>
    <head>
        <title>QA-Form (PHP)</title>
    </head>
    <body>
        <div>
            <h1>QA-Form (PHP)</h1>
        </div>
        <div>
            <h3>Please fill out your personal information below<h3>
        </div>
        <div>
            <form action="./verifyForm.php" method="post">
                <p>Name</p>
                <input type="text" name="name"/>
                <p>Email</p>
                <input type="text" name="email"/>
                <br><br>
                <input type="submit" name="submitUser"/>
            </form>
        </div>
    </body>
</html>