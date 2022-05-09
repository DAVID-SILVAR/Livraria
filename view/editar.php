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

	    <title>Livraria Moderna</title>

        <link rel="stylesheet" type="text/css" href="estilo.css">

    </head>
    <body>
        <div>
            <form action= '../controller/ControllerLivro.php?metodo=atualizar' method="post">
                <table>


                <?php
                    foreach($buscar as $values){?>
                    <tr>
                        <td> <?=  $values->id_livro ?> </td>
                        <td> <?=  $values->nome_livro ?></td>
                        <td> <?=  $values->livro_editora_id ?> </td>
                        <td> <?=  $values->autor_livro ?></td>
                        <td> <?=  $values->paginas_livro ?></td>
                        <td> <?=  $values->valor_livro ?></td> 

                    </tr>
                    <?php }?>

                </table>


                <label for="nome">Nome do livro: </label>
                <input type="text" name="nome" placeholder="Nome do livro">

                <label for="editora">Editora do livro: </label>
                <input type="number" name="editora" placeholder="Editora do Livro">

                <label for="autor">Autor do Livro: </label>
                <input type="text" name="autor" placeholder="Autor do Livro">

                <label for="autor">Total de paginas do livro: </label>
                <input type="number" name="paginas" placeholder="Total de paginas do Livro">

                <label for="autor">Valor do Livro: </label>
                <input type="number" name="valor" placeholder="valor total do Livro">

                <button type="submit">Editar</button>
            </form>
        </div>

    </body>
</html>





