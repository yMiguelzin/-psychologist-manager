<?php // aqui temos o frm_cadastro onde ele faz o cadastro  do dado do aluno
session_start();
            
            $_SESSION['psicologoNome'] ;           
            $_SESSION['psicologoSenha'];

if(!isset($_SESSION["psicologoNome"]) || !isset($_SESSION["psicologoSenha"])){
    
		header("Location: frm_login.php");
                
		exit;
		}else{
		
?>
<html lang="pt-br">
  <head>
	<title>Cadastrar Pacientes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="wrap-tudo100">
    <form action="../Control/controller_cadastrar_pacientes.php" method="POST">
        <fieldset>
            <legend>Cadastrar Informações:</legend>
			<div class="col-md-6 mb-1 mb-lg-0">
            ID:
            <input type="number" name="id" required class="form-control">
            </div><br>
			<div class="col-md-6 mb-1 mb-lg-0">
            Paciente:
            <input type="text" name="paciente" required class="form-control">
            </div><br>
			<div class="col-md-6 mb-1 mb-lg-0">
            Telefone:<br>
            <input type="number" name="telefone" required class="form-control">
            </div><br> 
			<div class="col-md-6 mb-1 mb-lg-0">
             Gênero:<br>
             <input type="radio" name="genero" value="Masculino" >Masculino
             <input type="radio" name="genero" value="Feminino">Feminino
              </div><br>
			  <div class="col-md-6 mb-1 mb-lg-0">
             Data:<br>
            <input type="date" name="data" required class="form-control">
            </div>
			<div class="col-md-6 mb-1 mb-lg-0">
            Horário:<br>
            <input type="time" name="horario" required class="form-control">
            </div><br>
			<div class="col-md-6 mb-1 mb-lg-0">
            Psicologo:
            <input type="text" name="psicologo" required class="form-control">
            </div><br>
			<div class="col-md-6 mb-1 mb-lg-0">
            CRP:
            <input type="text" name="FK_CRP" required class="form-control">
            </div><br>

         <input class="customPrevBtn btn btn-dark m-1" type="Submit" name="acao" value="Submit">  
    </form>
	</fieldset>
    </div>
		<form action="frm_perfil_psicologo.php">
        <input type="submit" class="customPrevBtn btn btn-dark m-1" value="Voltar" name="voltar">
		</form>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/main.js"></script>  
</body>
</html>
<?php }?>