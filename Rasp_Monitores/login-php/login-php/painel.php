<?php
session_start();
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

essa página serve para mostrar a peppa pig assustando, se você viu a peppa, está funcionando.

<img src="https://i.ytimg.com/vi/A1zAQVyWeMY/maxresdefault.jpg" />
<h2><a href="logout.php">Fazer Logoff</a></h2>