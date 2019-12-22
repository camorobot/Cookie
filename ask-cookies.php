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
        background-color:red;
    }
</style>
<body>
    <?php
        $a = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
        session_start();
        if (isset($_SESSION['test1']) && $_SESSION['test1'] == true) {
            header('location: https://google.com');
        } else{
        
        }
    ?>
    <h1>COOKIES NOG ACCEPTEREN</h1>
    <form action="assets/php/cookie.php">
        <input type="text" name="DIT IS DE POST NAME">
        <button type="submit">Ik accepteer de cookies</button>
        <?php echo $a ?>
    </form>
</body>
</html>
