<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div class="banner1">
        <h2>Odloty z lotniska</h2>
    </div>
    <div class="banner2">
        <img src="zad6.png" alt="logotyp">
    </div>
    <div class="glowny">
        <h4>Tabela odlotów</h4>
        <table>
            <tr>
                <th>LP.</th><th>numer rejsu</th><th>czas</th><th>kierunek</th><th>status</th>
            </tr>
            <?php
                $con = mysqli_connect("localhost", "root", "" , "egzamin");
                $query = "SELECT id,nr_rejsu,czas,kierunek,status_lotu FROM `odloty` ORDER BY czas DESC;";
                if(!$con){
                    die($con);
                }else{
                    $result = mysqli_query($con , $query);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>"."<td>".$row['id']."</td>"."<td>".$row['nr_rejsu']."</td>"."<td>".$row['czas']."</td>"."<td>".$row['kierunek']."</td>"."<td>".$row['status_lotu']."</td>";

                    }
                    mysqli_close($con);
                }
            ?>
        </table>
    </div>
    <div class="stopka1">
        <a href="kw1.txt" target>Pobierz obraz</a>
    </div>
    <div class="stopka2">
        <?php
        if(isset($_COOKIE['login'])){
            echo "Miło nam, że nas znowu odwiedziłeś";
        }else{
            setcookie("login",1, time()+60);
            "Dzień dobry! Sprawdź regulamin naszej strony";
        }
        ?>
    </div>  
    <div class="stopka3">
        Autor: 0000000000000
    </div>

</body>
</html>