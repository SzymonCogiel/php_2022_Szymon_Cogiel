<?php
if (isset($_GET['Login'])) {
    if (empty($_GET['user']) || empty($_GET['password'])) {
        echo "<p>EMPTY</p>";
    } elseif ($_GET['user'] == "foo" && $_GET['password'] == "foo123") {
        echo "<p>OK</p>";
    } else {
        echo "<p>ERROR</p>";
    }

} else { ?>
    <form method="get">
        <label>User:</label>
        <input type="text" name="user"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <button type="submit" name="Login">Login</button>
    </form>
<?php }
?>