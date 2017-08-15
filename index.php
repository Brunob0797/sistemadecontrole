<?php 
include "verifica.php";
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Controle</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"></link>
        <script src="scripts/jquery-3.2.1.min.js"></script>
        <script src="scripts.js"></script>
	</head>

	<body>
		<div class="esquerda"><h3>Painel de Informações</h3>
              
            <h5>Seja bem vindo, <?php echo($_SESSION["login"]) ?></h5>
            <a href="logout.php">Logout</a></div>
			<div class="direita">
            	<h3>Controle de Velocidade</h3><br>
                <button type="button" id="baixa">Baixa</button><br>
                <button type="button" id="media">Média</button><br>
                <button type="button" id="alta">Alta</button>
			</div>
			<div class="geral">
				<table width="498" border="0" height="399" class="tabela-controle">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td><button type="button" id="frente"><img src="style/images/direcao.png" alt="Frente" class="img_frente"/></button></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><button type="button" id="esquerda"><img src="style/images/direcao.png" alt="Esquerda" class="img_esq"/></button></td>
      <td>&nbsp;</td>
      <td>
      <button type="button" id="direita"><img src="style/images/direcao.png" alt="Direita"/></button></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <button type="button" id="tras"><img src="style/images/direcao.png" alt="Trás" class="img_tras"/></button>
      </td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
		</div>
	</body>
</html>
