
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Maioridade </title>
    <h2>Exercício 9 <p></p> Desenvolva um algoritmo em PHP que receba, via formulário HTML, o nome e a idade de um usuário. O
sistema deve verificar se o usuário é maior ou menor de 18 anos e exibir uma mensagem personalizada.</h2>
</head>
<body>


<form action="" method="POST">
        <label for="numero1">Digite a sua idade:</label>
        <input type="number" id="numero1" name="numero1" step="any" required><br><br>

        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" ><br><br>

        <input type="submit" value="Verificar">
        </form>

<?php
if (isset($_POST['numero1']) && isset($_POST['nome'])) {
    $idade = $_POST['numero1'];
    $nome = $_POST['nome'];

    if ($idade >= 18){echo "$nome é maior de idade, tem $idade anos<br>";}
    else{echo "$nome não é maior de idade, tem $idade anos<br>";}

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