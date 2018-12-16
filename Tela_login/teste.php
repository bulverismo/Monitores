<html>
<head>
 <title>Upload de imagens</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
<div class="container">
<h2><strong>Envio de imagens</strong></h2><hr>

<form method="POST" enctype="multipart/form-data">
  <label for="conteudo">Enviar imagem:</label>
  <input type="file" name="pic1"accept="image/*" class="form-control">
   <label for="conteudo">Enviar imagem:</label>
  <input type="file" name="pic2" accept="image/*" class="form-control">

  <div align="center">
    <button type="submit" class="btn btn-success">Enviar imagem</button>
  </div>
</form>
 
 <hr>
 
 <?php
 if(isset($_FILES['pic1']))
 {
    $ext = strtolower(substr($_FILES['pic1']['name'],-4)); //Pegando extensão do arquivo
    $new_name = '1' . $ext; //Definindo um novo nome para o arquivo
	
	
    $dir = './imagens/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic1']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="alert alert-success" role="alert" align="center">
          <img src="./imagens/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
          <br>
          Imagem enviada com sucesso!
          <br>
          <a href="exemplo_upload_de_imagens.php">
          <button class="btn btn-default">Enviar nova imagem</button>
          </a></div>';
		
		
 } 
  if(isset($_FILES['pic2']))
 {
    $ext = strtolower(substr($_FILES['pic2']['name'],-4)); //Pegando extensão do arquivo
    $new_name = '2' . $ext; //Definindo um novo nome para o arquivo
	
	
    $dir = './imagens/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic2']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="alert alert-success" role="alert" align="center">
          <img src="./imagens/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
          <br>
          Imagem enviada com sucesso!
          <br>
          <a href="exemplo_upload_de_imagens.php">
          <button class="btn btn-default">Enviar nova imagem</button>
          </a></div>';
		
		
 } 
 
 ?>

</div>
<body>
</html>