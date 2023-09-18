<?php

require_once "..\pdo.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
{
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

    #echo "<pre>\n" . $sql . "\n</pre>\n";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(
        array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
        )
    );
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>SQL Inserts with PHP</title>
    </head>
    <body>
        <p>Add a new user</p>
        <form method="post">
            <p>Name:<input type="text" name="name" size="40"></p>
            <p>E-Mail:<input type="text" name="email"></p>
            <p>Password:<input type="password" name="password" size="40"></p>
            <p><input type="submit" value="Add New" /></p>
        </form>
    </body>
</html>
