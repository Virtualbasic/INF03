<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="baner1">
        <h1>
            Internetowa wypożyczalnia Filmów
        </h1>
    </div>
    <div class="baner2">
        <table>
            <tr>
                <td>Kryminał</td><td>Horror</td><td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td><td>30</td><td>40</td>
            </tr>
        </table>
    </div>
    <div class="listapolecamy">
        <h3>
            Polecamy
        </h3>
        <?php
            $con = mysqli_connect("localhost" , "root" , "" , "dane3");

            if(!$con){
                die($con);
            }else{
                $zap1 = "SELECT id , nazwa , opis , zdjecie FROM `produkty` WHERE id IN(18,22,23,25);";
                $result1 = mysqli_query($con , $zap1);
                while($row = mysqli_fetch_array($result1)){
                    echo "<div class=\"film\">"."<h4>".$row[0]." ".$row[1]."</h4><br>"."<img src=\"$row[3]\" alt=\"film\"><br>"."<p>".$row[2]."</p>"."</div>";
                }
            }
        ?>
    </div>
    <div class="listafantastyczne">
        <h3>
            Filmy fantastyczne
        </h3>
        <?php
            $zap2 = "SELECT id,nazwa,opis,zdjecie FROM `produkty` WHERE Rodzaje_id = 12;";
            $result2 = mysqli_query($con , $zap2);
            while($row = mysqli_fetch_array($result2)){
                echo "<div class=\"film\">"."<h4>".$row[0]." ".$row[1]."</h4><br>"."<img src=\"$row[3]\" alt=\"film\"><br>"."<p>".$row[2]."</p>"."</div>";
            }
        ?>
    </div>
    <div class="stopka">

        <form action="video.php" method="POST">
            Usuń film nr: <input type="number" name="filmID"> <input type="submit" value="Usuń film">
        </form>
        <?php
            $film_id = $_POST['filmID'];
            if(!empty($film_id)){
                $delzap = "DELETE FROM produkty WHERE id = $film_id;";
                mysqli_query($con, $delzap);
                mysqli_close($con);
            }
            
          
        ?>
        Stronę wykonał: <a href="mailto: ja@poczta.com">Pierdolcie sie</a>
    </div>
</body>
</html>