<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'exercicio_prova';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário de exclusão
$criterio = $_POST['criterio'];
$valor = $_POST['valor'];

// Define a coluna que será usada no DELETE com base no critério escolhido
if ($criterio == 'nome') {
    $coluna = 'nome';
} elseif ($criterio == 'matricula') {
    $coluna = 'matricula';
} else {
    $coluna = 'email';
}

// Cria a query de exclusão
$sql = "DELETE FROM cadastroalunos WHERE $coluna = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $valor);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Nenhum registro encontrado com o critério informado.";
    }
} else {
    echo "Erro ao excluir o registro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>