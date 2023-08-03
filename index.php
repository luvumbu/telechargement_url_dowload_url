<?php 

	$url = 'https://i.pinimg.com/564x/e0/83/12/e083121741eca81484f09f5ca9369d4d.jpg'
	$img = rand(0,9999999999).'.png';
	// Enregistrer l'image
	file_put_contents($img, file_get_contents($url));
?>