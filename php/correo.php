<?php

    //if(isset($_POST['Enviar'])){

        //if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto'])&&!empty($_POST['mensaje'])){
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];
            $destino = "rachav999iron@gmail.com";
            $contenido = "Nombre: "+ $nombre + "\nCorreo: " + $email + "\nAsunto: " + $asunto + "\nMensaje: " + $mensaje ;
            /*$header = 'From: rachav_999iron@hotmail.com' . "\r\n";
            $header = 'Reply-To: rachav_999iron@hotmail.com' . "\r\n";
            $header = 'X-Maller:PHP/'. phpversion();*/
            mail($destino,$asunto,$contenido);
            header('Location:../index.html');
            /*if($email){
                echo "<h4>Enviado correctamente!!!</h4>";
            }*/
       // }
    //}
?>