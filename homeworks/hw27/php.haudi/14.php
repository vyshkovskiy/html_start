<?php
function get_bigger($a, $b)
{
	if ($a > $b)
    {
		echo $a;
	}else

	{
		echo $b;
	}
	echo '<br>';
}
get_bigger (10, 20);
get_bigger (20, 50);
get_bigger (5, -100);
?>