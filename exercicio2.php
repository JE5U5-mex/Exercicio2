<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    <H1>AULA DE PHP</H1>
    <p>Testaremos neste bloco o uso do SWITCH CASE</p>
   <div class="container">
   <?php
        $op =1;
        switch($op){
            case 1: echo "Sexta-feira!! sextou"; break;
            case 2: echo "Aula de PHP!!"; break;
            default:
            echo "Nem 1 e nem 2";
        }?>
    </div>
</body>
</html>