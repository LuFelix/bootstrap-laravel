<!DOCTYPE html>
<html lang="pt-BR">
<html meta charset="utf-8"/>



<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
	<title>Índice / HOME</title>
	<div id="includedContent"></div>
</head>

<body>
	<h3>Índice</h3>
	<p>
		<ol>
			<li><a href="PensamentoComputacional.php" target="_self">Pensamento</a></li>
			<li><a href="login.php" target="_self">Login</a></li>
			<li><a href="bootstrap-4.5.3-examples/dashboard/index.html" target="_self">DashBoard</a></li>
		</ol>
	</p>

</body>

<footer>
<script src="jquery.js"></script> <!-- Importar biblioteca do Jquery -->
    <script> 
    $(function(){
      $("#includedContent").load("menuSuperior.php"); // incluir conteúdo do menu.html na div com id #includedContent
    });
    </script> 
     <!-- o menu.html será incluído nessa div -->
</footer>
</html>