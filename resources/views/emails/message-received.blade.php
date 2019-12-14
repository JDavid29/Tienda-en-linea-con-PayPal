<!DOCTYPE html>
<html>
<head>
	<title>Mensaje recibido</title>
</head>
<body>
	<!--Contenido de email  en LLAVES  var_dump($mensaje)-->

	<p>Recibiste un mensaje de: {{ $msg['nombre'] }} - {{ $msg['email']}}</p>
	<p><strong>Asunto:</strong> {{ $msg['asunto'] }}</p>
	<p><strong>Contenido:</strong> {{ $msg['mensaje'] }}</p>
</body>
</html>