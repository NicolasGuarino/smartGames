<?php

session_start();

include("conexao_banco.php");


?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TourDreams | Destinos</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel='stylesheet' type='text/css'>



        <?php include('links/links.html'); ?>
    </head>
    <body>



        <?php include ('menu.php'); ?>


        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">
                <div class="row">

                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Filtrar</h3>
                            </div>
                            <div class="panel-body search-widget">
                                <form action="" class=" form-inline">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control" placeholder="Pesquisa">
                                            </div>
                                        </div>
                                    </fieldset>
                									<div class="panel-heading">
                										<h3 class="panel-title">Preço Desejado</h3>
                									</div>

                									<div class="form-group">
                										<select id="basic" class="selectpicker show-tick form-control">
                											<option>R$25,00 - R$100,99</option>
                											<option>R$101,00 - R$150,99</option>
                											<option>R$151,00 - R$200,99</option>
                											<option>R$201,00 - R$250,99</option>
                										</select>
                									</div>


                                  <fieldset>
                                      <div class="row">
                                          <div class="col-xs-12">
                                              <input class="button btn largesearch-btn" value="Filtrar" type="submit" name="btn_filtrar">
                                          </div>
                                      </div>
                                  </fieldset>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear">
                        <div id="list-type" class="proerty-th">

                						<?php
                						@$pesquisa = (string)$_GET['pesquisa'];

                						$sql = "select * from view_produto where status = 'Aprovado'";

                						if($pesquisa !=''){
                							$sql = $sql . "and estado LIKE'%$pesquisa%'";
                						}

                						$select = mysql_query($sql) or die (mysql_error());
                						while($rs = mysql_fetch_array($select)){
                						?>
                            <div class="col-sm-6 col-md-4 p0">
                              <div class="box-two proerty-item">
                                  <div class="item-thumb">
                                      <a href="detalhes_produto.php?id_produto=<?php echo $rs['id_produto'];?>"><?php echo "<img src='Parceiro/Arquivos/".$rs['foto_principal']."'>"?></a>
                                  </div>
                                  <div class="item-entry overflow">
  											              <h5><a href="detalhes_produto.php?id_produto=<?php echo $rs['id_produto'];?>" ><?php echo($rs['nome_fantasia']);?></a></h5>
  											              <div class="dot-hr"></div>
  											              <span class="pull-left"><i class="fa fa-binoculars"></i>  <b>Milhas :</b> <?php echo($rs['qtd_milhas']);?> </span>
  											              <span class="proerty-price pull-right">R$ <?php echo number_format($preco_diaria, 2, ',', '');?></span>
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
