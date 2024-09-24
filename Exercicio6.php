
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão de valores em ordem crescente</title>
    <h2>Exercício 6 <p></p> : Implemente um algoritmo em PHP que receba dois números, A e B, através de um formulário HTML, e
    exiba os valores em ordem crescente no navegador.</h2>
</head>
<body>


<form action="" method="POST">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" step="any" required><br><br>

        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" step="any" required><br><br>
        <input type="submit" value="Arrumar">
        </form>

<?php
$lista = [];
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    // && se refere à AND(E) e | | se ferere à OR(OU)
    $numero1 = floatval($_POST['numero1']);
    $numero2 = floatval($_POST['numero2']);

    array_push($lista, $numero1, $numero2);
    sort($lista);
    foreach ($lista as $item) {
        echo "$item ,";
    }
}
echo "<br>"

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