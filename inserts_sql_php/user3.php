<?php

require_once "..\pdo.php";

if (isset($_POST['delete']) && isset($_POST['id']))
{
    $sql = "DELETE FROM users WHERE id = :zip";

    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['id']));
}
?>

<html>
    <head>
        <title>Truly Wonderful the mind of a child is</title>
    </head>

    <body>
        <table border="1">
            <?php
                $stmt = $pdo->query("SELECT name, email, password, id FROM users");

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<tr><td>";
                    echo($row['name']);
                    echo("</td><td>");
                    echo($row['email']);
                    echo("</td><td>");
                    echo($row['password']);
                    echo("</td><td>");
                    echo('<form method="post"> <input type="hidden"');
                    echo('name="id" value="'.$row['id'].'">'."\n");
                    echo('<input type="submit" value="Del" name="delete">');
                    echo("\n</form>\n");
                    echo("</td></tr>");
                }
            ?>
        </table>
    </body>



</html>