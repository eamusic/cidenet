<?php 
	$email = substr("edwin.andrade_1@cidenet.com.co", -16, 1);
	$email2 = substr("edwin.andrade_1@cidenet.com.co", -17, 1);
	if (intval($email) !== 0) {
		// $countEmail = strval($email + "1");
		$countEmail = intval($email ++);
		echo "<p>".var_dump($email)."</p>";
		echo "<p>".var_dump($email2)."</p>";
		$resultado = "edwin."."andrade_".$email."@cidenet.com.co";
		var_dump($resultado);
	} else {
		$countEmail = intval($email ++);
		$resultado = "edwin."."andrade_"."1"."@cidenet.com.co";
		var_dump($resultado);
	}
	echo intval($email);

 ?>