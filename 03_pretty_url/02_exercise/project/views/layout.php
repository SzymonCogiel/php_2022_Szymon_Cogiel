<html lang="en">
<head>
    <title>Pretty URL</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
    <body>
        <?php
        if (file_exists("../views$view.php")) {
            include "../views/menu.php";
            include "../views$view.php";
        } else {
            include "../views/404.php";
        }
        ?>
    </body>
</html>
