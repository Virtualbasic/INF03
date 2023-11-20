<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>
<body>   
    <div class="menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
    </div>
    <div class="logo">
        <h2>Podzespoły Komputerowe</h2>
    </div>
    <div class="glowny">
       <h1>Dzisiejsze Promocje</h1>
        <table>
            <tr>
                <th>NUMER</th><th>NAZWA PODZESPOŁY</th><th>OPIS</th><th>CENA</th>
                <?php
                    $con = mysqli_connect("localhost" , "root" , "" , "sklep");
                    if(!$con){
                        exit("ups");
                    }else{
                        $query = "SELECT id,nazwa,opis,cena FROM `podzespoly` WHERE cena<1000;";
                        $result = mysqli_query($con, $query);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>"."<td>".$row['nazwa']."</td>"."<td>".$row['opis']."</td>"."<td class=\"czwarta\">".$row['cena']."</td>";
                            echo "</tr>";
                        }
                        mysqli_close($con);
                    }
                ?>
            </tr>
        </table>
    </div>
    <div class="stopka1">
        <img src="materialy1/scalak.jpg" alt="promocje na procesory">
    </div>
    <div class="stopka2">
        <h4>Nasz Sklep Komputerowy</h4>
        Współpracujemy  z  hurtownią  <a href="http://www.edata.pl/" target>edat</a>
    </div>
    <div class="stopka3">
        <p>zadzwoń: 601 602 603</p>
    </div>
    <div class="stopka4">
        <p>Stronę wykonał: PESEL</p>
    </div>
</body>
</html>