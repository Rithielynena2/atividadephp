<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Verificação de Número Positivo, Negativo ou Zero</title>
</head>
<body>
    <h2>Resolução do Exercício 1 <p> Verificação de Número Positivo, Negativo ou Zero</h2>


    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php 
    // Verifica se o formulário foi enviado
    if (isset($_POST['numero'])) {
        // Pega o número enviado pelo formulário
        $numero = $_POST['numero'];

 
    if ($numero == 0) {
        echo "O número é nulo.";
    } elseif ($numero > 0) {
        echo "O número é positivo.";
    } else {
        echo "O número é negativo.";
    }
}
    ?>
    <a href="index.html">Clique aqui para voltar ao menu.</a>

    <?php
        echo "<p>";
        setlocale(LC_ALL, 'pt_BR.utf8');
        echo strftime('%d/%B/%G');
    
        echo "<p>";
        echo "Informações do browser (User agente):" . $_SERVER
        ['HTTP_USER_AGENT'];
    ?>
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
</body>
</html>
