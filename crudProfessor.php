<?php
	
	include 'conexaoDB.php';
	
	function cadastrarProfessor($nome, $cpf, $celular, $cep){
		connect();
		query("INSERT INTO professor (nome, cpf, celular, cep) VALUES ('$nome', '$cpf', '$celular', '$cep')");
		close();
	}

	function mostrarProfessores(){
		connect();
		$resultado = query("SELECT * from professor");
		close();
		return $resultado;
	}

	function buscarProfessor($codigo){
		connect();
		$resultado = query("SELECT * from professor WHERE codigo = $codigo");
		close();

		return $resultado;

	}

	function alterarProfessor($codigo, $nome, $cpf, $celular, $cep){
		connect();
		query("UPDATE professor SET nome = '$nome', cpf = '$cpf', celular = '$celular', cep = $cep WHERE codigo = $codigo");
		close();
	}

	function excluirProfessor($codigo){
		connect();
		query("DELETE FROM professor WHERE codigo = $codigo");
		close();
	}

	function mostrarProfessoresPesquisar($pesquisa){
		connect();
		$resultado = query("SELECT * from professor WHERE nome LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%' OR celular LIKE '%$pesquisa%' OR cep LIKE '%$pesquisa%'");
		close();

		return $resultado;
	}

?>