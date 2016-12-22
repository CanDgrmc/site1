<div class="makaleonay col-md-10 well">
	<?php  
	foreach ($onay as $makale) {
		$altkategori_id=$makale->altkategori_id;
		$kategoriid=$makale->kategori_id;
		$aciklama=$makale->aciklama;
		$text=$makale->text;
		$thumbnail=$makale->thumbnail;
		$baslik=$makale->baslik;
		$yazarid=$makale->yazar_id;
		$makaleid=$makale->id;
		############################################################
		echo '<div class="bekleyenmakale col-md-10" style="margin-top:30px;border:1px solid #c7c7c7;border-radius:10px;padding:20px"><span class="caret" style="position:absolute;right:10px;top:10px;"></span>';
		echo '<img src="'.$thumbnail.'" class="col-md-4" style="width:120px; height:100px;">';
		echo '<h4 class="col-md-6">'.$baslik.'</h4>';
		echo '<p class="col-md-6"><strong>Açıklama: </strong> '.$aciklama.'</p>';
		foreach ($kategoriler as $kategori) {
			$id=$kategori->kategori_id;
			$kategori_adi=$kategori->kategori_adi;
				if ($kategoriid==$id) {
					echo '<p class="col-md-1">'.$kategori_adi.' ,</p>';
					
					
			}
		}
		foreach ($altkategoriler as $altkategori) {
			$id=$altkategori->id;
			$altkategori_adi=$altkategori->kategoriadi;
			if ($id==$altkategori_id) {
				echo '<p class="col-md-1"> '.$altkategori_adi.'</p>';
			}
		}
		echo '<p class="col-md-8"><small>'.$text.'</small></p>';
		echo '<a class="btn btn-success col-md-4 fa fa-check-square-o" href="'.base_url().'Yonetim/makaleOnay?id='.$makaleid.'"> Onayla</a>';
		echo '<a class="btn btn-danger col-md-4 col-md-offset-1 fa fa-trash-o" href="'.base_url().'Yonetim/makaleSil?id='.$makaleid.'"> Sil</a>';
		echo '</div>';
	}





	;?>
</div>