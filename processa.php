<?php

require_once 'mail.php';

if(isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['assunto']) && !empty($_POST['assunto']) &&
        isset($_POST['mensagem']) && !empty($_POST['mensagem']))
        {

            $assunto = $_POST['nome']." - ".$_POST['assunto'];
            $mensagem = $_POST['mensagem'];

            if(send($assunto, $mensagem))
            {
                echo "Enviado";
            }
            else{
                echo "erro";
            }
        }else{
            echo "preencha todos os campos";
        }

?>