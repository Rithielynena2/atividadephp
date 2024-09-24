<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do fatorial de um número</title>
    <h2>Exercício 3 <p></p> Desenvolva um algoritmo em PHP que receba um número inteiro via formulário HTML e calcule o fatorial
    desse número. O resultado deve ser exibido na tela, inclusive os números que contemplam o fatorial.</h2>
</head>
<body>


    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Ver Fatorial">
    </form>

    <?php 
    // Verifica se o formulário foi enviado
    if (isset($_POST['numero'])) {

        $numero = $_POST['numero'];

        $fatorial = 1;
        if ($numero == 0 || $numero == 1) {     // && se refere à AND(E) e | | se ferere à OR(OU)
            echo "$numero x 1 ";
        } else {
            for ($i = $numero; $i > 1; $i--) {
                echo "$i x "; // 
                $fatorial *= $i; 
            }

        }


        echo " = $fatorial";
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