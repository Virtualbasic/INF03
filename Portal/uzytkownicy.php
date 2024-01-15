<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class="baner1">
        <h2>Nasze osiedle</h2>
    </div>
    <div class="baner2">
        <?php
        $con = mysqli_connect("localhost" , "root" , "" , "portal");
        if(!$con){
            die($con);
        }else{
            $zap = "SELECT COUNT(id) FROM dane";
            $res = mysqli_fetch_row(mysqli_query($con , $zap));
            echo "<p> Liczba użytkowników portalu: ".$res[0]."</p>";
        }
        ?>
    </div>
    <div class="lewy">
        <h3>
            Logowanie
        </h3>
        <form action="uzytkownicy.php" method="POST">
            login <br>
            <input type="text" name="login" ><br>
            hasło <br>
            <input type="password" name="haslo"><br>
            <input type="submit" value="Zaloguj">  

        </form>
    </div>
    <div class="prawy">
        <h3>Wizytówka</h3>
        <div class="wizytowka">
        <?php
                $login = isset($_POST['login']) ? $_POST['login'] : '';
                $password = isset($_POST['haslo']) ? $_POST['haslo'] : '';
                if(empty($login) || empty($password) ){
                    echo "wypełnij pola";
                }else{
                    $check = "SELECT login , haslo FROM uzytkownicy";
                    $result = mysqli_query($con ,$check); 
                    $flag = false;
                    while($log = mysqli_fetch_array($result)){
                        if($login==$log[0]){
                                $tmp =  sha1($password);
                                if( $tmp == $log[1]){
                                    $flag = true;
                                    $send = "SELECT login , dane.rok_urodz , dane.przyjaciol , dane.hobby , dane.zdjecie FROM `uzytkownicy` JOIN dane ON dane.id = uzytkownicy.id WHERE login = '$login';";
                                    $res3 = mysqli_query($con , $send);
                                    $wizy = mysqli_fetch_row($res3);
                                    echo "<img src=\"$wizy[4]\" alt=\"osoba\">";
                                    echo "<h4> Wiek ".(2024-$wizy[1])."</h4>";
                                    echo "<p> hobby: ".$wizy[3]."</p>";
                                    echo "<h1>"."<img src=\"icon-on.png\">".$wizy[2]."</h1>";
                                    echo "<button>wiecej informacji</button>";
                                    break;
                                }else{
                                    echo "hasła nieprawidłowe";
                                    break;
                                }
                            }
                        }
                        if ($flag == false){
                            echo "login nie istnieje";
                        }
                }
                mysqli_close($con);
            ?>
        </div>
    </div>
    <div class="stopka">
         Strone wykonał: Jezus
    </div>
</body>
</html>