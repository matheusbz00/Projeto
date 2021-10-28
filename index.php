<?php
 session_start();
$senha = $_POST['pass'];

if($_SESSION['senha'] != md5($senha)){
    header("Location:login.php");   
}

?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>
        <link rel="stylesheet" href="css/table.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Projeto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="perfil.php">Perfil</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Tabelas de Produtos</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <div class="div1">
            <table class="table">
                <h2>Padrão</h2>
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Opcionais</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tabela = array();
                    $tabela[0]['produtos']['nome'] = "Produto 1";
                    $tabela[0]['produtos']['descricao'] = "Descrição do produto 1";
                    $tabela[0]['produtos']['valor'] = 50;
                    $tabela[0]['produtos']['opcionais'][] = "Opcional 1";
                    $tabela[0]['produtos']['opcionais'][] = "Opcional 2";
                    $tabela[0]['produtos']['opcionais'][] = "Opcional 3";
                    $tabela[1]['produtos']['nome'] = "Produto 2";
                    $tabela[1]['produtos']['descricao'] = "Descrição do produto 2";
                    $tabela[1]['produtos']['valor'] = 75;
                    $tabela[1]['produtos']['opcionais'][] = "Opcional 1";
                    $tabela[1]['produtos']['opcionais'][] = "Opcional 2";
                    $tabela[1]['produtos']['opcionais'][] = "Opcional 3";
                    $tabela[1]['produtos']['opcionais'][] = "Opcional 4";
                    $tabela[2]['produtos']['nome'] = "Produto 3";
                    $tabela[2]['produtos']['descricao'] = "Descrição do produto 3";
                    $tabela[2]['produtos']['valor'] = 100;
                    $tabela[2]['produtos']['opcionais'][] = "Opcional 1";
                    $tabela[2]['produtos']['opcionais'][] = "Opcional 2";
                    foreach($tabela as $val)
                    {
                            
                            echo "<tr>";
                            echo "<td>" . $val['produtos']['nome'] . "</td>";
                            echo "<td>" . $val['produtos']['descricao'] . "</td>";
                            echo "<td>" . $val['produtos']['valor'] . "</td>";
                            echo "<td>";
                            foreach($val['produtos']['opcionais'] as $opcionais){
                                echo "-" . $opcionais . "</br>";        

                            };
                            echo "</td></tr>";
                        };
                    ?> 
                </tbody>
            </table>
        </div>
        <div class="div2">
            <table class="table">
                <thead>
                    <h2>Inversa</h2>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Opcionais</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    arsort($tabela);     
                    foreach($tabela as $val)
                    {

                        echo "<tr>";
                        echo "<td>" . $val['produtos']['nome'] . "</td>";
                        echo "<td>" . $val['produtos']['descricao'] . "</td>";
                        echo "<td>" . $val['produtos']['valor'] . "</td>";
                        echo "<td>";
                        foreach($val['produtos']['opcionais'] as $opcionais){
                        echo "-" . $opcionais . "</br>";        

                        };
                        echo "</td></tr>";
                    };
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>