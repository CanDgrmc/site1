<div class="mesajlar well col-md-10"> 
	<div class="menu col-md-5">
	<div class="dropdown col-md-12">

		<a href="#" class="dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img src="<?php echo base_url();?>icons/messages.png"> <span class="caret"></span></a>
		<ul class="dropdown-menu " aria-labelledby="dropdownMenu" style="margin-top: -10px">
		<li><a href="">Hepsini Sil</a></li>
		<li><a href="">Hepsi Okundu</a></li>

		</ul>
	</div></div>
	<?php 
	$say=1;
	foreach ($mesajlar as $mesaj) {
		$id=$mesaj->id;
		$msg=$mesaj->mesaj;
		$mail=$mesaj->mail;
		$okundu=$mesaj->okundu;
		
		if ($okundu==0) {
			if($say<=3){
			echo '<div class="mesaj col-md-8" style="margin-top:50px">';
			
			echo '<img src="'.base_url().'icons/mail_red.png" class="col-md-1"><p class="col-md-9 ">'.$msg.'</p><a class="text-right text-danger col-md-1" style="margin-left:20px;" href="'.base_url().'Yonetim/mesajSil?id='.$id.'"><i class="fa fa-window-close " ></i></a>';
			echo '<p class="text-right col-md-12"><small>'.$mail.'</small></p>';
			echo '<a class="btn btn-default col-md-offset-1 col-md-2" href="'.base_url().'Yonetim/read?id='.$id.'"><i class="glyphicon glyphicon-ok"></i></a>';
			
			echo '</div>';
			$say+=1;
				};
			};
		
	}

	
	foreach ($mesajlar as $mesaj) {
		$id=$mesaj->id;
		$msg=$mesaj->mesaj;
		$mail=$mesaj->mail;
		$okundu=$mesaj->okundu;
		
		if ($okundu==1) {
			echo '<div class="mesaj col-md-8" style="margin-top:50px">';
			echo '<img src="'.base_url().'icons/mail_black.png" class="col-md-1"><p class="col-md-9 ">'.$msg.'</p><a class="text-right text-danger col-md-1" style="margin-left:20px;" href="'.base_url().'Yonetim/mesajSil?id='.$id.'"><i class="fa fa-window-close " ></i></a>';
			echo '<p class="text-right col-md-12"><small>'.$mail.'</small></p>';
			echo '<a class="btn btn-default disabled col-md-2 col-md-offset-1">Okundu</a>';
			
			echo '</div>';
			}
		
	}


	;?>
</div>

