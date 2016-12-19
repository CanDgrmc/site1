<div class="container-fluid well">
	<?php 

	foreach ($kategoriler as $kategori) {
		$kategoriid= $kategori->kategori_id;
		$kategoriadi=$kategori->kategori_adi;

		
		echo '<div class="col-md-6">';
		echo '<p class="text-default">'.$kategoriadi.'</p>';
		echo '<div class="list-group">';
		/* Kategoriye Göre Eşleme */
		foreach ($altkategoriler as $altkategori) {
			$altkategoriid=$altkategori->id;
			$altkategoriadi=$altkategori->kategoriadi;
			$esleme=$altkategori->kategori_id;
		/* Kategori id  ilişik kategori id  */
			###############################################################################################
		if ($kategoriid==$esleme) {
			
			echo '<a href="'.base_url().'/welcome/kDocs?k='.$altkategoriid.'"  class="list-group-item">';
			echo $altkategoriadi;
			echo '</a>';
		}
			
		}
		echo '</div></div>';	
	}

	  ;?>
	
</div>