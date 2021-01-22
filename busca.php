<?php

	include 'crudProfessor.php';
	$pesquisa = $_POST["palavra"];

	switch ($pesquisa) {
		case 'tudo':
			$resutado = mostrarProfessores();
			break;
		
		default:
			$resutado = mostrarProfessoresPesquisar($pesquisa);
			break;
	}

	if(mysqli_num_rows($resultado)<=0){
		echo 'Nenhum professor(a) encontrado(a)';
	}
	else{
		while($resultadoSeparado = mysqli_fetch_assoc($resultado)){
          echo "
          <tr>
            <td>$resultadoSeparado[nome]</td>
            <td>$resultadoSeparado[cpf]</td>
            <td>$resultadoSeparado[celular]</td>
            <td>$resultadoSeparado[cep]</td>
            <td><a href='editarProfessor.php?codigo=$resultadoSeparado[codigo]' class='btn btn-success'>Editar</a></td>
          </tr>

          ";

        }
	}

?>
