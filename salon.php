<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Salon pielęgnacji</title>
    <link rel="stylesheet" href="salon.css">
</head>

<body>
    <header>
        <h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
    </header>
    <main>
        <div class="side">
            <h3>SALON ZAPRASZA W DNIACH</h3>
            <ul>
                <li>Poniedziałek, 12:00-18:00</li>
                <li>Wtorek, 12:00-18:00</li>
            </ul>
            <a href="pies.jpeg"> <img src="pies-mini.jpeg"></a>
            <p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
        </div>
        <div id="mid">
            <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'salon');
            $q2 = "SELECT imie,rodzaj,nastepna_wizyta,telefon from zwierzeta WHERE nastepna_wizyta!=0;";
            $result = mysqli_query($conn, $q2);
            foreach ($result as $r) {
                if ($r['rodzaj'] == 1) {
                    echo "Pies " . $r['imie'] . "<br>";
                } else {
                    echo "Kot " . $r['imie'] . "<br>";
                }
                echo "Data następnej wizyty: " . $r['nastepna_wizyta'] . ", telefon właściciela: " . $r['telefon'] . "<br>";
            }
            ?>
        </div>
        <div class="side">
            <h3>USŁUGI</h3>
            <?php
            $q1 = "SELECT nazwa,cena FROM uslugi;";
            $result2 = mysqli_query($conn, $q1);
            foreach ($result2 as $res) {
                foreach ($res as $r) {
                    echo $r . " ";
                }
                echo "<br>";
            }
            ?>
        </div>
    </main>
</body>

</html>