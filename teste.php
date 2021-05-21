<?php
	include("simple_html_dom.php");

	$content = file_get_contents('https://cursos.dankicode.com');

	preg_match_all('/<div class="box-curso-wraper">(.*?)<img src="(.*?)" \/>(.*?)<\/div>/s', $content, $matches);

	//echo strip_tags($matches[2][0]);

	foreach ($matches[2] as $key => $value) {
		echo $value;
		echo '<hr>';
	}
?>