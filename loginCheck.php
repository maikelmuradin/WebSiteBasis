<?php
$title="PHP opdrachten - Inloggen";
include "system/header.php";


if(!empty($_GET['gebruikersnaam']) && !empty($_GET['wachtwoord']))
{
		
	echo "Hi".$_GET['gebruikersnaam'];
}else
		{
			//header("Location: inloggen.php");
			echo "niets ingevuld";
		}

?>

<?php include "system/footer.php";?>