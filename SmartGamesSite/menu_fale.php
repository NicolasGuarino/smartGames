
<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8  col-xs-12">
                <div class="header-half header-call">
                    <p>
                        <span><i class="pe-7s-call"></i> (11) 4002-8922</span>
                        <span><i class="pe-7s-mail"></i> smartGames@contato.com</span>
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                <div class="header-half header-social">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-default ">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="assets/img/smart_games.png" alt=""></a>
        </div>


        <div class="collapse navbar-collapse yamm" id="navigation">
          <div class="button navbar-right">
              <a class="navbar-brand" href="index.php"><button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.45s">Sair</button></a>
          </div>
            <ul class="main-nav nav navbar-nav navbar-right">
              <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="index.php?id_cliente=<?php echo ($id_cliente); ?>&login=<?php echo ($nome); ?>">Home</a></li>
              <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="sobre.php?id_cliente=<?php echo ($id_cliente); ?>&login=<?php echo ($nome); ?>">Sobre Nós</a></li>
              <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="fale_conosco.php?id_cliente=<?php echo ($id_cliente); ?>&login=<?php echo ($nome); ?>">Fale Conosco</a></li>
              <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="#">Bem Vindo, <?php echo($_SESSION['login']); ?></a></li>
            </ul>
        </div>
    </div>
</nav>
