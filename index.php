<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title>Página de Captura</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./style/style.css" />

    </head>

    <body>

        <form id="centro" action="envio.php" method="POST" enctype="multipart/form-data">
            <h1>Página de Captura</h1>

            <label for="email">Preencha os dados abaixo para receber seu arquivo:</label><br>

            <input class="formulario" type="text" autocomplete="false" required="required" name="name" Placeholder="Seu nome" ><br>
            <input class="formulario" type="email" required="required" name="email" Placeholder="Seu Email" ><br>
            <input id="botão" class="formulario"type="submit" name="send" value="Receba o Arquivo">
        </form>

    </body>
</html>
