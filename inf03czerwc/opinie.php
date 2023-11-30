<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie Klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="baner">
        <h1>Hurtownia spożywcza</h1>
    </div>
    <div class="glowny">
        <h2 class="s">Opinie naszych klientów</h2>
        <?php
        $con = mysqli_connect("localhost" , "root" , "" , "hurtownia");
        if(!$con){
            die($con);
        }else{
            $quer = "SELECT klienci.zdjecie , klienci.imie , opinie.opinia FROM `opinie` INNER JOIN klienci ON opinie.Klienci_id = klienci.id JOIN typy ON klienci.Typy_id = typy.id WHERE typy.id =2 OR typy.id =3;";
            $res = mysqli_query($con , $quer);
            while($row = mysqli_fetch_array($res)){
                echo "<div class=\""."gen"."\">"."<img src=\"".$row[0]."\" alt=\""."klient"."\">"."<blockquote>".$row[2]."</blockquote>"."<h4>".$row[1]."<h4>"."</div>";
            }
        }
        ?>
    </div>
    <div class="stopka1">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl">Sklep 1</a>
    </div>
    <div class="stopka2">
        <h3>Nasi top klienci</h3>
        <ol>
            <?php
            $con = mysqli_connect("localhost" , "root" , "" , "hurtownia");
            if(!$con){
                die($con);
            }else{
                $quer = "SELECT imie,nazwisko,punkty FROM `klienci` ORDER BY punkty DESC LIMIT 3;";
                $res = mysqli_query($con , $quer);
                while($row = mysqli_fetch_array($res)){

                    echo "<li>".$row[0]." ".$row[1]." ".$row[2]."pkt"."</li>"; 
                }
            }
            ?>
        </ol>
        
    </div>
    <div class="stopka3">
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </div>
    <div class="stopka4">
        <h3>Autor: 000000000000000000000</h3>
    </div>
</body>
</html>