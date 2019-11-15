<html>
    <head>
        <title>Lojas BR</title>
        <meta charset="utf-8">
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        <link rel="stylesheet" href="./publico/css/app.css">
        <link rel="stylesheet" type="text/css" href="./publico/css/style_index.css">
        <link rel="stylesheet" type="text/css" href="./publico/css/style_rodape.css">
        <link rel="stylesheet" type="text/css" href="./publico/css/style_formularioUsuario.css">

        
    </head>
    <body class="container">
        <?php require("./visao/cabecalho.php"); ?>
        <br><br><br>
            <main class="container">
               <?php require $viewFilePath; ?>
            </main>
         <?php require("./visao/rodape.php"); ?>
    </body>
</html>