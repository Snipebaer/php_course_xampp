<?php 

require_once "..\pdo.php";

if (isset($_POST['id']))
{
    $sql = "DELETE FROM users WHERE id = :zip";
    
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip'=>$_POST['id']));
}
?>

<p> Delete a user </p>
<form method="post">

    <p>ID to delete: <input type="text" name="id"></p>
    <p><input type="submit" value="Delete"></p>
</form>