<?php 

include 'connection.php';

$modo = "";
if(isset($_POST['modo']))
{
	$modo = $_POST['modo'];
}

$login = $senha = "";
if(isset($_POST['login'])&&isset($_POST['senha']))
{
	$login = $_POST['login'];
	$senha = $_POST['senha'];
}

if($modo == 'inserir')
{
	$sql = "SELECT * FROM cadastro WHERE login = '".$login."' AND senha = '".$senha."';";
	$row= $conn->query($sql);
	$row->fetch_assoc(); 
	
	if($row->num_rows>0)
	{
		echo "<script> alert('login correto');
		window.location = 'companyname/index.html';</script>";
	}
	else
	{
		echo "<script> alert('login incorreto');
		window.location = 'index.php';</script>";
	
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Lala</title>
</head>
<body>
	<div class="caixadecadastro">
		<img src="logo.png" width="80%">
		<br>
		<form method="post" action="index.php?modo=inserir">
			<label>Nome </label>
			<input type="text" name="login" id="login" placeholder="Digite seu nome" required>
			<br><br>
			<label>Senha </label>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
			<br><br>
			<input type="hidden" name="modo" id="modo" value="inserir">
			<button>Logar</button>
		</form>
	</div>
	<style type="text/css">
		.caixadecadastro
		{
			margin-left: 40%;
			margin-top: 12%;
			text-align: center;
			float: left;
			width: 20%;
			background-color: rgba(255,255,255,0.7);
			font-family: "Candara";
			font-size: 1.4em;
			border: 2px solid grey;
			padding: 1%;
		}
		input
		{
			padding: 6px 20px;
			margin: 0px 0;
			margin-top: 5%;
			width: 50%;
		}
		button
		{
			margin-top: 0px;
			margin-bottom: 5%;
			border:none;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			width: 50%;
		}
		body
		{
			margin: 0px;
			padding: 0px;
			background-image: url("nightstars.jpg");
			background-position: center;
		}
		@media only screen and (min-width: 901px) and (max-width:1024px)
		{
			.caixadecadastro
			{
				width: 35%;
				margin-left: 30%;
			}
		}
		@media only screen and (min-width: 768px) and (max-width:900px)
		{
			.caixadecadastro
			{
				width: 45%;
				margin-left: 30%;
			}
		}
		@media only screen and (min-width: 480px) and (max-width: 767px)
		{
			.caixadecadastro
			{
				width: 60%;
				margin-left: 20%;
			}
		}
		@media only screen and (max-width: 479px)
		{
			.caixadecadastro
			{
				width: 60%;
				margin-left: 15%;
			}
		}
		
	</style>
</body>
</html>