
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou ímpar</title>
    <h2>Exercício 5 <p></p> Desenvolva um algoritmo em PHP que receba, através de um formulário HTML, um número inteiro e
    verifique se ele é par ou ímpar. O sistema deve exibir a mensagem correspondente no navegador.</h2>
</head>
<body>


<form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php 
    // Verifica se o formulário foi enviado
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

 
        if ($numero %2 == 0) {
        echo "O número é PAR.<br>";
        } else  {
        echo "O número é ÍMPAR.<br>";

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