<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cookies Boompje5</title>
</head>
<body>

    <div class="container-background">
        <div class="inner-container">
            <img src="assets/img/boompje5-2019.svg" alt="B5 Logo">
            <div class="container-text" id="text">
                <p>Op de websites van Boompje5 maken wij gebruik van cookies.
                Het privacy- en cookiebeleid van Boompje5 geldt voor al onze websites.</p>
            </div>
            <div class="container-text container-button">
                <form action="assets/php/redirect.php" method="POST">
                    <input type="hidden" name="homeurl" value=" <?php echo $homeurl; ?>">
                    <button type="submit">Ik accepteer de cookies</button>
                </form>
            </div>
            <div class="container-text" id="link">
                <p>Ga voor meer informatie naar <a href="https://cookies.boompje5.nl/privacy">cookies.boompje5.nl/privacy </a></p>
            </div>
        </div>
    </div>




    <?php //$homeurl = $_POST['homeurl']; ?> 


</body>
</html>
