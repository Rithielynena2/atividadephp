
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Meses do ano </title>
    <h2>Exercício 10 <p></p>  Crie um algoritmo em PHP que receba, por meio de um formulário HTML, um número inteiro entre 1 e
12 e exiba o nome do mês correspondente a esse número. Caso o número seja fora do intervalo, o sistema deve
informar que não existe mês com esse número.</h2>
</head>
<body>


<form action="" method="POST">
        <label for="numero1">Digite o número de um mês:</label>
        <input type="number" id="numero1" name="numero1" step="any" required><br><br>

        <input type="submit" value="Ver mês">
        </form>

<?php
if (isset($_POST['numero1'])) {
    $numero = $_POST['numero1'];

    switch ($numero) {
        case "1":
            echo "Mês $numero = Janeiro <br>";
            break;
        case "2":
            echo "Mês $numero = Fevereiro <br>";
            break;
        case "3":
            echo "Mês $numero = Março <br>";
            break;
        case "4":
            echo "Mês $numero = Abril <br>";
            break;
        case "5":
            echo "Mês $numero = Maio <br>";
            break;
        case "6":
            echo "Mês $numero = Junho <br>";
            break;
        case "7":
            echo "Mês $numero = Julho <br>";
            break;
        case "8":
            echo "Mês $numero = Agosto <br>";
            break;
        case "9":
            echo "Mês $numero = Setembro <br>";
            break;
        case "10":
            echo "Mês $numero = Outubro <br>";
            break;
        case "11":
            echo "Mês $numero = Novembro <br>";
            break;
        case "12":
            echo "Mês $numero = Dezembro <br>";
            break;
        default:
            echo "Esse mês não existe <br>"; // Para qualquer número fora do intervalo
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