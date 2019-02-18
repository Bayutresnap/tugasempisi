<!DOCTYPE html>
<html>
<head>
	<title> <?= $data['judul'];?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
	<style media="screen">
		body{
			background-color: pink;
		}
		#dimas:hover{
			background-color: lime;
		}
		#d:hover{
			background-color: lime;
		}
		#tombolCari:hover{
			background-color: lime;
		}
		#as:hover{
			background-color: lime;
		}
	</style>
</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>">Terus belajar Coding</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link " href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
      <a class="nav-item nav-link " href="<?= BASEURL; ?>/about">About</a>
    </div>
  </div>
  </div>
</nav>
