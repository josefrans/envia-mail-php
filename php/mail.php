<?php
 
  $destino="ejemplo@gmail.com";  //correo a quien le vas a enviar el mensaje
  $asunto="Enviado desde https://ejemplo.com"; //de donde fue enviado el correo
  $nombre=$_POST['nombre'];
  $correo=$_POST['email'];
  $mensaje=$_POST['mensaje'];
  $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje; //las variables que se va ejecutar

 
  if(mail($destino,$asunto,$contenido)){ // si todo sale bien se ejecutara if


    echo "<script>alert('correo enviado exitosamente')</script>"; //aparese una alerta que tu mensaje fue envido

    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";//se recargar la pagina index.html
    
  }else{//si no se envia se ejecutarar else

    echo "no enviado. intente más tarde..";
  }
  
 //https://xoce.org
?>