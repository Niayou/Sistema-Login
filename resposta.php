<?php
$titulo = $_POST['Título'];
$conteudo = $_POST ['Conteúdo'];
$autor = $_POST ['Autor'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Final</title>
</head>
<body>
    <div class="titulo">
        <img src="./imagens/montanha.png" width="50%">
        <h1> <?php echo $_POST['Título'] ?> </h1>
        <h2> <?php echo $_POST['Conteúdo'] ?> </h2>
        <h3> <?php echo $_POST['Autor'] ?> </h3>    
</body>
</html>