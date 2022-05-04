<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Nápoly Pizzéria</title>
</head>
<body>
    <header>
        <nav>
            <a href="?oldal=fooldal">Főoldal</a>
            <a href="?oldal=menu">Menü</a>
            <a href="?oldal=order">Rendelés</a>
        </nav>
    </header>

    <?php
    
    if($_SERVER["QUERY_STRING"] != ""){
        $query = $_GET["oldal"];
        $inc = "";
        switch ($query) {
            case 'fooldal':
                $inc = "fooldal.php";
                break;
            case 'menu':
                $inc = "menu.php";
                break;
            case 'order':
                $inc = "order.php";
                break;
            default:
                $inc = "fooldal.php";
                break;
        }
        include($inc);
    }
    
    ?>

    <footer>
        <a href="https://www.ruander.hu" target="blank">Fogd Károly - Szoftverfejlesztő</a>
    </footer>

    <script src="./script.js"></script>
</body>
</html>