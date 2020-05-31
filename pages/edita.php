<?php
error_reporting(0);
include ("conexao.php");
include ("config/editaContato.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Editar Contato</h1>
    <form action="config/editaContato.php?id=<?=$id;?>" method="POST">
        
        <label>Nome</label> <input type="text" id="nome" name="nome" value="<?=$dado["nome"];?>"><br/><br/>
        <label>Telefone</label> <input type="text" id="telefone" name="telefone" value="<?=$dado["telefone"];?>"><br/><br/>
        <label>E-mail</label> <input type="text" id="email" name="email" value="<?= $dado["email"];?>"><br/><br/>
        <input type="hidden" name="contato" value="<?=$id;?>">
        <button type="submit">Editar</button>
    </form>
</body>
</html>