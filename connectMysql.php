<!DOCTYPE html> 
<html lang=en> 
	<head>  
		<meta charset=utf-8>
		<meta http-equiv=X-UA-Compatible content="IE=edge"> 
		<meta name=viewport content="width=device-width,initial-scale=1"> 
		<meta name=description content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development."> 
		<meta name=keywords content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development"> 
		<meta name=author content="Mark Otto, Jacob Thornton, and Bootstrap contributors"> 
		<title> Cenexão </title>
	</head>
	<body>
		<?php // nós conectamos com example.com na porta 3307 
			$link = mysql_connect('127.0.0.1:3306', 'root', 'root');
		 	if (!$link) 
		 	{
		  		die('Não foi possível conectar: ' . mysql_error()); 
		  	} 
		  	echo  'Conexão bem sucedida'; 
		  	mysql_close($link); // nós conectamos com localhost na porta 3307 
		?>
	</body>
</html>