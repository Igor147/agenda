<?php 
include("../conexao.php");
        
$nome       = $_POST['nome'];
$telefone   = $_POST['telefone'];
$email      = $_POST['email'];

$sql = new mysqli($host, $username, $password, $database) or die("falha na conexao");
$sql->set_charset('utf8');

$s = $sql->prepare("INSERT INTO contato(nome,telefone,email) VALUES (?,?,?)");
$s->bind_param('sss',$nome,$telefone,$email);
if(!$s->execute()){
    $msg = "erro ao inserir dados no banco";
}else{
    $msg = "Cadastro realizado!";
}
$s->close();        

echo "<script>alert('$msg');location.href='../index.php'</script>";
// header("Location: ../index.php");