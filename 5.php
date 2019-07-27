<?php
function cetakmiring($kalimat){
	$jml=Strlen($kalimat);
	for ($a=0;$a<=$jml;$a++){
		for($b=0;$b<=$a;$b++){
			echo " ";	
			echo " ";
			echo " ";
		}
		
		echo substr($kalimat,$a,1);
		echo "<br>";
	}		
}

cetakmiring('BOOTCAMP');