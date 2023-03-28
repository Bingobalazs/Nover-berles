<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/nover.css">
    <link rel="icon" href="favicon">
    <title>Rendelés</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <?php /*Ne szedd ki amit nem használsz!*/ ?>
                    <form action="felveve.php" method="post">
                        <h2>Gugijavan</h2>
                        <input type="radio" name="gugijavan" value="1"><p>Igen</p>
                        <input type="radio" name="gugijavan" value="0" checked><p>Nem</p>
                        <h2>Név</h2>
                        <input type="text" name="vnev" placeholder="Vezetéknév">
                        <input type="text" name="knev" placeholder="Keresztknév">
                        <hr>
                        <input type="number" name="magassag" placeholder="Magasság">
                        <input type="number" name="suly" placeholder="Súly">
                        <select name="hajszin" placeholder="Hajszín">
                            <option disabled selected>Hajszín</option>
                            <option value="szoke">Szőke</option>
                            <option value="v_barna">Világos barna</option>
                            <option value="s_barna">Sötét barna</option>
                            <option value="fekete">Fekete</option>
                            <option value="voros">Vörös</option>
                            <option disabled>Kék</option>
                        </select>
                        <h2>Születési dátum</h2>
                        <input type="date" name="szuldate">
                        <h2>Kapcsolati státusz</h2>
                        <select name="kapcsolat">
                            <option value="edes">Édes testvér</option>
                            <option value="fel">Féltestvér</option>
                        </select>
                        <h2>Halál oka</h2>
                        <input type="text" name="halaloka">
                        <h2>Kapcsolattartas</h2>
                        <input type="text" placeholder="E-mail" name="email">
                        <input type="text" placeholder="Teljes név" name="nev">
                        <input type="submit" value="Rendelés">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>