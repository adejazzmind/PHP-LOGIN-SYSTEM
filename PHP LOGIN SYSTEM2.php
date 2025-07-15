<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["Email"];
    $password = $_POST["Password"];

    $users = array(
        "adejazzmind@gmail.com" => "1234",
        "adejazzmind@yahoo.com" => "5678",
        "adejazzmind@hotmail.com" => "9010"
    );

    if (array_key_exists($Email, $users) && $users[$Email] == $password) {
        echo "Login successful!";
    } else {
        echo "Incorrect email or password";
    }
}
?>

<form method="post">
    <label>Email:</label>
    <input type="text" name="Email"><br><br>
    <label>Password:</label>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>