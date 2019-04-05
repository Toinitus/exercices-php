<?php
	$TabMois = array('janvier','fevrier', 'mars', 'avril', "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
	echo $TabMois[2].'<br />';
	echo $TabMois[5].'<br />';

	$TabMois[7] = "août";
	echo($TabMois[7]);

	$TabDep = array("02"=>"Aisne", "59"=>"Nord", "60"=>"Oise", "62"=>"Pas-De-Calais", "80"=>"Somme");
	echo '<br />'.$TabDep['59'];

	 echo '<br />'.$TabDep[51]="Marne";
		
	
	foreach ($TabMois as  $value) {
		echo '<br />'.$value;
	}
	foreach ($TabDep as $key => $value) {
	echo  '<br />' ."<p> Le numero: "  .$key. " est le departement " .$value. "<p>";
	}

	
		
	
?>
