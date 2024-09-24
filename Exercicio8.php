
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Média de notas: Aprovação ou Reprovação </title>
    <h2>Exercício 8 <p></p>   Crie um algoritmo em PHP que receba três notas de um aluno via formulário HTML. As notas devem ser
armazenadas em um array e a média final calculada. O sistema deve exibir a média e a situação do aluno:
"Aprovado" (média ≥ 7) ou "Reprovado" (média < 7). Considere o sistema de notas do SGA:
((A1*2)+(A2*2)+(A3*1))/5.</h2>
</head>
<body>


<form action="" method="POST">
        <label for="numero1">Digite a primeira nota:</label>
        <input type="number" id="numero1" name="numero1" step="any" required><br><br>

        <label for="numero2">Digite a segunda nota:</label>
        <input type="number" id="numero2" name="numero2" step="any" required><br><br>

        <label for="numero3">Digite a terceira nota:</label>
        <input type="number" id="numero3" name="numero3" step="any" required><br><br>
        <input type="submit" value="Verificar">
        </form>

<?php
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
    $nota1 = floatval($_POST['numero1']);
    $nota2 = floatval($_POST['numero2']);
    $nota3 = floatval($_POST['numero3']);

    $notas = [$nota1,$nota2,$nota3];
    $media = array_sum($notas) / count($notas);

    echo "Média: $media <br>";
    if ($media >= 7){echo "APROVADO <br>";} else{ echo "REPROVADO <br>";}


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