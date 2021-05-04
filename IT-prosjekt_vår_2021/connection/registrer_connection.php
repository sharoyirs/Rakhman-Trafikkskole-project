<?php
	$con = mysqli_connect('localhost', 'root', '123asdqwe', 'rakhman_trafikkskole');

	if(!$con)
	{
		echo 'Sjekk din database forbindelse';
	}

?>