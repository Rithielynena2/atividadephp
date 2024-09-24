<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada em PHP</title>
    <h2>Exercício 2 <p></p> Implemente um algoritmo em PHP que receba, por meio de um formulário HTML, um número inteiro e
    exiba no navegador a tabuada desse número de 0 a 10. O resultado deve ser exibido em formato de lista.</h2>
</head>
<body>

    <!-- Formulário para receber o número -->
    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Ver Tabuada">
    </form>

    <?php 
    // Verifica se o formulário foi enviado
    if (isset($_POST['numero'])) {
        // Pega o número enviado pelo formulário
        $numero = $_POST['numero'];

        // Exibe o título da tabuada
        echo "<h3>Tabuada do número $numero:</h3>";

        // Gera e exibe a tabuada de 0 a 10

        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>
    <a href="index.html">Clique aqui para voltar ao menu.</a>
    <style>
        title {
  color: red;
  text-align: center;
} 
        p {
  color: yellow;
  text-align: center;
} 
body{
    height: 100%;
    width: 100%;
    background-color: blueviolet;
    text-align: center;
}

    </style>
    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        echo "<p>";
        echo "Informações do browser (User agente):" . $_SERVER
        ['HTTP_USER_AGENT'];
    ?>

</body>
</html>