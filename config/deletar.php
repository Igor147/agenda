<?php
include("conexao.php");
    $id = $_GET['id'];

    $sql = new mysqli($host, $username, $password, $database) or die("falha na conexao");
    $sql->set_charset('utf8');

    $s = $sql->prepare("DELETE FROM contato WHERE id=?");
    $s->bind_param('d',$id);
    if(!$s->execute()){
        $erro = "erro ao inserir dados no banco";
    }
    $s->close();

    if($sql)
        echo "<script>
                location.href='index.php';
              </script>";
    else 
        echo "<script>
                alert('Nao foi possivel deletar o usuario');    
            </script>";
?>