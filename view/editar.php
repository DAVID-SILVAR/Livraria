<?php
    session_start();

    $buscar = $_SESSION['buscar'];

/*     echo '<pre>';
    print_r($buscar);
    echo '</pre>'; */ 

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="stylesheet" href="../assets/css/editar.css"> -->

	    <title>Livraria Moderna</title>

        <link rel="stylesheet" href="../assets/css/editar.css">

    </head>
    <body>
 
    <div class="enviar">  

        <form class="formulario" action= '../controller/ControllerLivro.php?metodo=atualizar' method="post">

            <h1 class="formularioTitulo">Editar</h1>
            
            <input class="formularioInput" value = "<?= $buscar[0]->nome_livro ?>" type="text" name="nome" placeholder="">
            <!-- <label class="formularioLabel" for="nome">Titulo do livro: </label> -->
            
            <input  class="formularioInput" value = "<?= $buscar[0]->livro_editora_id ?>" type="number" name="editora" placeholder="">
            <!-- <label class="formularioLabel" for="editora"></label> -->

            <input class="formularioInput" value = "<?= $buscar[0]->autor_livro ?>" type="text" name="autor" placeholder="">
            <!-- <label class="formularioLabel" for="autor">Autor do livro:</label> -->

            <input class="formularioInput" value = "<?= $buscar[0]->paginas_livro ?>" type="number" name="paginas" placeholder="">
            <!-- <label class="formularioLabel" for="autor">Total de paginas do livro:</label> -->

            <input class="formularioInput" value = "<?= $buscar[0]->valor_livro ?>" type="number" name="valor" placeholder="Valor do Livro: ">
            <!-- <label class="formularioLabel" for="autor">Valor do Livro:</label> -->

            <input class="formularioInput"  type="hidden" value = "<?= $buscar[0]->id_livro ?>" name="EditarId" >

            <button class="formularioSubmit"  type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Atulizar</button>

        </form>

    </div>

</body>
</html>






