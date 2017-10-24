<?php

session_start();

 include("conexao_banco.php");

?>



<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Smart Games | Home</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include('links/links.html') ?>

    </head>
    <body>
        <?php include('menu.php') ?>

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"> <img src="CMS/Fotos_Slides/assassins.jpg" alt=""></div>
                    <div class="item"> <img src="CMS/Fotos_Slides/destiny.jpg" alt=""></div>
                    <div class="item"> <img src="CMS/Fotos_Slides/gran.jpg" alt=""></div>
                    <div class="item"> <img src="CMS/Fotos_Slides/forza.jpg" alt=""></div>
                    <div class="item"> <img src="CMS/Fotos_Slides/mario.jpg" alt=""></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <img src="assets/img/2.png" alt="">
                        <div class="search-form wow pulse" data-wow-delay="0.8s">
							<?php
								if(isset($_GET['btn_pesquisar'])){
									$pesquisa= $_GET['pesquisa'];
								}
							?>
							<form method="get" action="melhores_destinos.php" name="pesquisar" class=" form-inline">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Encontre jogos, consoles e muito mais" name="pesquisa">
                  </div>
									<button class="btn search-btn" type="submit" name="btn_pesquisar"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
              <div class="row">
                 <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                     <h2>Destaques Lançamentos</h2>
                     <p>"Reserve em uma de nossas lojas"</p>
                 </div>
              </div>

        			<div id="HomeList" class="CarrosselProdutos">
                <?php
                $sql = "select * from tbl_produto where lancamento = 1 order by rand() limit 8";
                      $select = mysql_query($sql) or die (mysql_error());
                      while($rs = mysql_fetch_array($select)){
                        $preco = number_format($rs['preco'], 2, "," , ".");


                 ?>
          				<div class="DivProduto ">
          					<div class="DivFoto"><img src="CMS/Arquivos/<?php echo($rs['foto_produto']); ?>" class="FotoImg" alt="" title="Just Dance 2018 - PS4 (Pré-venda)">
                    </div>
          					<div class="DivDados">
          						<div class="DivNome"><?php echo($rs['nome_produto']); ?></div>
          						<div class="DivValor" >R$ <?php echo($preco); ?></div>
          						<div class="DivFraseBoleto">Localize uma loja</div>
          					</div>
          				</div>
                <?php  } ?>

              </div>

              <div class="row">
                 <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                     <h2>Lançamentos PS4</h2>
                     <p>"Os melhores jogos para playstation 4 você encontra aqui!"</p>
                 </div>
              </div>

              <div id="HomeList" class="CarrosselProdutos">
                <?php
                $sql = "select * from tbl_produto where id_tipo_produto = 1 order by rand() limit 6;";
                      $select_ps4 = mysql_query($sql) or die (mysql_error());
                      while($rs = mysql_fetch_array($select_ps4)){
                        $preco = number_format($rs['preco'], 2, "," , ".");

                 ?>
          				<div class="DivProduto ">
          					<div class="DivFoto"><img src="CMS/Arquivos/<?php echo($rs['foto_produto']); ?>" class="FotoImg" alt="" title="Just Dance 2018 - PS4 (Pré-venda)">
                    </div>
          					<div class="DivDados">
          						<div class="DivNome"><?php echo($rs['nome_produto']); ?></div>
          						<div class="DivValor" >R$ <?php echo($preco); ?></div>
          						<div class="DivFraseBoleto">Localize uma loja</div>
          					</div>
          				</div>
                <?php  } ?>

              </div>


              <div class="row">
                 <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                     <h2>Lançamentos XBOX</h2>
                     <p>"Os melhores jogos para XBOX você encontra aqui!"</p>
                 </div>
              </div>

              <div id="HomeList" class="CarrosselProdutos">
                <?php
                $sql = "select * from tbl_produto where id_tipo_produto = 2 order by rand() limit 6;";
                      $select_xbox = mysql_query($sql) or die (mysql_error());
                      while($rs = mysql_fetch_array($select_xbox)){
                        $preco = number_format($rs['preco'], 2, "," , ".");

                 ?>
          				<div class="DivProduto ">
          					<div class="DivFoto"><img src="CMS/Arquivos/<?php echo($rs['foto_produto']); ?>" class="FotoImg" alt="" title="Just Dance 2018 - PS4 (Pré-venda)">
                    </div>
          					<div class="DivDados">
          						<div class="DivNome"><?php echo($rs['nome_produto']); ?></div>
          						<div class="DivValor" >R$ <?php echo($preco); ?></div>
          						<div class="DivFraseBoleto">Localize uma loja</div>
          					</div>
          				</div>
                <?php  } ?>

              </div>


            </div>
          </div>



        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">



                    </div>
                </div>
            </div>



        </div>
        <?php include ('links/link_js.php'); ?>
    </body>
	   <?php include ('links/scripts1.php'); ?>
</html>
