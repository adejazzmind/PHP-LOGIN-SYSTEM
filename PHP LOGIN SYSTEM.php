<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = array(
        "Admin" => "1234",
        "Samson" => "5678",
        "Mayowa" => "9010"
    );

    if (array_key_exists($username, $users) && $users[$username] == $password) {
        echo "Login successful!";
    } else {
        echo "Incorrect username or password";
    }
}
?>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username"><br><br>
    <label>Password:</label>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>