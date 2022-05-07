<!-- SNACK 2 -->
<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name
sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola
e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
altrimenti “Accesso negato” -->
<?php

// GET dei dati che ci servono:
$name = ( !empty($_GET['name']) ) ? $_GET['name'] : '';
$email = ( !empty($_GET['email']) ) ? $_GET['email'] : '';
$age = ( !empty($_GET['age']) ) ? $_GET['age'] : '';

// sentinelle di controllo validazione:
$validazioneName = false;
$validazioneEmail = false;
$validazioneAge = false;

// controllare che name sia lungo almeno 3 caratteri
if ( strlen($name) < 3){
	echo "<p>Il nome deve contenere almeno 3 caratteri</p>";
} else {
	$validazioneName = true;
};

// controllare che email contenga una chiocciola e un punto
if (strpos(  $email, '@' ) == 0 || strpos( $email, '.') == 0 ){
	echo "<p>L'email deve contenere @ e .</p>";
} else {
	$validazioneEmail = true;
};

// controllare che age sia un numero
if ( !is_numeric($age) || $age < 0){
	echo "<p>Il valore dell'età dev'essere un numero e dev'essere maggiore di 0</p>";
} else {
	$validazioneAge = true;
};

// condizione di verifica variabili di controllo:
	if ($validazioneName && $validazioneEmail && $validazioneAge){
		echo "<p>Accesso riuscito</p>";
	} else {
		echo "<p>Accesso negato</p>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Snack 2</title>
</head>
<body>
	
	<form method="GET">
		<div>
			<label for="Name"></label>
			<input type="text" placeholder="name" name="name">
		</div>
		<div>
			<label for="eMail"></label>
			<input type="text" placeholder="email" name="email">
		</div>
		<div>
			<label for="Age"></label>
			<input type="number" placeholder="age" name="age">
		</div>
		<button type="submit">Invia</button>
	</form>

</body>
</html>