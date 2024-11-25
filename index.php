<?php
$connection = new mysqli("localhost", "root", "", "sipols");
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc();

echo "<form>";
echo "</form>";
?>