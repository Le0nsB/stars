<?php
echo "
<style>
    body {
        background-color: #0f0f18;
        color: #7f99d7;
    }
    input {
        border-style: solid;
        border-width: 2px;
        border-radius: 8px;
        border-color: #5f7bbf;
        background-color: #0f0f18;
        color: #b2c8fd;
    }
</style>";

$connection = new mysqli("localhost", "root", "", "sipols");
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc();
print_r($data);

//Parastais masivs
$auglis = ["sarkans", "abols", 120];
print_r($auglis);
echo "<br>";

//Asociativais masivs
$auglisAssoc =["color" => "sarkans", "type" => "abols", "weight" => 120];
print_r($auglisAssoc);

echo "<br>";
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["🐱"];
    $password = $_POST["🦝"];

    $sql = "INSERT INTO users (username, pass)
    VALUES ('$username', '$password');";
    $connection->query($sql);
}

//Ielikt lietotaju no HTML formas
echo "<form method='POST'>";

    echo "<label>Username: <input name='🐱' placeholder='Lietotājvārds'/></label><br>";
    echo "<label>Password: <input type='password' name='🦝' placeholder='Parole'/></label><br>";
    echo "<input type='submit' value='Reģistrēties'/>";
echo "</form>";
?>