<?php

	session_start();

	include("conexao_banco.php");

	if(isset($_POST['btn_enviar_mensagem'])){
		$nome=$_POST['nome'];
		$celular=$_POST['celular'];
		$email=$_POST['email'];
		$observacao=$_POST['observacao'];

		$sql="insert into tbl_fale_conosco (nome, email, celular, observacao)";
		$sql =$sql."values('".$nome."' , '".$email."' , '".$celular."' , '".$observacao."')";

		mysql_query($sql);
		header('location:index.php');
	}

?>

<html class="no-js">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TourDreams | Fale Conosco</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel='stylesheet' type='text/css'>



        <?php include('links/links.html'); ?>
    </head>
    <body>

			<?php include('menu_fale.php'); ?>


        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="" id="contact1">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Endereço</h3>
                                    <p>
                                        Diversos
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Telefone</h3>
                                    <p>(11) 4002-8922</p>
                                </div>
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-envelope"></i> E-mail</h3>
                                    <p>smartGames@contato.com</p>
                                </div>
                            </div>
                            <hr>

                            <hr>
                            <h2>Contato</h2>
                            <form action="fale_conosco.php" name="frmfale" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input required type="text" class="form-control"  placeholder="Digite seu nome" name="nome">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input required type="email" class="form-control"  placeholder="Digite seu E-mail" name="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input required type="text" class="form-control" placeholder="Digite seu celular" name="celular" onkeyup="mascaraCelular( this, mtel );"  onkeypress='return SomenteNumero(event)' maxlength="15">
                                        </div>
                                    </div>




                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Observação</label>
                                            <textarea required  class="form-control" rows="8" placeholder="Sugestão/Criticas" name="observacao" style="resize:none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary" name="btn_enviar_mensagem"><i class="fa fa-envelope-o"></i> Enviar</button>
                                    </div>
                                </div>

                            </form>
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


        <script src="assets/js/gmaps.js"></script>
        <script src="assets/js/gmaps.init.js"></script>

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


	 <script>
   	 function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 	</script>

    </body>
</html>
