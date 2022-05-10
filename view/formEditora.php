<!DOCTYPE html>
<html lang="pt-br">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title>Livraria Moderna</title>
        <!-- Estyles-->
        <link rel="stylesheet" type="text/css" href="estilo.css">

        <link rel="stylesheet" href="../assets/css/formEditora.css">

    </head>
    <body>
        <div class="enviar">
            <form class="formulario" action= '../controller/ControllerEditora.php?metodo=salvar' method="post">
                <h1 class="formularioTitulo">Dados da Editora</h1>

                <input class="formularioInput" type="text" name="nome" placeholder="">
                <label class="formularioLabel" for="nome">Nome da editora: </label>

                <button class="formularioSubmit" type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>

                Enviar</button>
            </form>
        </div>
    </body>
</html>