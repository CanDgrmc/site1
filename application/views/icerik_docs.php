<div class="container-fluid">
	<?php   
	if (!empty($makaleler)) {
		$postsay= count($makale);
		
		foreach ($makaleler as $makale) {
			$baslik=$makale->baslik;
			$thumbnail=$makale->thumbnail;
			$text=$makale->text;
			$id=$makale->id;
			$aciklama=$makale->aciklama;
			$date=$makale->date;
		/* Her Post  */
			echo '<div class="post col-md-3 col-md-offset-1 well">';
			echo '<img src="'.$thumbnail.'" class="thumbnail">';
			echo '<div class="seperate"></div>';
			echo '<h4 class="text-default">'.$baslik.'</h4><span class="badge">#'.$id.'</span>';
			echo '<p class="text">'.$aciklama.'</p>';
			echo '<p>'.$date.'</p>';
			echo '</div>';
	}
	}
	if(!empty($ustmakaleler)){
		# Sayfa Sayısı İçin
		$postsay= count($ustmakaleler)/20;
		$tamsayi=round($postsay);
		
		
		foreach ($ustmakaleler as $makale) {
			$baslik=$makale->baslik;
			$thumbnail=$makale->thumbnail;
			$text=$makale->text;
			$id=$makale->id;
			$aciklama=$makale->aciklama;
			$date=$makale->date;

		/* Her Post  */
			echo '<div class="post col-md-3 col-md-offset-1 well">';
			echo '<img src="'.$thumbnail.'" class="thumbnail">';
			echo '<div class="seperate"></div>';
			echo '<h4 class="text-default">'.$baslik.'</h4><span class="badge">#'.$id.'</span>';
			echo '<p class="text">'.$aciklama.'</p>';
			echo '<p>'.$date.'</p>';
			echo '</div>';
		}
	}


	?>
</div>