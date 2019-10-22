<!DOCTYPE html>
<html>
<head>
	<title>sht</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		#alert-success,#alert-fail{
			position: fixed;
			top:50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color:#000;
			border-radius: 30px;
			border: 2px solid #000;
			z-index: 99900000;
			padding: 20px;
		}
		#alert-fail{
			background-color: #f00;
		}
		#alert-success{
			background-color: #ff0;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="edit.php">Edit</a>
      </li>
      
      
    </ul>
    
  </div>
</nav>
