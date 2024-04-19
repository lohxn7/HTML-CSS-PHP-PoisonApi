<?php
$name=$_POST['name'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$conexao =  mysqli_connect('localhost', 'root', '', 'Poison') or die('deu erro');
$inserir = "insert into info (nome, senha, email) values('$name', '$senha', '$email')";
mysqli_query($conexao‚$inserir)ordie('dado inserido');
mysqli_close($conexao);
header("refresh: 2.5; url=cadastrado.html");
