<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekretariat</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="lewy">
        <h1>Akta Pracownicze</h1>
        <?php
            $con = mysqli_connect("localhost", "root", "", "firma");
            $qr = "SELECT imie,nazwisko,adres,miasto,czyRODO,czyBadania FROM `pracownicy` WHERE id=2 ;";
            if(!$con){
                die($con);
                echo "not working";
            }else{
                $result = mysqli_query($con,$qr);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<h3>"."dane"."</h3>";
                    echo "<p>".$row['imie']." ".$row['nazwisko']."</p>";
                    echo "<hr>";
                    echo "<h3>".'adres'."</h3>";
                    echo "<p>".$row['adres']."</p>";
                    echo "<p>".$row['miasto']."</p>";
                    echo "<hr>";
                    if($row['czyRODO'] == 1){
                        echo "<p>"."RODO: NIE PODPISANO"."</p>";
                    }else{
                        echo "<p>"."RODO: PODPISANO"."</p>";
                    }
                    if($row['czyBadania'] == 1){
                        echo "<p>"."Badania : TAK "."</p>";
                    }else{
                        echo "<p>"."Badania : NIE "."</p>";
                    }
                }
            }
        ?>
        <hr>
        <h3>Dokumenty pracownika</h3>
        <a href="cv.txt" download>Pobierz</a>
        <h1>Liczba zatrudnionych pracowników</h1>
        <?php
             $con = mysqli_connect("localhost", "root", "", "firma");
             $qr = "SELECT id FROM pracownicy;";
             if(!$con){
                 die($con);
                 echo "not working";
             }else{
                $result = mysqli_query($con , $qr);
                $count = 0;
                while($row = mysqli_fetch_assoc($result)){
                    $count++;
                }
                echo $count;
             }
        ?>   
    </div>
    <div class="prawy">
        <?php
             $con = mysqli_connect("localhost", "root", "", "firma");
             $qr = "SELECT id , imie , nazwisko FROM pracownicy WHERE id =2;";
             $qr2 = "SELECT pracownicy.id , stanowiska.opis , stanowiska.nazwa FROM pracownicy INNER JOIN stanowiska ON pracownicy.stanowiska_id = stanowiska.id WHERE pracownicy.id =2;";
             if(!$con){
                 die($con);
                 echo "not working";
             }else{
                $result = mysqli_query($con , $qr);
                $result2 = mysqli_query($con , $qr2);
                while($row = mysqli_fetch_array($result)){
                    $img = $row['id'];
                    echo "<img src= \"".$img.".jpg\" alt = \" pracownik \"> ";
                    echo "<h2>".$row['imie']." ".$row['nazwisko']."</h2>";
                    
                }
                while ($row2 = mysqli_fetch_array($result2)){
                    echo "<h4>".$row2[2]."</h4>";
                    echo  "<h5>".$row2[1]."</h5>";
                }
            }

        ?>
    </div>
    <div class="stopka">
        Autorem aplikacji jest: ja 
        <ul>
            <li>skontaktuj sie</li>
            <li>poznaj naszą firme</li>
        </ul>
    </div>
</body>
</html>