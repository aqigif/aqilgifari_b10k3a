<?php

//function pattern
function pattern($n) 
{ 
	$string = array(' P ',' R ',' O ',' G ',' R ',' A ',' M ',' M ',' E ',' R ');
	for ($i = 0; $i < $n; $i++) { 
		for ($j = 0; $j < $n; $j++) { 
			if ( $i == $j || $i == $n - 1 - $j)			 
				echo $string[$i];		 

			else
				echo " = "; 
		} 

		echo "<br>"; 
	} 
} 

	// manggil fuction
	$n = 10; 
	pattern($n); 

//telah diuji di http://phptester.net/
// 4.php by aqil gifari _ b10k3a
