<?php

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
	ini_set('default_charset','UTF-8');
	header("Content-Type: text/html; charset=ISO-8859-1", true);
	header("Content-Type: text/html; charset=UTF-8", true);

	include_once 'conexao.php';

	$id_produto = $_POST['id_produto'];

	$sql = $dbcon->query(" select * from view_localizacao where id_produto =".$id_produto);


	if(mysqli_num_rows($sql) > 0){

		$lista = [];

		while($dados = $sql->fetch_array()){

			$obj = array(

	  "latitude" => $dados['latitude'],
      "longitude" => $dados['longitude'],
	  "cep" => $dados['rua']. ", ". $dados['numero_loja']. ", " . $dados['nome_cidade']. ", " . $dados['nome_estado'],
	  );


			$lista[] = $obj;
		}

		echo json_encode($lista);

	} else {

		echo("erro");
	}


?>
