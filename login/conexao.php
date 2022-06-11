<?php 
//conectando ao banco
$host = "localhost";
$user = "root";
$pass = "usbw";
$banco = "banco";

//conexao
$conexao = @mysqli_connect($host,$user,$pass,$banco)
or die ('Problema com a conexão com o banco');

?>