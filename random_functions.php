
<br/>
<center>
<h1>

	<?php
	

	// Random Functions
    //echo mt_rand(0,10)
	
	//$names = array("Dan", "Alex", "Andreea");
	//$rando = mt_rand(0,2);
	//echo $names[$rando];

	echo "Guess a number!<br/>";
	$num = 4;
	$rando = mt_rand(0,10);
	if ($num == $rando) {
		echo "YOU WIN $num = $rando";
	}  else {
		echo "YOU LOOSE! $num doesn't equal $rando";
	}




?>
</center>
<br/>	
</h1>














