<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>css/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Yönetici Girişi</title>
</head>
<body>
<div class="form-inline">
<form class="well">
	<label for="usr">Kullanıcı Adı:</label>
	<input type="text" name="usr" class="form-control" id="usr">
	<label for="pass">Şifre</label>
	<input type="password" name="pass" class="form-control" id="pass">
	<button class="btn btn-default">Giriş Yap</button><a href="<?php echo base_url();?>" class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> </a>
</form>
</div>

</body>
</html>