<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!empty($_POST)){

    $nome = $_POST["Nome"];
    $telefone = $_POST["Telefone"];
    $email = $_POST["Email"];
    $mensagem = $_POST["Mensagem"];

}

?>
<!DOCTYPE html>
<html lang="UTF-8">
    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>Atividade</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- <script type="text/javascript" src="javascript.js"></script> -->
    </head>
    <body>        
        <header>
            <h1 class="titulo_text">Resultado Formulário!!</h1>
            <h3 class="titulo_text">Aula de "<em>programação e design pra web</em>"</h3>
        </header>
        <main>            
            <section>                
                <article>
                    <div class="container">                    
                        <table>
                            <thead>
                                <tr>
                                    <?php 
                                        foreach ($_POST as $chave => $valor){
                                    ?>
                                        <th><?= ucfirst($chave) ?></th>
                                    <?php
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <?php
                                        foreach($_POST as $valor){
                                    ?>
                                        <td><?= $valor ?></td>
                                    <?php
                                        }
                                    ?>
                                </tr>                          
                            </tbody>
                        </table>
                    </div>                    
                </article>                
            </section>            
        </main>
        <footer>
            <p>Copyright © Rômulo Mesquita </p>
        </footer>       
    </body>
</html>