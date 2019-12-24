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
    <h1>DIT IS EEN TEST WEBSITE!</h1>
    <?php
        $homeurl = $_POST['homeurl'];
        if (isset($_SESSION['tracking']) && $_SESSION['tracking'] == true) {
            header('location: /');
        } else{ 
        }
    ?>
    <h1>COOKIES NOG ACCEPTEREN</h1>
    <p>De site <?php echo $homeurl; ?> maakt gebruik van cookies. u moet deze accepter om door te gaan</p>
    <form action="assets/php/redirect.php" method="POST">
        <input type="hidden" name="homeurl" value=" <?php echo $homeurl; ?>">
        <button type="submit">Ik accepteer de cookies</button>
    </form>

    

</body>
</html>
