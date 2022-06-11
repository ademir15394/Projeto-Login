<?php 
include_once('conexao.php');
$login = $_POST['login'];
$senha = $_POST['senha'];

$sqlstring = " select * from tbl_usuario01 where login = '$login' and senha='$senha'";$info = @mysqli_query($conexao, $sqlstring);

if (!$info) { die('<b>Query Inválida: </b>' . mysqli_error($conexao));

}$registro = mysqli_num_rows($info);

if($registro!=0){echo "Usuário não localizado!!!!!";

    echo "<br><a href='login.php'>Voltar</a>";

}else{$dados = mysqli_fetch_array($info);
    
session_start();
$_SESSION['id'] = $dados['id'];
$_SESSION['nome'] = $dados['nome'];
$_SESSION['log'] = 'ativo';

echo $_SESSION['log'];


 
 
 }?>