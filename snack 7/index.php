<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    
    <?php
        // SNACK 7: Creare un array contenente qualche alunno di un’ipotetica classe.
        // Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
        //Stampare Nome, Cognome e la media dei voti di ogni alunno.

        $studenti = [
            [
                'nome' => 'Gianmaria',
                'cognome' => 'Volonté',
                'voti' => [9, 9, 8, 7]
            ],
            [
                'nome' => 'Marcello',
                'cognome' => 'Mastroianni',
                'voti' => [6, 7, 7, 7]
            ],
            [
                'nome' => 'Monica',
                'cognome' => 'Vitti',
                'voti' => [5, 6, 6, 6]
            ],
            [
                'nome' => 'Ugo',
                'cognome' => 'Tognazzi',
                'voti' => [8, 6, 7, 6]
            ],
            [
                'nome' => 'Vittorio',
                'cognome' => 'Gassman',
                'voti' => [6, 9, 7, 8]
            ],
            [
                'nome' => 'Nino',
                'cognome' => 'Manfredi',
                'voti' => [5, 6, 7, 8]
            ],
            [
                'nome' => 'Sophia',
                'cognome' => 'Loren',
                'voti' => [6, 6, 8, 6]
            ],
        ];
    ?>

        <?php
        for ($i = 0; $i < count($studenti); $i++) {
        ?>  
            <p>
                <?php echo $studenti[$i]["nome"]?> <?php echo $studenti[$i]["cognome"]?> - Media voti: <?php echo (array_sum($studenti[$i]["voti"]) / count($studenti[$i]["voti"]));?>
            </p>
        <?php } ?>

</body>
</html>