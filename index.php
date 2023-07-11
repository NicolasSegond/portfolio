<?php

if(!isset($_GET['uc'])){
     $_GET['uc'] = 'pageAccueil';
}

$uc = $_GET['uc'];

include("Vues/hero.html");

switch($uc){
	case 'pageAccueil':{
		include("Vues/Untitled-2.php");
        break;
	}
    case 'pageVeille':{
		include("Vues/Veille.html");
        break;
	}
	case 'pageProjet':{
		include("Vues/projets.php");
		break;
	}
}

include("Vues/footer.html");

?>