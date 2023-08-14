<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc', 'root', 'root');

// simply print data

// echo "<pre>\n";

// $stmt = $pdo->query("SELECT * FROM users");

// while($row = $stmt->fetch(PDO::FETCH_ASSOC))
// {
//     print_r($row);
// }

// echo "</pre>\n";

// Show data in form of a table

$stmt = $pdo->query("SELECT name, email, password FROM users");

echo '<table border="1">' . "\n";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr><td>";
    echo ($row['name']);
    echo "</td><td>";
    echo ($row['email']);
    echo "</td><td>";
    echo ($row['password']);
    echo "</td></tr>\n";
}

echo "</table>\n";

?>