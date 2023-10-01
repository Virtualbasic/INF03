<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkujemy</title>
</head>
<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
                $connect =  mysqli_connect("localhost" , "root" , "", "wedkowanie");
                if(!$connect){
                    die($connect);
                }else{
                    $query = "SELECT nazwa , wystepowanie FROM ryby;";
                    $result = mysqli_query( $connect ,$query);
                    while ($row = mysqli_fetch_row($result)){
                        echo "<li>".$row[0]." wystepowanie: ".$row[1]."</li>";
                    }
                    mysqli_close($connect);
                }
            ?>
        </ul>
    </div>
    <div class="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <a href="kwerendy.txt" download>Pobierz Kwerendy</a>
    </div>
    <div class="stopka">
        <p>Strone wykonał: ja </p>
    </div>
</body>
</html>