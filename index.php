<?php 
    //ALLOW THE CONFIG
    define('_CONFIG_', true);
    //REQUIRE THE CONFIG
    require_once "inc/config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />
    </head>
    <body>
        <div class="uk-section uk-container">
            <?php
                echo "Hello World!, today is: ";
                echo date("d m Y");
            ?>
            <p>
                <a href='/login.php'>Login</a>
                <a href='/register.php'>Register</a>
            </p>
        </div>
        
        <?php require_once "inc/footer.php"; ?>
    </body>
</html>