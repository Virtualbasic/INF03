<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki Krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div class="baner">
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </div>
    <div class="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
           
            $con = mysqli_connect("localhost", "root", "" , "egzamin4");
            
            if(!$con){
                die("Connection failed: " . mysqli_connect_error());
            }
               
                $query = "SELECT id , cel , cena FROM `wycieczki`;";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_assoc($result)){
                    echo $row["id"].$row["cel"]." cena: ".$row["cena"]."<br>";
                }
                
            
            mysqli_close($con);
        ?>
    </div>
    <div class="lewy">
        <h3>NAJTANIEJ...</h3>
        <table>
            <tr>
                <th>Włochy</th><th>od 1200zł</th>
            </tr>
            <tr>
                <th>Francja</th><th>od 1200zł</th>
            </tr>
            <tr>
                <th>Hiszpania</th><th>od 1400zł</th>
            </tr>
        </table>
    </div>
    <div class="srodkowy">
        <h3>TU BYLIŚMY</h3>
        <?php
        $con = mysqli_connect("localhost", "root", "" , "egzamin4");
            
        if(!$con){
            die("Connection failed: " . mysqli_connect_error());
        }
           
            $query = "SELECT nazwaPliku FROM `zdjecia`;";
            $result = mysqli_query($con, $query);
            #echo "<table>";
            
            $n = 0;
            while($row = mysqli_fetch_assoc($result)){
                if($n%3==0){
                    echo "<br>";
                }
                #if($n%3==0){
                #    echo "<tr>";
                    echo "<img src=\"".$row["nazwaPliku"]."\">";
                #    echo "</tr>";
                #}else{
                 #   echo "<th>"."<img src=\"".$row["nazwaPliku"]."\">"."</th>";
                #}
                $n++;
                
                
            }
           
            #echo "</table>";
        mysqli_close($con);
        ?>
    </div>
    <div class="prawy">
        <h3>SKONTAKTUJ SIĘ</h3>
        <a href="mailto: wycieczki@wycieczki.pl"> napisz do nas</a>
        <p>telefon:555666777</p>