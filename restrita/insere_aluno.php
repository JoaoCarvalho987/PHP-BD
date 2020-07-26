<?php
	include '../conecta.php';

	$no = $_POST['nome'];
	$em = $_POST['email'];
	$te = $_POST['telefone'];
	$ce = $_POST['celular'];
	$da = $_POST['nascimento'];
	$tu = $_POST['select'];

	$consulta = $conex -> prepare("INSERT INTO aluno(nome, turma, tel, email, celular, dataNascimento) VALUES ('$no', '$tu', '$te', '$em', '$ce', '$da')");
	$consulta -> execute();
	header('location: index.php');

?>