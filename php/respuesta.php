<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta ....</title>
</head>
<body>
    <?php

        $us="joshua";
        $co='minewor@gmail.com';
        $ps="mine3.1416";
        $conf='mine3.1416'
        $tel='4891085737'
        $respuesta="";

        $usuario=$_POST['user'];
        $correo=$_POST['mail']
        $contraseña=$_POST['password'];
        $confirmacion=$_POST['confirmation']
        $telefono=$_POST['phone']

        if($us==$usuario && $ps==$contraseña && $co==$correo && $conf==$confirmacion && $tel==$telefono){
            $respuesta="Correcto";
        }else{
            $respuesta="Incorrecto";
        }
    ?>

    <h1>Respuesta...</h1>
    <h2>Hola : <?php echo($usuario) ?> </h2>
    <h2>Tu logueo fue : <?= $respuesta ?> </h2>
</body>
</html>