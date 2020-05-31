<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>CADASTRO Contato</h1>
    
    <form action="config/cadastraContato.php" method="post"> 
        <label>Nome</label> <input type="text" id="nome" name="nome" required><br/><br/>
        <label>Telefone</label> <input type="text" id="telefone" name="telefone" required><br/><br/>
        <label>E-mail</label> <input type="text" id="email" name="email" required><br/><br/>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>