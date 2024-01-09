<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class="baner1">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>
    <div class="baner2">
      <h1> KALENDARZ </h1> 
      <?php
        $con = mysqli_connect("localhost" , "root" , "" , "egzamin5");
        if(!$con){
            die($con);
        }else{
            $zap = "SELECT miesiac , rok FROM `zadania` WHERE dataZadania = '2020-07-01';";
            $result = mysqli_query($con , $zap);
            $prin = mysqli_fetch_array($result);
            echo "<h3> miesiąc: " .$prin[0]. " rok: " .$prin[1]. "</h3>";
        }
      ?>
    </div>
    <div class="glowny">
        <?php
            $zapv2 = "SELECT dataZadania , wpis FROM `zadania` WHERE miesiac = 'lipiec';";
            $block = mysqli_query($con , $zapv2);
            while ($row = mysqli_fetch_array($block)){
                echo "<div class=\"wpisy\">"."<h5>".$row[0]."</h5>"."<p>".$row[1]."</p>"."</div>";
            }
        ?>
    </div>
    <div class="stopka">
        <?php
            $val = $_POST['wpis'];
            $modify = "UPDATE zadania SET wpis ='$val' WHERE dataZadania = '2020-07-13';";
            mysqli_query($con,$modify);
            mysqli_close($con);
        ?>
        <form action="kalendarz.php" method="post">
        dodaj wpis:  <input type="text" name="wpis" > 
        <input type="submit" value="DODAJ"><br>
        </form>
      
      <p>Strone wykonał: Za temerie kurwa </p> 
    </div>
</body>
</html>