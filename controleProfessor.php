<?php
	include 'crudProfessor.php';
	$opcao = $_POST["opcao"];

	switch($opcao){
		

		case 'Cadastrar':
			$nome = $_POST["nome"];
			$cpf = $_POST["cpf"];
			$celular = $_POST["celular"];
			$cep = $_POST["cep"];

			cadastrarProfessor($nome, $cpf, $celular, $cep);
			header("Location: cadastrarProfessor.php");
		
			break;

		case 'Editar':
			$codigo = $_POST["codigo"];
			$nome = $_POST["nome"];
			$cpf = $_POST["cpf"];
			$celular = $_POST["celular"];
			$cep = $_POST["cep"];
			
			alterarProfessor($codigo, $nome, $cpf, $celular, $cep);

			header("Location: visualizarProfessor.php");
		
			break;


		case 'Excluir':
			excluirProfessor($_POST["codigo"]);
			header("Location: visualizarProfessor.php");
		
			break;


	}


?>