<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <h2>Exercício 4 <p></p> Crie uma calculadora em PHP que receba duas entradas numéricas e uma operação (soma, subtração,
multiplicação ou divisão) através de um formulário HTML. Dependendo da operação escolhida, o sistema deve
realizar a operação e exibir o resultado.</h2>
</head>
<body>


<form action="" method="POST">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" step="any" required><br><br>

        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" step="any" required><br><br>

        <label for="operacao">Escolha a operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacao'])) {
    // && se refere à AND(E) e | | se ferere à OR(OU)
        $numero1 = floatval($_POST['numero1']);
        $numero2 = floatval($_POST['numero2']);
        $operacao = $_POST['operacao'];
        $resultado = 0;

//Escole a operação
        switch ($operacao) {
            case "soma":
                $resultado = $numero1 + $numero2;
                echo "Resultado: $numero1 + $numero2 = $resultado<br>";
                break;
            case "subtracao":
                $resultado = $numero1 - $numero2;
                echo "Resultado: $numero1 - $numero2 = $resultado<br>";
                break;
            case "multiplicacao":
                $resultado = $numero1 * $numero2;
                echo "Resultado: $numero1 * $numero2 = $resultado<br>";
                break;
            case "divisao":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    echo "Resultado: $numero1 ÷ $numero2 = $resultado<br>";
                } else {
                    echo "Erro: Divisão por zero não é permitida.<br>";
                }
                break;

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