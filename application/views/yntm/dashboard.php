<div class="container col-md-10" id="dashboard">
	<div class="statics col-md-12 well">
		<div class="icons col-md-3 col-md-offset-1">
			<img src="<?php echo base_url(); ?>icons/chart.png" class="icon">
			<STRONG>Toplam Makale: <small><?php 
			$makalesayisi=count($makaleler);
			echo $makalesayisi;
			 ;?></small></STRONG>
		</div>
		<div class="icons col-md-3 ">
			<img src="<?php echo base_url(); ?>icons/users.png" class="icon">
			<STRONG>Toplam Üye: <small>132</small></STRONG>
		</div>
		<div class="icons col-md-3 ">
			<img src="<?php echo base_url(); ?>icons/user-blue.png" class="icon">
			<STRONG>Editörler: <small>132</small></STRONG>
		</div>
	</div>
	<div class="col-md-9">
		
	</div>

	<div class="col-md-3 well well-sm">
		<h4>Son Makaleler <span class="caret"></span></h4>
		<?php
			foreach ($lastPosts as $last) {
				$baslik=$last->baslik;
				$tarih=$last->date;
				$thumbnail=$last->thumbnail;

				echo '<div class="yorumlar col-md-12">';
				echo '<h4 class="col-md-12">'.$baslik.'</h4>';
				echo '<p class="text-warning col-md-7"><small>'.$tarih.'</small></p><p class="text-default col-md-4 text-right">Üyenin Adısıı</p>';
				echo '</div>';
			}
		;?>
	</div>
</div>
