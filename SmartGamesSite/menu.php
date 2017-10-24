<?php include("conexao_banco.php"); ?>

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
                <a class="navbar-brand" href="registrar_user.php"><button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.45s">Login</button></a>
            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="index.php">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="sobre.php">Sobre Nós</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="fale_conosco.php">Fale Conosco</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="Menu" style="position: relative;">
  <div class="DivCentralizar">
    <div class="DivMenu2 DivMenuEsconde1">
        <div class="DivSubMenu DivSubMenu2">
          <div class="DivSubMenuLinha2">
            <div class="DivSubMenuTitulo">
              Playstation 4
            </div>
          </div>
          <?php
          $sql = "select * from tbl_categoria";
                $select = mysql_query($sql) or die (mysql_error());
                while($rs = mysql_fetch_array($select)){

           ?>

            <div class="DivSubMenuLinha1" onclick="window.open(&#39;#;);">
              <div class="DivSubMenuTexto">
                <a href="#" class="SubMenuTextoUrl"><?php echo($rs['nome_categoria']); ?></a>
              </div>
            </div>
          <?php } ?>
        </div>
      <span class="DivValign" onclick="window.open(&#39;#;);">
        <a href="#" class="Menu2Url">
          <img src="CMS/foto_menu/A2M.png" alt="Playstation 4">
        </a>
      </span>
    </div>


    <div class="DivMenu2 DivMenuEsconde2">
        <div class="DivSubMenu DivSubMenu2">
          <div class="DivSubMenuLinha2">
            <div class="DivSubMenuTitulo">
              Xbox One
            </div>
          </div>
          <?php
          $sql = "select * from tbl_categoria";
                $select = mysql_query($sql) or die (mysql_error());
                while($rs = mysql_fetch_array($select)){

           ?>

            <div class="DivSubMenuLinha1" onclick="window.open(&#39;#;);">
              <div class="DivSubMenuTexto">
                <a href="#" class="SubMenuTextoUrl"><?php echo($rs['nome_categoria']); ?></a>
              </div>
            </div>
          <?php } ?>
        </div>
      <span class="DivValign" onclick="window.open(&#39;#);">
        <a href="#" class="Menu2Url">
          <img src="CMS/foto_menu/bKb.png" alt="Xbox One">
        </a>
      </span>
    </div>

    <div class="DivMenu2 DivMenuEsconde3">
        <div class="DivSubMenu DivSubMenu2">
          <div class="DivSubMenuLinha2"><div class="DivSubMenuTitulo">Nintendo 3DS</div></div>
            <div class="DivSubMenuLinha1" onclick="window.open(&#39;#);">
          </div>
          <?php
          $sql = "select * from tbl_categoria";
                $select = mysql_query($sql) or die (mysql_error());
                while($rs = mysql_fetch_array($select)){

           ?>

            <div class="DivSubMenuLinha1" onclick="window.open(&#39;#;);">
              <div class="DivSubMenuTexto">
                <a href="#" class="SubMenuTextoUrl"><?php echo($rs['nome_categoria']); ?></a>
              </div>
            </div>
          <?php } ?>
        </div>
      <span class="DivValign" onclick="window.open(&#39;#);">
        <a href="#" class="Menu2Url">
          <img src="CMS/foto_menu/DKB.png" alt="Nintendo 3DS"></a></span>
    </div>


    <div class="DivMenu2 DivMenuEsconde4">
        <div class="DivSubMenu DivSubMenu3">
          <div class="DivSubMenuLinha2"><div class="DivSubMenuTitulo">Switch</div></div>
            <div class="DivSubMenuLinha1" onclick="window.open(&#39;#);">

            </div>
            <?php
            $sql = "select * from tbl_categoria";
                  $select = mysql_query($sql) or die (mysql_error());
                  while($rs = mysql_fetch_array($select)){

             ?>

              <div class="DivSubMenuLinha1" onclick="window.open(&#39;#;);">
                <div class="DivSubMenuTexto">
                  <a href="#" class="SubMenuTextoUrl"><?php echo($rs['nome_categoria']); ?></a>
                </div>
              </div>
            <?php } ?>
        </div>
      <span class="DivValign" onclick="window.open(&#39;#);">
        <a href="#" class="Menu2Url">
          <img src="CMS/foto_menu/Bvo.png" alt="Switch">
        </a>
      </span>
    </div>



    <div class="DivMenu2 DivMenuEsconde5">
        <div class="DivSubMenu DivSubMenu3">
          <div class="DivSubMenuLinha2"><div class="DivSubMenuTitulo">Nintendo Wiiu</div></div>
          <?php
          $sql = "select * from tbl_categoria";
                $select = mysql_query($sql) or die (mysql_error());
                while($rs = mysql_fetch_array($select)){

           ?>

            <div class="DivSubMenuLinha1" onclick="window.open(&#39;#;);">
              <div class="DivSubMenuTexto">
                <a href="#" class="SubMenuTextoUrl"><?php echo($rs['nome_categoria']); ?></a>
              </div>
            </div>
          <?php } ?>

        </div>
      <span class="DivValign" onclick="window.open(&#39;#);">
        <a href="#" class="Menu2Url">
          <img src="CMS/foto_menu/hSt.png" alt="Nintendo Wiiu">
        </a>
      </span>
    </div>
  </div>
</div>
