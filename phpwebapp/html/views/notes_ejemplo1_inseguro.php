<html>
	<head> </head>
	<body>
		<h1>Inyecci&oacute;n SQL - inseguro</h1>
		<ul>
			<? foreach ($vmodel['notes'] as $n): ?>
				<li>
				Id: <a href='index2.php?id=<?=$n['id']?>'><?=$n['id']?></a>
				Title: <?=$n['title']?>
				Message:  <?=$n['text']?>
				Hidden:   <?=$n['hidden']?>
				</li>
			<? endforeach ?>
		</ul>
		<form method="POST" >
			<input name="title" placename="Title"/>
			<input name="text" placename="Text"/> 
			<input type="checkbox" name="hidden" value="1">
			<input type="submit" name="Send"/>
		</form>
	<hr>
	<em>Server: <?=$_SERVER['SERVER_ADDR'] ?> </em>
	<em>Worker: <?=gethostname() ?> </em>
	<hr>
    <p><a href="../index.php">Anterior</a>
    <p><a href="../index.php">Volver Página Principal</a>
    <p><a href="ejemplo1_protegido.php">Siguiente</a>

	</body>
</html>
