<?php

    session_start();
            
    //$t = $_SESSION['listaLivro'];
            
/*      echo'<pre>';
    print_r($_SESSION['listaLivro']);
    echo'</pre>'; */ 

?> 
<!DOCTYPE html>
<html lang="pt-br">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title>Livraria Moderna</title>
        <!-- Estyles-->
        <link rel="stylesheet" type="text/css" href="estilo.css">

        <link rel="stylesheet" href="../assets/css/form.css">

    </head>
    <body>
        <div class="enviar">
            <form class="formulario" action= '../controller/ControllerLivro.php?metodo=salvar' method="post">
                <h1 class="formularioTitulo">Dados</h1>

                <input class="formularioInput" type="text" name="nome" placeholder="">
                <label class="formularioLabel" for="nome">Nome do livro: </label>
                
                
                <input class="formularioInput" type="number" name="editora" placeholder="">
                <label class="formularioLabel" for="editora">Editora do livro: </label>
                
                <input class="formularioInput" type="text" name="autor" placeholder="">
                <label class="formularioLabel" for="autor">Autor do Livro: </label>
                

                <input class="formularioInput" type="number" name="paginas" placeholder="">
                <label class="formularioLabel" for="autor">Total de paginas do livro: </label>


                <input class="formularioInput" type="number" name="valor" placeholder="">
                <label class="formularioLabel" for="autor">Valor do Livro: </label>
                

                <button 
                class="formularioSubmit" type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>

                Enviar</button>
            </form>
        </div>
    </body>
</html>