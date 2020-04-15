<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>

	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>

    </div>
  </div>
  </div>
</nav>