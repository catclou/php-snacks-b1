<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <!-- SNACK 4: Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà
    contenere lo stesso numero più di una volta -->
    <?php 

    $numeriRandom = []; // creo un array vuoto
    $numGenerato = 0; // assegno il valore di partenza 0 alla variabile del numero che sarà poi randomicamente generato

    for ($i = 0; $i <= 14; $i++) { // faccio andare un ciclo per 15 volte...
        do {
            $numGenerato = rand(1, 100); // genero un numero random tra 1 e 100...
        } while (in_array($numGenerato, $numeriRandom) == true); // fintantoché esso non si trova già nell'array dei numeri generati, in modo da non avere doppioni

        $numeriRandom[$i] = $numGenerato; // pusho il numero generato nell'array ad ogni giro di ciclo
    };

    var_dump($numeriRandom);

    ?>

</body>
</html>