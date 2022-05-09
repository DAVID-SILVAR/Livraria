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

    </head>
    <body>
 
 <div class="enviar">  

     <form action= '../controller/ControllerLivro.php?metodo=atualizar' method="post">

         <h1 class="formularioTitulo">Editar</h1>

         <label class="formularioLabel" for="nome"><?= $buscar[0]->nome_livro ?>: </label>
         <input type="text" name="nome" placeholder="Nome do livro">

         <label class="formularioLabel" for="editora"><?= $buscar[0]->livro_editora_id ?>:</label>
         <input type="number" name="editora" placeholder="Editora do Livro">

         <label class="formularioLabel" for="autor"><?= $buscar[0]->autor_livro ?>:</label>
         <input type="text" name="autor" placeholder="Autor do Livro">

         <label class="formularioLabel" for="autor"><?= $buscar[0]->paginas_livro ?>:</label>
         <input type="number" name="paginas" placeholder="Total de paginas do Livro">

         <label class="formularioLabel" for="autor"><?= $buscar[0]->valor_livro ?>:</label>
         <input type="number" name="valor" placeholder="valor total do Livro">

         <input type="hidden" value = "<?= $buscar[0]->id_livro ?>" name="EditarId" >

         <button type="submit">Atulizar</button>
     </form>

 </div>

</body>
</html>






