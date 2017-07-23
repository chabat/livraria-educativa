<!-- !#()&@%  -->
<!DOCTYPE html>

<html>
  <head>
    <meta name = "viewport" content = "width = device-width, initial scale = 1.0">
    <meta charset = "utf-8">
  	<meta name = "description" content = "Página de cadastro da Livraria Educativa">
  	<title>Livraria Educativa - Cadastro</title>
  	<link href = "css/bootstrap.css" rel = "stylesheet">
    <link href = "css/navbar.css" rel = "stylesheet">
    <link href = "css/footer.css" rel = "stylesheet">
  </head>

  <body>
    <?php include("./php/navbar.php"); ?>

    <!-- Signup Form -->
  	<div class="container col-lg-4 col-lg-offset-4" id = "signupform">
  		<form action = "" class = "form-horizontal">
          	<h2 class="form-signin-heading">Efetue seu cadastro!</h2>
  			<div class = "form-group">
  				<label for = "user-name" class = "col-lg-2" control-label>Nome</label>
  				<div class = "col-lg-10">
  					<input type = "text" class = "form-control" name = "SignupName" placeholder = "Insira seu Nome">
  				</div>
  			</div> <!-- End Form Group -->

  			<div class = "form-group">
  				<label for = "user-email" class = "col-lg-2" control-label>Email</label>
  				<div class = "col-lg-10">
  					<input type = "text" class = "form-control" name = "SignupEmail" placeholder = "Insira seu Email">
  				</div>
  			</div> <!-- End Form Group -->

  			<div class = "form-group">
  				<label for = "user-phone" class = "col-lg-2" control-label>Telefone</label>
  				<div class = "col-lg-10">
  					<input type = "phone" class = "form-control" name = "SignupPhone" placeholder = "Insira um Telefone">
  				</div>
  			</div> <!-- End Form Group -->

  			<div class = "form-group">
  				<label for = "user-passwd" class = "col-lg-2" control-label>Senha</label>
  				<div class = "col-lg-10">
  					<input type = "password" class = "form-control" name = "SignupPassw" placeholder = "Insira uma Senha">
  				</div>
  			</div> <!-- End Form Group -->

  			<button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
  		</form>
  	</div> <!-- /container -->

    <?php include("./php/footer.php"); ?>
  </body>

</html>
