<div class="sidebar col-md-2 col-xs-3 well">
	<img src="<?php echo base_url();?>icons/logo.png">
	<ul class="list-group col-md-12">
	<h5>Görünüm <i class="fa fa fa-spinner fa-spin"></i></h5>
		<a href="<?php echo base_url();?>Yonetim/adminPanel" class="list-group-item" id="yonetim"><i class="fa fa-user-circle-o"></i> Yönetici</a>
		<a href="<?php echo base_url() ;?>" target="_blank" class="list-group-item"><i class="fa fa-television"></i> Frontend</a>
	</ul>
	<h5>Yönetim <i class="fa fa-cog fa-spin"></i></h5>
	<ul class="list-group">
		<a href="#" class="list-group-item"><i class="fa fa-file-code-o" ></i> Kod Örnekleri</a>
		<a href="#" class="list-group-item"><i class="fa fa-archive"></i> Makaleler</a>
		<a href="" class="list-group-item"><i class="glyphicon glyphicon-equalizer"></i> Kategoriler</a>
		<a href="#" class="list-group-item"><i class="fa fa-address-card-o"></i> Üye İşlemleri</a>
		<a href="" class="list-group-item"><i class="fa fa-folder-open"></i> Dosyalar</a>

	</ul>
	<h5>İletişim</h5>
	<ul class="list-group">
		<a href="<?php echo base_url();?>Yonetim/mesajlar" class="list-group-item" id="messages">Mesajlar <?php
		if (! empty($mesajlar)) {
			$say=0;
			foreach ($mesajlar as $mesaj) {
				$okundu=$mesaj->okundu;
				if ($okundu==0) {
					$say++;
				}
			}
			echo '<span class="badge" style="background-color:#ff3131">';
			echo $say;
			echo '</span>';
		}
		;?></a>
		<a href="<?php echo base_url();?>Yonetim/postOnay" class="list-group-item">Makale Onay  <?php 
		if (! empty($onay)) {
			$onaybekleyen=count($onay) ;
			echo '<span class="badge" style="background-color:#ff3131" >';
			echo $onaybekleyen;
			echo '</span>';
		}
		
		?></a>
		<a href="<?php echo base_url();?>" class="list-group-item">Yorum Onay <span class="badge">X</span></a>
		<a href="<?php echo base_url();?>" class="list-group-item">Kod Onay <span class="badge">X</span></a>
	</ul>
</div>
