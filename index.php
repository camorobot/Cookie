<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cookie redirect</title>
</head>
<style>
    body{
        background-color:blue;
    }
    a{
        color:yellow
    }
</style>
<body>

    <?php $url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

    <form action="/ask-cookies.php" name="cookie-form" method="POST">
        <input type="text" name="homeurl" value=" <?php echo $url ?> ">
    </form>
    
    <?php
        session_start();
        if (isset($_SESSION['test1']) && $_SESSION['test1'] == true) {
        } else{
            echo '<script src="assets/js/auto-submit.js"></script>';
        }
    ?>
    <h1>WEBSITE NUMMER 1 - COOKIES ZIJN GOED GEKEURD</h1>
    <a href="assets/php/drop.php">DROP COOKIE</a>
</body>
</html>