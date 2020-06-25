<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<div class="wrap">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='post'>
	<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre:" value="<?php if (!$enviado && isset($nombre)) {
    echo $nombre;
}

?>">
	<input type="text" name="correo" class="form-control" id="correo" placeholder="Correo:" value=" <?php if (!$enviado && isset($correo)) {
    echo $correo;
}
?> ">


	<textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje:"><?php if (!$enviado && isset($mensaje)) {
    echo $mensaje;
}
?></textarea>
	<?php if (!empty($errores)): ?>
	<div class="alert error"><?php echo $errores; ?></div>
	<?php elseif ($enviado): ?>
	<div class="alert success"><p>Formulario enviado!</p></div>
	<?php endif;?>
	<input type="submit" name="submit-formulario" value='Enviar correo' class="btn btn-primary">

</form>

</div>

</body>
</html>
