
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        #textarea{
            resize: none;
            width:170px;

        }
    </style>
</head>
<body>
    <form action="processa.php" method="post">
        <label for="">Nome</label><br>
        <input type="text" name="nome" id="" required><br>
        <label for="">Assunto</label><br>
        <input type="text" name="assunto" id="" required><br>
        <label for="">Mensagem</label><br>
        <textarea name="mensagem" id="textarea" cols="30" rows="10" required></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>