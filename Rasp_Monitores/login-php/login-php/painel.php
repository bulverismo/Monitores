<?php
session_start();
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

Para inserir imagens nos monitores: aqui!
<h2><a href="logout.php">Fazer Logoff</a></h2>