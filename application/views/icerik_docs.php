<div class="container-fluid">
	<?php   
	if (!empty($makaleler)) {
		foreach ($makaleler as $makale) {
		$text=$makale->baslik;
		$thumbnail=$makale->thumbnail;
		/* Her Post  */
		echo '<div class="post">';
		echo $text;
		echo '<img src="'.$thumbnail.'">';
		echo '</div>';
	}
	}



	?>
</div>