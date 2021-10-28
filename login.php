<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="javascript/scripts.js"></script> 
  </head>
  <body>
    <form class="form" action="index.php" method="POST" id="login" onsubmit="return login()">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="img/usuario.jpg" alt="">
                <h2>Acesse ao Sistema</h2>
            </div>
            <div class="card-group">
                <label>Login:</label>
                <input type="text" name="name" id="name" placeholder="Digite seu nome" required>
            </div>
            <div class="card-group">
                <label>Senha:</label>
                <input type="password" name="pass" id="pass" placeholder="Digite sua senha" required>
            </div>
            <div class="card-group">
                <label><input type="checkbox" name="save" id="save">Lembre-me</label>
            </div>
            <div class="card-group btn">
                <button type="submit">Confirmar</button>
            </div>
            <?php
                session_start();

                if (file_exists("autenticacao.txt")) {
                    $lista = file_get_contents("autenticacao.txt");
                    $lista_array = explode(",", $lista);
                } else {
                    $lista = null;
                }               
                $_SESSION['senha'] = md5($lista_array[1]);

                echo "<input type='hidden' name='nameaut' id='nameaut' ";
                echo "value='" . $lista_array[0] . "'>";
                echo "<input type='hidden' name='passaut' id='passaut' ";
                echo "value='" . $lista_array[1] ."'>";
            ?>
        </div>
    </form>
  </body>
</html>