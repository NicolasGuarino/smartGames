<?php

session_start();

include("conexao_banco.php");



if(isset($_POST['btnRegistrar']))
{

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];
  $dt_nasc = $_POST['dt_nasc'];
  $id_caracteristicas = $_POST['selectProduto'];
  $login = $_POST['login'];

  $dt_nasc = explode("/", $dt_nasc);

	$dia = $dt_nasc[0];
	$mes = $dt_nasc[1];
	$ano = $dt_nasc[2];

	$dt_banco = $ano."-".$mes."-".$dia;


  $sql="insert into tbl_usuario(nome_usuario, email_usuario, celular_usuario, dt_nasc, senha_usuario, cpf_usuario, marca_preferida, login)";
  $sql=$sql."values('".$nome."', '".$email."', '".$celular."', '".$dt_banco."', '".$senha."', '".$cpf."', '".$id_caracteristicas."', '".$login."')";

  mysql_query($sql);

  echo "<script type='text/javascript'>
  window.alert('Cadastrado com Sucesso')
  </script>";

}



 ?>
<?php



	if(isset($_POST['btn_logar_cliente']))
	{
		$cpf=$_POST['cpf'];
		$senha=$_POST['senha'];


		include("conexao_banco.php");

		$sql = "SELECT * FROM tbl_usuario where cpf_usuario = '".$cpf."' AND senha_usuario= '".$senha."'";
		$sqlResult = mysql_query($sql);

		if(mysql_num_rows ($sqlResult) > 0){
      $_SESSION['id_usuario'] = $id_usuario;
			$_SESSION['nome_usuario'] = $nome;
      $_SESSION['senha_usuario'] = $senha;

			if($consulta=mysql_fetch_array($sqlResult)){

        $id_usuario = $consulta['id_usuario'];
        $nome = $consulta['nome_usuario'];

				header("location:index.php?id_cliente=".$consulta['id_usuario']."&login=".$consulta['login']);
			}

		}else{
			echo "<script type='text/javascript'>
			window.alert('Login ou Senha inválidos')
			</script>";
		}
	}



?>



<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SmartGames | Login ou Cadastro</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link  rel='stylesheet' type='text/css'>



        <?php include('links/links.html'); ?>
        <script type="text/javascript">

                  function mascaraData( campo, e )
          {
          	var kC = (document.all) ? event.keyCode : e.keyCode;
          	var data = campo.value;

          	if( kC!=8 && kC!=46 )
          	{
          		if( data.length==2 )
          		{
          			campo.value = data += '/';
          		}
          		else if( data.length==5 )
          		{
          			campo.value = data += '/';
          		}
          		else
          			campo.value = data;
          	}
          }
        </script>
    </head>
    <body>


      <?php if (@$id_cliente){
        include('menu.php');
      } else {
        include('menuNlogado.php');
      }

      ?>

        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>Registrar</h2>
                            <form action="registrar_user.php" method="post">
                              <div class="form-group">
                                  <label>login</label>
                                  <input required type="text" class="form-control" placeholder="Digite seu login" name="login">
                              </div>

                                <div class="form-group">
                                    <label>Nome</label>
                                    <input required type="text" class="form-control" placeholder="Digite seu nome" name="nome">
                                </div>
								                <div class="form-group">
                                    <label>E-mail</label>
                                    <input required type="email" class="form-control" placeholder="Digite seu E-mail" name="email">
                                </div>
								                <div class="form-group">
                                    <label>Celular</label>
                                    <input required type="text" class="form-control" placeholder="Digite seu celular" name="celular" onkeyup="mascaraCelular( this, mtel );"  onkeypress='return SomenteNumero(event)' maxlength="15">
                                </div>

								                <div class="form-group">
                                    <label>CPF (Somente Numeros)</label>
                                    <input required type="text" class="form-control" placeholder="Digite seu cpf" name="cpf" onblur='clearTimeout()' onkeypress='return SomenteNumero(event)' maxlength="11">
                                </div>

								                        <div class="form-group">
                                    <label>Senha</label>
                                    <input required type="password" class="form-control" name="senha"  placeholder="Digite sua senha">
                                </div>
                                <div class="form-group">
                                    <label>Data de Nascimento</label>
                                    <input required type="text" class="form-control" placeholder="Digite sua data de nascimento"  onkeypress="mascaraData( this, event )" name="dt_nasc" maxlength="10" >
                                </div>
                                <div class="form-group">
                                  <label>Selecione seu produto favorito</label>

                  											<select name = "selectProduto">
                  											<?php
                  												$sql = "select * from tbl_tipo_produto";
                  													$select = mysql_query($sql);
                  														while($rs = mysql_fetch_array($select)){
                  													?>
                  														<option required class="form-control" value="<?php echo($rs['id_tipo_produto']);?>"><?php echo($rs['tipo_produto']);?></option>
                  													<?php
                  													}
                  											?>
                  											</select>
                                </div>

                                <div class="text-center">
                                    <button name="btnRegistrar" type="submit" class="btn btn-default">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Entrar</h2>
                            <form action="registrar_user.php" name="form_login" method="post">
                               <div class="form-group">
                                    <label>CPF</label>
                                    <input type="text" class="form-control" placeholder="Digite seu cpf" name="cpf"   onblur='clearTimeout()' onkeypress='return SomenteNumero(event)' maxlength="11">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control" name="senha"  placeholder="Digite sua senha">
                                </div>
                                <div class="text-center">
                                    <button name="btn_logar_cliente" type="submit" class="btn btn-default"> Logar</button>
                                </div>
                            </form>
                            <br>
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




		</script>


		<script>
			function mascaraMutuario(o,f){
				v_obj=o
				v_fun=f
				setTimeout('execmascara()',1)
			}

			function execmascara(){
				v_obj.value=v_fun(v_obj.value)
			}

			function cpfCnpj(v){

				//Remove tudo o que não é dígito
				v=v.replace(/\D/g,"")

				if (v.length <= 14) { //CPF

					//Coloca um ponto entre o terceiro e o quarto dígitos
					v=v.replace(/(\d{3})(\d)/,"$1.$2")

					//Coloca um ponto entre o terceiro e o quarto dígitos
					//de novo (para o segundo bloco de números)
					v=v.replace(/(\d{3})(\d)/,"$1.$2")

					//Coloca um hífen entre o terceiro e o quarto dígitos
					v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

				} else { //CNPJ

					//Coloca ponto entre o segundo e o terceiro dígitos
					v=v.replace(/^(\d{2})(\d)/,"$1.$2")

					//Coloca ponto entre o quinto e o sexto dígitos
					v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")

					//Coloca uma barra entre o oitavo e o nono dígitos
					v=v.replace(/\.(\d{3})(\d)/,".$1/$2")

					//Coloca um hífen depois do bloco de quatro dígitos
					v=v.replace(/(\d{4})(\d)/,"$1-$2")

				}

				return v

			}
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
