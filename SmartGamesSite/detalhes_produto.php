<?php

session_start();

include("conexao_banco.php");

@$id_cliente = $_GET['id_cliente'];




?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<script>
var $doc = $('html, body');
$('.scrollSuave').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
</script>


<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TourDreams | Detalhes</title>


        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel='stylesheet' type='text/css'>
        <?php
        if (isset ($_GET['id_produto'])) {
          $id_produto = (int)$_GET['id_produto'];

          $sql = "select * from view_localizacao where id_produto =".$id_produto;
          $select = mysql_query($sql);

          while($rs = mysql_fetch_array($select)){
            $latitude=$rs['latitude'];
            $longitude=$rs['longitude'];

          }}
          ?>
        <script>
            function initMap() {
              var uluru = {lat: <?php echo($latitude); ?>, lng: <?php echo($longitude); ?>};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: uluru
              });
              var marker = new google.maps.Marker({
                position: uluru,
                map: map
              });
            }
        </script>



        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBltwkaO77qw3wnvauzjdhkh6utwVVbKiI&callback=initMap">
        </script>







        <?php include('links/links.html') ?>
    </head>
    <body>




      <?php if (@$id_cliente){
        include('menu.php');
      } else {
        include('menuNlogado.php');
      }

      ?>

        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">

            <div class="clearfix padding-top-40" >

                <div class="col-md-8 single-property-content prp-style-2">
                    <div class="">
                        <div class="row">
                            <div class="light-slide-item">
                                <div class="clearfix">
                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    										<?php
                    										if (isset ($_GET['id_produto'])) {
                    												$id_produto = (int)$_GET['id_produto'];
                    												$sql = "select * from tbl_produto where id_produto =".$id_produto;
                    												$select = mysql_query($sql);
                    												while($rs = mysql_fetch_array($select)){

                    										?>
                    											<?php echo "<li data-thumb='CMS/Arquivos/".$rs['foto_produto']."'>"?>
                                                                    <?php echo "<img src='CMS/Arquivos/".$rs['foto_produto']."'>"?>
                                                                </li>
                    										<?php
                    											}
                    										}
                    										?>
                                    </ul>
                                </div>
                            </div>
                        </div>

				             <div class="single-property-wrapper">
                        <div class="single-property-header">
                            <h1 class="property-title pull-left">Visualizar Mapa</h1>
                        </div>

                        <div class="property-meta entry-meta clearfix ">

                            <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">

                                <span class="property-info-entry">
                                  <div id="map"></div>
                                </span>
                            </div>

                        </div>


                    </div>



                </div>
              </div>

				<div class="col-md-4 p0">
            <aside class="sidebar sidebar-property blog-asside-right property-style2">
                <div class="dealer-widget">
                    <div class="dealer-content">
                        <div class="inner-wrapper">
                    			<?php
                    			if (isset ($_GET['id_produto'])) {
                    				$id_produto = (int)$_GET['id_produto'];
                    				$sql = "select * from tbl_produto where id_produto =".$id_produto;
                    				$select = mysql_query($sql);
                    				while($rs = mysql_fetch_array($select)){
                    					$preco=$rs['preco'];
                    			?>
                              <div class="single-property-header">
                                  <h1 class="property-title"><?php echo($rs['nome_produto']);?></h1>
                                  <span class="property-price">R$ <?php echo number_format($preco, 2, ',', '');?></span>
                              </div>

                              <div class="single-property-header">
                                  <h1 class="property-descricao">Descrição</h1>
                                  <span class="property-descricao_sub"><?php echo($rs['descricao']);?></span>
                              </div>

                              <div class="col-sm-12 text-center">
                                  <a href="#map" class="scrollSuave">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-map" name="btn_enviar_mensagem"></i> Veja Como Chegar</button>
                                  </a>
                              </div>



                    			<?php
                    				}
                    			}
                    			?>



                        </div>
                    </div>
                </div>
              </aside>
          </div>
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


        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
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
        <script type="text/javascript" src="assets/js/lightslider.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script>
          $(document).ready(function () {

              $('#image-gallery').lightSlider({
                  gallery: true,
                  item: 1,
                  thumbItem: 9,
                  slideMargin: 0,
                  speed: 500,
                  auto: true,
                  loop: true,
                  onSliderLoad: function () {
                      $('#image-gallery').removeClass('cS-hidden');
                  }
              });
          });
        </script>

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
