<!DOCTYPE html>
<html>
<head>
  <?php include "header.php"; ?>
</head>
<body>
  <?php 
  session_start();
  require("../db.php");

  $db = new Db();

  $menuSelected = 5; include "menu.php" ?>
  <div id="content">
    <header>Controle <?php include "login.php" ?> </header>
    <div id="main-content">
    	<section>
        <header>Cadastro de Horario</header>
      <form action = "../new-dao/addHorario.php" method = "POST" enctype="multipart/form-data">
        <br>
	     <table style = "width: 38%">
	        <tr>
	        	<td>Dia : </td>
	        	<td>
	        		<select name= "dia">
	        			<option value = "Segunda-feira">Segunda-feira</option>
	        			<option value = "Terca-feira">Terça-feira</option>
	        			<option value = "Quarta-feira">Quarta-feira</option>
	        			<option value = "Quinta-feira">Quinta-feira</option>
	        			<option value = "Sexta-feira">Sexta-feira</option>
	        			<option value = "Sabado">Sábado</option>
	        		</select>
	        	</td>
	        </tr>
	        <tr>
	        	<td>Inicio :</td>
	        	<td><input type = "time" name = "inicio" size = "24"></td>
	        </tr>
	        <tr>
				<td>Fim :</td><td><input type = "time" name = "fim"></td>
	        </tr>
	        <tr>
	        	<td>Local :</td>
	        	<td><input type = "text" name = "local"></td>
	        </tr>
	        <tr>
	       	</tr>
	        	<td></td>
	        	<td align = "right"><input type = "submit" value = "Cadastrar Horario"></td>
	        </tr>
	    </table>
      </form> 
  </section>
    </div>
  </div>
</body>
</html>