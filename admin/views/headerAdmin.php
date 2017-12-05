<?php 
if (isset($_SESSION['connected']) && $_SESSION['connected'] === true) {
	echo "<br/>Vous êtes connecté";
}
// var_dump($_SESSION) ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin iEldinn</title>
		<meta charset="utf8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="iEldinnAdmin.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" ></script> 

	</head>

	<body class="bodyAdmin">
		<header>
	<h1>★ ADMIN ★</h1>
			<nav>
				<ul>
					<li><a href="index.php">Admin</a></li>
					<li><a href="../index.php">Site</a></li>
					<li><?php if(isset($_SESSION['connected']) && $_SESSION['connected']): ?>
						<a href="logout.php">Deconnection</a>
					<?php else: ?>
						<a href="login.php">Connection</a>
					<?php endif ?></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>

		