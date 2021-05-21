<?php
	$content = file_get_contents("https://cursos.dankicode.com");

	preg_match_all('/<div class="box-curso-wraper">(.*?)<\/div>/s', $content, $matches);

	print_r($matches);
?>