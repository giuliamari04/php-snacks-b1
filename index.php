<?php
// snack1
$partiteDiBasket = [
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospite' => 60
    ],
    [
        'squadra_casa' => 'Roma',
        'squadra_ospite' => 'Napoli',
        'punti_casa' => 70,
        'punti_ospite' => 65
    ],
    [
        'squadra_casa' => 'Torino',
        'squadra_ospite' => 'Bologna',
        'punti_casa' => 80,
        'punti_ospite' => 75
    ],

];

// snack2
$name = isset($_GET["name"]) ? $_GET["name"] : "";
$mail = isset($_GET["mail"]) ? $_GET["mail"] : "";
$age = isset($_GET["age"]) ? $_GET["age"] : "";

$nameIsValid = strlen($name) > 3;
$mailIsValid = filter_var($mail, FILTER_VALIDATE_EMAIL) !== false;
$ageIsValid = is_numeric($age);

// snack3
$paragrafoLungo = "Un paragrafo, prima di tutto, è un blocco di testo separato dal precedente e dal seguente da un doppio spazio. Questo gli conferisce autonomia: che sia destinato alla carta o allo schermo, il suo compito è di esaurire un aspetto del tema che stiamo trattando. Un aspetto anche piccolo e secondario, ma quello, senza divagazioni. Lo spazio indica al lettore che abbiamo finito, ora si passa ad altro. Quello che contraddistingue il paragrafo è quindi il suo focus. Una cosa che aiuta chi legge ma anche chi scrive, che può così concentrarsi su un aspetto alla volta. Se manca qualcosa, se ne accorge subito.";
$frasi = explode(".", $paragrafoLungo);
$frasi = array_filter($frasi);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Snacks 1 & 2</title>
</head>

<body>
    <main class="bg-black">
        <!-- snack1 -->
        <section class="container w-50 p-5 bg-light ">
            <h1>Snack 1</h1>
            <?php
            foreach ($partiteDiBasket as $partita) {
                echo $partita['squadra_casa'] . ' - ' . $partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . '-' . $partita['punti_ospite'] . '<br>';
            }

            ?>
        </section>
            <!-- snack2 -->
        <section class="container w-50 px-5 py-2  bg-light">
            <h1>Snack 2</h1>
            <form action="index.php" method="get">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required><br>

                <label for="mail" class="form-label">Mail:</label>
                <input type="text" class="form-control" name="mail" required><br>

                <label for="age" class="form-label">Age:</label>
                <input type="text" class="form-control" name="age" required><br>

                <button type="submit" class="btn btn-primary">Verifica Accesso</button>
                <p class="py-3">
                    <?php
                    echo ($nameIsValid && $mailIsValid && $ageIsValid) ? "Accesso riuscito" : "Accesso negato";
                    ?>
                </p>

            </form>
        </section>
        <!-- snack3 -->
        <section class="container w-50 px-5 py-2 bg-light">
            <h1>Bonus</h1>
            <div>
                <h5>Paragrafo lungo:</h5>
                <?php
                echo "<p>{$paragrafoLungo}</p>";
                ?>
            </div>
            <div>
                <h5>Paragrafo a pezzetti:</h5>
                <?php
                foreach ($frasi as $frase) {
                    echo "<p>{$frase}.</p>";
                }
                ?>
            </div>

        </section>
    </main>


</body>

</html>