<?php include ('conexao_banco.php'); ?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TourDreams | Sobre</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel='stylesheet' type='text/css'>



      <?php include('links/links.html') ?>
    </head>
    <body>


      <?php include('menu.php') ?>






		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <h2>A nossa história  </h2>
            </div>
        </div>

		<div class="content-area blog-page padding-top-40" style="background-color: #FFF; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">

						<?php
							$sql = "select * from tbl_sobre_nos";
							$select = mysql_query($sql);
							while($rs = mysql_fetch_array($select)){
						?>

                        <section class="post">

                            <div class="image wow fadeInLeft animated">
                                <a href="#">
									 <?php echo "<img src='CMS/Arquivos/".$rs['imagem_sobre']."'>"?>
                                </a>
                            </div>
                            <p class="intro"><?php echo($rs['texto_sobre']);?></p>
						</section>
						<?php
							}
						?>
                    </div>
                </div>

            </div>
        </div>

			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
					<h2>Comentários dos nossos clientes  </h2>
				</div>
			</div>

				<div class="container">
					<div class="row">
										<div class="col-md-12" data-wow-delay="0.2s">
											<div class="carousel slide" data-ride="carousel" id="quote-carousel">
												<!-- Bottom Carousel Indicators -->
												<ol class="carousel-indicators">
													<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="CMS/Arquivos/carlos.jpg" alt="">
													</li>
													<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="CMS/Arquivos/eduardo.jpg" alt="">
													</li>
													<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="CMS/Arquivos/carlinhos.jpg" alt="">
													</li>
												</ol>

												<!-- Carousel Slides / Quotes -->
												<div class="carousel-inner text-center">

													<!-- Quote 1 -->
													<div class="item active">
														<blockquote>
															<div class="row">
																<div class="col-sm-8 col-sm-offset-2">

																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
																	<small>Carlos De Nobrega</small>
																</div>
															</div>
														</blockquote>
													</div>
													<!-- Quote 2 -->
													<div class="item">
														<blockquote>
															<div class="row">
																<div class="col-sm-8 col-sm-offset-2">

																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
																	<small>Eduardo Ricardo</small>
																</div>
															</div>
														</blockquote>
													</div>
													<!-- Quote 3 -->
													<div class="item">
														<blockquote>
															<div class="row">
																<div class="col-sm-8 col-sm-offset-2">

																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
																	<small>Carlinhos Brown</small>
																</div>
															</div>
														</blockquote>
													</div>
												</div>

												<!-- Carousel Buttons Next/Prev -->
												<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
												<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
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

    </body>




</html>
