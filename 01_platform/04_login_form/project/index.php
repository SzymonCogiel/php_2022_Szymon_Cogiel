<form action="index.php" method="get">
    User: <input type="text" id="user" name="user"><br>
    Password: <input type="password" id="password" name="password"><br>
    <input type="submit" id="Login" value="Login">
</form>

<?php
$user = $_GET["user"];
$password = $_GET["password"];

if ($user=="" or $password=="")
{
    echo "<p>EMPTY</p>";
    return "EMPTY";
}
if ($user=="foo" and $password=="foo123")
{
    echo "<p>OK</p>";
    return "OK";
}
{
    echo "<p>ERROR</p>";
    return "ERROR";
}
