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