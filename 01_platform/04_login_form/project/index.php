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
