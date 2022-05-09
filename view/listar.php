<?php 
session_start();

//print_r($_SESSION['listaLivro']);

$listar = $_SESSION['listaLivro'];

/* echo '<pre>';
print_r($listar);
echo '</pre>'; 
exit(); */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/listar.css">

    <title>listar</title>
</head>
<body>
    <form >

        <h1>Livros</h1>


        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0"  class="table">

                <thead>
                    <tr>
                        <th scope="col">Id Livro</th>
                        <th scope="col">Nome do Livro</th>
                        <th scope="col">Id Editora</th>
                        <th scope="col">Autor Livro</th>
                        <th scope="col">Paginas Livro</th>
                        <th scope="col">Vlr do Livro</th>
                        <th scope="col">...</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
            </table>

        </div>

        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0" >
            
            <tbody>
                <?php
                //$listar = $_SESSION['listaLivro'];

                    foreach($listar as $values){?>
                
                    <tr>
                        <td> <?=  $values->id_livro ?> </td>
                        <td> <?=  $values->nome_livro ?></td>
                        <td> <?=  $values->livro_editora_id ?> </td>
                        <td> <?=  $values->autor_livro ?></td>
                        <td> <?=  $values->paginas_livro ?></td>
                        <td> <?=  $values->valor_livro ?></td> 
                        <td><a href = "<?php echo "../controller/ControllerLivro.php?metodo=buscar&id=".$values->id_livro?>">Editar</a></td>
                        <td><a href = "<?php echo "../controller/ControllerLivro.php?metodo=excluir&id=".$values->id_livro?>">Excluir</a></td>
                    </tr>
                <?php }?>
            </tbody>

            </table>
        </div>

    </from>
</body>
</html>