<?php 
	// Création de la fonction afficherTexte
	function afficherMoyenne($val1,$val2,$val3){
		//Contenu de la fonction
		$calcul = ($val1 + $val2 + $val3)/3;
		return $calcul;
	}
?>

<!doctype html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form method="post" action="index.php">
		<input type="number" name="nbr1" min="1" max="100">
		<input type="number" name="nbr2" min="1" max="100">
		<input type="number" name="nbr3" min="1" max="100">
		<input type="submit" value="Submit">
	</form>
	<h1>
		<?php
		// Appel de la fonction
			echo afficherMoyenne($_POST['nbr1'],$_POST['nbr2'],$_POST['nbr3']);
		?>
	</h1>
	<h1>
		<?php
		// Appel de la fonction
			echo afficherMoyenne($_POST['nbr1'],$_POST['nbr2'],$_POST['nbr3']);
		?>
	</h1>

</body>
</html>