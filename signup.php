<!-- !#()&@%  -->
<!DOCTYPE html>

<html>
  <head>
    <meta name = "viewport" content = "width = device-width, initial scale = 1.0">
    <meta charset = "utf-8">
  	<meta name = "description" content = "Página de cadastro da Livraria Educativa">
  	<title>Livraria Educativa - Cadastro</title>
  	<link href = "css/bootstrap.css" rel = "stylesheet">
    <link href = "css/signup.css" rel = "stylesheet">
    <link href = "css/navbar.css" rel = "stylesheet">
    <link href = "css/footer.css" rel = "stylesheet">
  </head>

  <body>
    <?php include("./php/showerrors.php"); ?>
    <?php include("./php/dbconnect.php"); ?>
    <?php include("./php/navbar.php"); ?>

    <!-- Signup Form -->
  	<div class="container col-lg-8 col-lg-offset-2" id = "signupform">
  		<form action = "signedup.php" method = "POST" class = "form-horizontal">
          	<h1 class="form-signin-heading" align = "center">Faça seu cadastro!</h2>
  			<div class = "form-group">
  				<label for = "user-name" class = "col-lg-2" control-label>Nome</label>
  				<div class = "col-lg-10">
  					<input type = "text" required class = "form-control" name = "SignupName" placeholder = "Ex: Joãozinho da Silva">
  				</div>
  			</div> <!-- End Form Group -->

  			<div class = "form-group">
  				<label for = "user-email" class = "col-lg-2" control-label>Email</label>
  				<div class = "col-lg-10">
  					<input type = "email" required class = "form-control" name = "SignupEmail" placeholder = "Ex: jao1000grau@gmail.com">
  				</div>
  			</div> <!-- End Form Group -->

  			<div class = "form-group">
  				<label for = "user-passwd" class = "col-lg-2" control-label>Senha</label>
  				<div class = "col-lg-10">
  					<input type = "password" pattern=".{6,}" required title="A senha deve possuir no mínimo 6 caracteres"
              class = "form-control" name = "UserPassword" placeholder = "Insira uma senha">
  				</div>
  			</div> <!-- End Form Group -->

  			<div class = "form-group">
  				<label for = "user-passwd2" pattern=".{6,20}" class = "col-lg-2" control-label>Confirmar senha</label>
  				<div class = "col-lg-10">
  					<input type = "password" pattern=".{6,20}" required title="A senha deve possuir entre 6 e 20 caracteres"
              class = "form-control" name = "UserPassword2" placeholder = "Confirme a senha">
  				</div>
  			</div> <!-- End Form Group -->

        <div class = "form-group">
          <label for = "user-phone" class = "col-lg-2" control-label>Telefone</label>
          <div class = "col-lg-10">
            <input type = "tel" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}" required title = "O telefone deve respeitar o padrao (XX) XXXX-XXXX"
              class = "form-control" name = "UserPhone" placeholder = "Ex: (99) 99999-9999">
          </div>
        </div> <!-- End Form Group -->

        <div class = "form-group">
          <label for = "user-cpf" class = "col-lg-2" control-label>CPF</label>
          <div class = "col-lg-10">
            <input type = "number" pattern="{11}" required title = "O cpf deve conter 11 digitos, apenas números."
                class = "form-control" name = "UserCpf" placeholder = "Ex: 11111111111">
          </div>
        </div> <!-- End Form Group -->

        <div class = "form-group">
          <label for = "user-state" class = "col-lg-2" control-label>Estado</label>
          <div class = "col-lg-10">
            <input type = "text" pattern="[a-zA-Z ]+" required title = "Apenas letras e espacos, sem acentos" class = "form-control" name = "UserState" placeholder = "Ex: Paraná">
          </div>
        </div> <!-- End Form Group -->

        <div class = "form-group">
          <label for = "user-city" class = "col-lg-2" control-label>Cidade</label>
          <div class = "col-lg-10">
            <input type = "text" pattern="[a-zA-Z ]+" required title = "Apenas letras e espacos, sem acentos" class = "form-control" name = "UserCity" placeholder = "Ex: General Carneiro">
          </div>
        </div> <!-- End Form Group -->

        <div class = "form-group">
          <label for = "user-neigh" class = "col-lg-2" control-label>Bairro</label>
          <div class = "col-lg-10">
            <input type = "text" pattern="[a-zA-Z ]+" required title = "Apenas letras e espaços, sem acentos" class = "form-control" name = "UserNeigh" placeholder = "Ex: Jangada do Sul">
          </div>
        </div> <!-- End Form Group -->

        <div class = "form-group">
          <label for = "user-street" class = "col-lg-2" control-label>Rua</label>
          <div class = "col-lg-10">
            <input type = "text" pattern="[a-zA-Z ]+" required title = "Apenas letras e espaços, sem acentos" class = "form-control" name = "UserStreet" placeholder = "Ex: Rua Dr. Bernardo Ribeiro Viana">
          </div>
        </div> <!-- End Form Group -->

        <div class = "form-group">
          <label for = "user-house-number" class = "col-lg-2" control-label>Número</label>
          <div class = "col-lg-10">
            <input type = "number" required class = "form-control" name = "UserNumber" placeholder = "Ex: 180">
          </div>
        </div> <!-- End Form Group -->

        <div class = "form-group">
          <label for = "complement" class = "col-lg-2" control-label>Complemento</label>
          <div class = "col-lg-10">
            <input type = "text" required class = "form-control" name = "UserComplement" placeholder = "Ex: Casa">
          </div>
        </div> <!-- End Form Group -->

  			<button class="btn btn-lg btn-primary btn-block" type="submit" id = "subutton">Cadastrar</button>
  		</form>
  	</div> <!-- /container -->

    <?php include("./php/footer.php"); ?>
  </body>

</html>
