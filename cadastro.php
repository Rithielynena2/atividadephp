<?php
$conn = mysqli_connect("localhost", "root", "","exercicio_prova");
if (!$conn){
    die("Erro de conexao com o Bancop de Dados");
}


$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$curso_horas = $_POST['curso_horas'];
$carga_horaria = $_POST['carga_horaria'];

$resultado = mysqli_query($conn, $sql);
mysqli_close($conn);
$sql = "INSERT INTO cadastroalunos ( matricula, nome, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssi", $matricula, $nome, $curso, $email, $telefone, $endereco, $cep, $cidade, $uf, $curso_horas, $carga_horaria);

if ($stmt->execute()) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar aluno: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>