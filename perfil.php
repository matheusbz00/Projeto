<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/perfil.css" media="screen">
        <script src="javascript/scripts.js"></script> 
        <title>Perfil</title>
    </head>
    <body>  
        <div>
            <h1 id="titulo">Perfil</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>
        <form class="form" action="" method="POST" id="perfil" onsubmit="return perfil()">
            <fieldset class="grupo"> 
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome">
                </div>  
                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome">
                </div>
            </fieldset>  
            <div class="campo">
                <label><strong>Email</strong></label>
                <input type="email" name="email" id="email">
            </div>
            <div class="campo">
                <label><strong>Atuando em qual área?</strong></label>
                <label>
                    <input type="radio" name="devweb" id="devweb" value="frontend" checked>Front-end
                </label>
                <label>
                    <input type="radio" name="devweb" id="devweb" value="backend">Back-end
                </label>
                <label>
                    <input type="radio" name="devweb" id="devweb" value="fullstack">Fullstack
                </label>
            </div>     
            <div class="campo">
                <label><strong>Senioridade</strong></label>
                <select id="senioridade">
                    <option value=""></option>
                    <option>Júnior</option>
                    <option>Pleno</option>
                    <option>Sênior</option>
                </select>
            </div>
            <div class="campo">      
                <label><strong>Conte um pouco mais da sua experiência: </strong></label>
                <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>
            <button class="botao" type="submit" onsubmit="">Concluído</button>
            <button class="botao" type="reset" onsubmit="">Limpar</button>
        </form>
    </body>
    <?php
 
        if (isset($_POST['nome'])) {
        $texto = $_POST['texto'];
        
        $arquivo = fopen('msg.txt', 'w');
        fwrite($arquivo, $texto);
        fclose($arquivo);
        }
    ?>

</html>