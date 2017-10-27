<?php


 include("conexao_banco.php");

 @$id_cliente = $_GET['id_cliente'];


?>



<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
              <div class="row">
                 <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                     <h2>Recomendados para você</h2>
                     <p>"Selecionamos alguns jogos para você"</p>
                 </div>
              </div>

        			<div id="HomeList" class="CarrosselProdutos">
                <?php
                $sql = "select produto.* from tbl_produto as produto
                                inner join tbl_usuario as usuario
                                on usuario.id_tipo_produto = produto.id_tipo_produto where id_usuario=".$id_cliente;
                      $select = mysql_query($sql) or die (mysql_error());
                      while($rs = mysql_fetch_array($select)){
                        $preco = number_format($rs['preco'], 2, "," , ".");



                 ?>
          				<a href="detalhes_produto.php?id_produto=<?php echo($rs['id_produto']); ?>&id_cliente=<?php echo($id_cliente); ?>"><div class="DivProduto ">
          					<div class="DivFoto"><img src="CMS/Arquivos/<?php echo($rs['foto_produto']); ?>" class="FotoImg" alt="" title="Just Dance 2018 - PS4 (Pré-venda)">
                    </div>
          					<div class="DivDados">
          						<div class="DivNome"><?php echo($rs['nome_produto']); ?></div>
          						<div class="DivValor" >R$ <?php echo($preco); ?></div>
          						<div class="DivFraseBoleto">Localize uma loja</div>
          					</div>
          				</div></a>
                <?php  } ?>

              </div>

            </div>
          </div>
