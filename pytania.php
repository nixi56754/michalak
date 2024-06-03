<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pytania.css">
</head>
<body>
    <header>
        <span id="najedz">O nas</span>
        <h2>Sprawdziany.pl</h2>
        <div id="infoDiv">
            <p>Informacje o twórcach :</p> 
            <p>Bejgrowicz Mateusz 2TP</p> 
            <p>Kalinowski Kacper 2TP</p>
        </div>
       
        <button id="powrot" onclick="S()">powrot</button>
    </header>  
    <main>
        <?php

        require('dane.php');
        session_start();
            if($_SESSION['zalogowano']=='false'){
                header('location: startowa.php');
                exit;
            }
            $pol = new mysqli($host, $uzytkownik, $haslodob, $baza);

            $pytania = array();

            if (isset($_POST['typ'])) {
                $typ = $_POST['typ'];
            }

            $sql = "SELECT * FROM `pytania` WHERE typ = '$typ'";
            $wynik = $pol->query($sql);
            while ($wiersz = $wynik->fetch_assoc()) {
                $pytania[] = $wiersz;
            }

            echo "
            <table>
                <tr>
                    <th>id</th>
                    <th>treść</th>
                    <th>odpowiedź A</th>
                    <th>odpowiedź B</th>
                    <th>odpowiedź C</th>
                    <th>odpowiedź D</th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                    <th>D</th>
                    <th>typ</th>
                    <th>usuń</th>
                    <th>edytuj</th>
                </tr>";

            foreach ($pytania as $i => $wiersz) {
                echo "
                <tr>
                    <td>{$wiersz['id']}</td>
                    <td>{$wiersz['tresc']}</td>
                    <td>{$wiersz['odpowiedz1']}</td>
                    <td>{$wiersz['odpowiedz2']}</td>
                    <td>{$wiersz['odpowiedz3']}</td>
                    <td>{$wiersz['odpowiedz4']}</td>
                    <td>{$wiersz['odp1']}</td>
                    <td>{$wiersz['odp2']}</td>
                    <td>{$wiersz['odp3']}</td>
                    <td>{$wiersz['odp4']}</td>
                    <td>{$wiersz['typ']}</td>
                    <td>
                        <form action='zmiana.php' method='post' s>
                            <input type='hidden' name='usun' value='{$wiersz['id']}'>
                            <input type='submit' value='usuń'>
                        </form>
                    </td>
                    <td>
                        <form action='zmiana2.php' method='post' ;'>
                            <input type='hidden' name='edit' value='{$wiersz['id']}'>
                            <input type='submit' value='edytuj'>
                        </form>
                    </td>
                </tr>";
            }

            echo "</table>";

        ?>
    </main> 
</body>
</html>

<script src="pytania.js"></script>
