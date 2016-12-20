<div class="sidebar col-md-2 col-xs-3 well">
	<h3>Yönetim Paneli</h3>
	<ul class="list-group col-md-12">
	<h5>Görünüm</h5>
		<a href="<?php echo base_url();?>Yonetim/adminPanel" class="list-group-item" id="yonetim"><i class="glyphicon glyphicon-user"></i> Yönetici</a>
		<a href="<?php echo base_url() ;?>" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-triangle-right"></i> Frontend</a>
	</ul>
	<h5>Yönetim</h5>
	<ul class="list-group">
		<a href="#" class="list-group-item"><i class="glyphicon glyphicon-eye-open"></i> Kod Örnekleri</a>
		<a href="#" class="list-group-item"><i class="glyphicon glyphicon-book"></i> Makaleler</a>
		<a href="#" class="list-group-item"><i class="glyphicon glyphicon-wrench"></i> Üye İşlemleri</a>
		<a href="" class="list-group-item"><i class="glyphicon glyphicon-folder-open"></i> Dosyalar</a>

	</ul>
	<h5>İletişim</h5>
	<ul class="list-group">
		<a href="<?php echo base_url();?>Yonetim/mesajlar" class="list-group-item" id="messages">Mesajlar <?php
		if (! empty($mesajlar)) {
			$mesajsayisi=count($mesajlar);
			echo '<span class="badge">';
			echo $mesajsayisi;
			echo '</span>';
		}
		;?></a>
		<a href="<?php echo base_url();?>Yonetim/postOnay" class="list-group-item">Makale Onay <?php 
		if (! empty($onay)) {
			$onaybekleyen=count($onay) ;
			echo '<span class="badge">';
			echo $onaybekleyen;
			echo '</span>';
		}
		
		?></a>
		<a href="<?php echo base_url();?>" class="list-group-item">Yorum Onay <span class="badge">X</span></a>
		<a href="<?php echo base_url();?>" class="list-group-item">Kod Onay <span class="badge">X</span></a>
	</ul>
</div>
