<!DOCTYPE html>
<html>
<head>
    <title>Password Form (GET Method)</title>
</head>
<body>

<h2>Enter Your Password</h2>

<form method="get" action="">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['password'])) {
    $password = $_GET['password'];
    echo "<h3>You entered: $password</h3>";
}
?>

</body>
</html>
