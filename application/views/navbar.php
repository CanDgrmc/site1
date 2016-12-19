
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_baslik ;?></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>css/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><?php echo $site_adi  ;?></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i> Anasayfa</a></li>
				<li><a href="<?php echo base_url();?>welcome/Docs"> <i class="glyphicon glyphicon-book"></i> Dökümantasyon</a></li>
				<li><a href=""><i class="glyphicon glyphicon-eye-open"></i> Kod Örnekleri</a></li>
				<li><a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Kategoriler</a>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

			   	<?php  
			   	foreach ($kategoriler as $kategori) {
			   		
			   			$kategoriadi=$kategori->kategori_adi;
			   			$kategoriid=$kategori->kategori_id;
			   			echo '<li>';
					   	echo '<a href="'.base_url().'welcome/docs?ustk='.$kategoriid.'">';
					   	echo $kategoriadi;
					   	echo ' <i class="glyphicon glyphicon-chevron-right"></i></a> </li>';
			   			
			   	}


			   	;?>

			  </ul></li>
			  <li><a href=""><i class="glyphicon glyphicon-log-in"></i> Giriş</a></li>
			</ul>
			
		</div>
	</nav>