<?php

session_start();

 include("conexao_banco.php");

 @$id_cliente = $_GET['id_cliente'];


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
      <?php if ($id_cliente){
        include('menu.php');
      } else {
        include('menuNlogado.php');
      }

      ?>

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
							<form method="get" action="pesquisar_jogos.php" name="pesquisar" class=" form-inline">
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

        <?php if ($id_cliente){
          include('produtos_logado.php');
        } else {
          include('produtos_nLogado.php');
        }

        ?>




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
