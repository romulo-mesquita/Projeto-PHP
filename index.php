<!DOCTYPE html>
<html lang="UTF-8">
    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>Atividade</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="javascript.js"></script>
    </head>
    <body>
        <header>
            <h1 class="titulo_text">Formulário Contato</h1>
            <h3 class="titulo_text">Aula de "<em>programação e design pra web</em>"</h3>
        </header>
        <div class="container">
            <div class="div-form">
                <form method="POST" class="formulario" action="processar.php">
                    <div class="group-input">
                        <label for="id_Nome">Nome:</label>                            
                        <input type="text" class="text-input" name="Nome" id="id_Nome">
                    </div>
                    <div class="group-input">
                        <label for="id_Email">E-mail:</label>
                        <input type="email" class="text-input" name="Email" id="id_Email"> 
                    </div>
                    <div class="group-input">
                        <label for="id_Tel">Telefone</label>
                        <input type="text" class="text-input" name="Telefone" id="id_Tel">
                    </div>
                    <div class="group-input">
                        <label>Mensagem</label>
                        <textarea name="Mensagem" class="text-input" placeholder="Digite a mensagem..."></textarea>
                    </div>
                    <button class="btn" type="submit">Enviar</button>
            </form>
            </div>
        </div>
        
        <footer>
            <p>Copyright © Rômulo Mesquita </p>
        </footer>       
    </body>
</html>