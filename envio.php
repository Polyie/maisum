<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <title>Receba seu email</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/style.css" />

  </head>


  <body>

    <?php

    // declaração das variáveis //
    $email = $_POST['email'];
    echo $email;
    $nome = $_POST['name'];
    $ass = "Receba seu arquivo";
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From: Poliana Lauck <poliana>';
    $conteudoEmail = "
    <html>
      <h1>Olá $nome! Seu arquivo está pronto:</h1>
      <p>Basta clicar no link e realizar o processo de download abaixo</p>
      <a href=' https://drive.google.com/file/d/1iixlReoQDsk0VVwYD5xKH_nIEX_BxwYJ/view?usp=sharing ' target='_blank'>Baixe aqui</a>
    </html>      ";

    //////////////////////////////

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

      $emailcompleto = mail($email, $ass, $conteudoEmail , $header);
      if($emailcompleto){

        $arquivoAbr = fopen("dados.txt", "a+");
        $emailsalvar = $email . "\n";
        fwrite($arquivoAbr,$emailsalvar);
        fclose($arquivoAbr);

        echo "<h1 id='titulo2' >O link foi enviado para seu email, obrigado pela colaboração</h1>";
        }

        else {
        echo "<h1 id='titulo2' >Um erro ocorreu, tente novamente.</h1>";
        }

    }
    else { echo "<h1 id='titulo2' >Email inválido, por favor repita.</a></h1>"; }

    ?>

  </body>

</html>
