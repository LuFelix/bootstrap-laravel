<!DOCTYPE html>
<html lang="pt-BR">
<html meta charset="utf-8"/>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link href="stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Olá!</strong> Preencha os campos com atenção.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
    <div id="includedContent"></div>
</head>
<body>

<div class="conteiner">
    <div class="form-group">
        <form id="frm1" action="/action_page.php">
            <div class="row">
            
                <div class="col-md-4">
                </div>
                
                <div class="col-md-4">
                    <p><h5>Preencha os campos e realize o login:</p>
                    Email: <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email"><br>
                    Senha:<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha"><br><br>
                    <input type="button" onclick="myFunction()" value="Enviar" class="btn btn-primary"/>
                </div>
                
                <div class="col-md-4">
                </div>
            </div>
        </form>
    </div>
</div>
<script>
function myFunction() {
  document.getElementById("frm1").submit();
}
</script>

</body>
<footer>
		<p>
			<h7><a href="index.php" target="_self">Voltar para a Home / Ìndice</a></h7>
        </p>
<script src="jquery.js"></script> <!-- Importar biblioteca do Jquery -->
    <script> 
    $(function(){
      $("#includedContent").load("menuSuperior.php"); // incluir conteúdo do menu.html na div com id #includedContent
    });
</script> 
     <!-- o menu.html será incluído nessa div -->
</footer>
</html>
