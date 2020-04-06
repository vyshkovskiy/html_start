<?php
for ($i = 1; $i <= 100 ; $i++) { 
	echo $i;
	if ( $i % 2 == 0) {
		echo '- чётное число';
	}else
	{
		echo '- не чётное число';
	}
	echo "<br/>";
}

?>