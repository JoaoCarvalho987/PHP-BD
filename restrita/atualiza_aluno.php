<?php
include '../conecta.php';


$ra = $_GET['ra'];
$no = $_POST['nome'];
$em = $_POST['email'];
$te = $_POST['telefone'];
$ce = $_POST['celular'];
$na = $_POST['nascimento'];

$consulta = $conex -> prepare("UPDATE aluno SET nome='$no', email ='$em', dataNascimento='$na', tel='$te', celular='$ce' WHERE ra = '$ra' ");

$consulta -> execute();

header('Location: index.php');

?>