<?php

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
	ini_set('default_charset','UTF-8');
	header("Content-Type: text/html; charset=ISO-8859-1", true);
	header("Content-Type: text/html; charset=UTF-8", true);

	include_once 'conexao.php';


	$sql = $dbcon->query("select * from view_produtos_xbox ");

	if(mysqli_num_rows($sql) > 0){

		$lista = [];

		while($dados = $sql->fetch_array()){

			$obj = array(" id_produto" => $dados['id_produto'],
      "nome_produto" => $dados['nome_produto'],
      "preco_produto" => number_format($dados['preco'], 2, "," , "."),
      "foto_produto" =>$dados['foto_produto'],
      "marca_modelo" => $dados['marca_modelo']);

			$lista[] = $obj;
		}

		echo json_encode($lista);


	}

?>
