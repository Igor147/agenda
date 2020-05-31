<?php 
include("../conexao.php");
error_reporting(0);
    $id = $_GET['id'];


    $nome       =   $_POST['nome'];
    $email      =   $_POST['email'];
    $telefone   =   $_POST['telefone'];
    $idContato  =   $_POST['contato'];

    $sql = $mysqli->prepare( "SELECT nome, telefone, email FROM contato WHERE id=?");
    $sql->bind_param('d', $id);
    $sql->execute();
    $sql->bind_result($dado['nome'], $dado['telefone'], $dado['email']);
    $sql->fetch();
    $sql->close();

    if(isset($nome))
    {
        $sql = new mysqli($host, $username, $password, $database) or die("falha na conexao");
        $sql->set_charset('utf8');

        $s = $sql->prepare("UPDATE contato SET nome=?, email=?, telefone=? WHERE id = $idContato");
        $s->bind_param('sss',$nome,$email,$telefone);
        if(!$s->execute()){
            $erro = "erro ao inserir dados no banco";
            exit();
        }else{
            echo $sql->error;
        }
        $s->close();
        echo "<script>alert('Contato Atualizado com sucesso!');location.href='../index.php'</script>";
    }
?>