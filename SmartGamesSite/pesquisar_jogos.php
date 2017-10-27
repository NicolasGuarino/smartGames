<?php

session_start();

include("conexao_banco.php");

@$id_cliente = ['id_cliente'];


?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SmartGames | Pesquisar</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel='stylesheet' type='text/css'>



        <?php include('links/links.html'); ?>
    </head>
    <body>



      <?php if ($id_cliente){
        include('menu.php');
      } else {
        include('menuNlogado.php');
      }

      ?>


        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">
                <div class="row">



                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear">
                        <div id="list-type" class="proerty-th">

                						<?php
                						@$pesquisa = (string)$_GET['pesquisa'];

                						$sql = "select * from view_produtos where
                                    nome_produto LIKE '%$pesquisa%' or
                                    descricao LIKE '%$pesquisa%' or
                                    marca_modelo LIKE '%$pesquisa%' or
                                    nome_categoria LIKE '%$pesquisa%' or
                                    tipo_produto LIKE '%$pesquisa%'
                                    order by rand()
                            ";
                						$select = mysql_query($sql) or die (mysql_error());
                						while($rs = mysql_fetch_array($select)){
                              $preco = number_format($rs['preco'], 2, "," , ".");
                						?>
                            <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detalhes_produto.php?id_produto=<?php echo $rs['id_produto'];?>"><?php echo "<img src='CMS/Arquivos/".$rs['foto_produto']."'>"?></a>
                                  </div>
                                  <div class="item-entry overflow">
  											              <h5><a href="detalhes_produto.php?id_produto=<?php echo $rs['id_produto'];?>" ><?php echo($rs['nome_produto']);?></a></h5>
  											              <div class="dot-hr"></div>

  											              <span class="proerty-price pull-right">R$ <?php echo($preco); ?></span>
									                </div>

              										<div class="vote">
              											<label>
              												<input  name="fb" value="1" />
              												<i class="fa"></i>
              											</label>
              											<label>
              												<input name="fb" value="2" />
              												<i class="fa"></i>
              											</label>
              											<label>
              												<input  name="fb" value="3" />
              												<i class="fa"></i>
              											</label>
              											<label>
              												<input  name="fb" value="4" />
              												<i class="fa"></i>
              											</label>
              											<label>
              												<input name="fb" value="5" />
              												<i class="fa"></i>
              											</label>
              										</div>
                                </div>
                              </div>
            							<?php
            								}
            							?>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">



                    </div>
                </div>
            </div>



        </div>

      <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>
        <script src="assets/js/main.js"></script>


        <script>
      		function mascaraCelular(o,f){
      		v_obj=o
      		v_fun=f
      		setTimeout("execmascara()",1)
      		}
      		function execmascara(){
      			v_obj.value=v_fun(v_obj.value)
      		}
      		function mtel(v){
      			v=v.replace(/\D/g,"");
      			v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
      			v=v.replace(/(\d)(\d{4})$/,"$1-$2");
      			return v;
      		}

      		</script>
    </body>
</html>
