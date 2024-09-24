<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'exercicio_prova';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$matricula = $_POST['matricula'];
$nova_carga = $_POST['nova_carga'];

// Verifica se o aluno existe
$sql = "SELECT carga_horaria FROM cadastroalunos WHERE matricula = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matricula);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    // Aluno encontrado
    $row = $resultado->fetch_assoc();
    $carga_atual = $row['carga_horaria'];
    $nova_carga_total = $carga_atual + $nova_carga;

    // Atualiza a carga horária
    $update_sql = "UPDATE cadastroalunos SET carga_horaria = ? WHERE matricula = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("is", $nova_carga_total, $matricula);

    if ($update_stmt->execute()) {
        echo "Carga horária atualizada com sucesso! Nova carga horária: " . $nova_carga_total . " horas.";
    } else {
        echo "Erro ao atualizar a carga horária: " . $update_stmt->error;
    }

    $update_stmt->close();
} else {
    echo "Matrícula não encontrada.";
}

$stmt->close();
$conn->close();
?>