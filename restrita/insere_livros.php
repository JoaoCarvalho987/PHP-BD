<?php
	include '../conecta.php';

	$ti = $_POST['titulo'];
	$autor = $_POST['autor'];
	$genero = $_POST['select'];
	$editora = $_POST['editora'];
	$paginas = $_POST['paginas'];
	$exemplares = $_POST['exemplares'];
	

$consulta2 = $conex -> prepare("INSERT INTO livros(titulo, autor, genero, editora, paginas, qtdeExemplares) VALUES('$ti', '$autor', '$genero', '$editora', '$paginas', $exemplares)");
	$consulta2 -> execute();
	header('location: index.php');

?>