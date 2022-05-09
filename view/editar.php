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

        <link rel="stylesheet" href="../assets/css/editar.css">

	    <title>Livraria Moderna</title>

    </head>
    <body>
 
 <div class="enviar">  

     <form action= '../controller/ControllerLivro.php?metodo=atualizar' method="post">

         <h1 class="formularioTitulo">Editar</h1>

         <label class="formularioLabel" for="nome">Nome do livro: </label>
         <input type="text" name="nome" value = "<?= $buscar[0]->nome_livro ?>" placeholder="Nome do livro">

         <label class="formularioLabel" for="editora">Editora do livro: </label>
         <input type="number" name="editora" value = "<?= $buscar[0]->livro_editora_id ?>" placeholder="Editora do Livro">

         <label class="formularioLabel" for="autor">Autor do Livro: </label>
         <input type="text" name="autor" value = "<?= $buscar[0]->autor_livro ?>" placeholder="Autor do Livro">

         <label class="formularioLabel" for="autor">Total de paginas do livro: </label>
         <input type="number" name="paginas" value = "<?= $buscar[0]->paginas_livro ?>" placeholder="Total de paginas do Livro">

         <label class="formularioLabel" for="autor">Valor do Livro: </label>
         <input type="number" name="valor" value = "<?= $buscar[0]->valor_livro ?>" placeholder="valor total do Livro">

         <input type="hidden" value = "<?= $buscar[0]->id_livro ?>" name="EditarId" >

         <button type="submit">Atulizar</button>
     </form>

 </div>

</body>
</html>






