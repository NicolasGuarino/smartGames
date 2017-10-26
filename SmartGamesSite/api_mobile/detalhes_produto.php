<?php

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
	ini_set('default_charset','UTF-8');	
	header("Content-Type: text/html; charset=ISO-8859-1", true);
	header("Content-Type: text/html; charset=UTF-8", true);
	
	include_once 'conexao.php';
	
	$id_produto = $_GET['id_produto'];
	
	$sql = $dbcon->query(" select * from view_produto_detalhes
        where id_produto = $id_produto;");
	
	
	if(mysqli_num_rows($sql) > 0){
		
		$lista = [];
		
		while($dados = $sql->fetch_array()){
			
			$obj = array("id_produto" => $dados['id_produto'] ,
      "nome_detalhes_produto" => $dados['nome_produto'],
	  "preco_detalhes_produto" => "R$ ". number_format($dados['preco'], 2, "," , "."),
      "marca_detalhes_produto" => $dados['marca_modelo'],
      "foto_produto" =>$dados['foto_produto'],
	  "nome_loja" =>$dados['nome_loja'],
	  "cep" => $dados['rua']. ", ". $dados['numero_loja']. ", " . $dados['nome_cidade']. ", " . $dados['nome_estado'],
		"descricao_detalhes_produto" =>$dados['descricao'],	  
	  );
	   
						
			$lista[] = $obj;
		}
		
		echo json_encode($lista);
			
	} else {
		
		echo("erro");
	}


?>