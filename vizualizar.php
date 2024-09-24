<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'exercicio_prova';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Exibe os dados dos alunos
$sql = "SELECT matricula, nome, email FROM cadastroalunos";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Lista de Alunos</h2>";
    echo "<table border='1'>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>E-mail Institucional</th>
            </tr>";
    
    while($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['matricula'] . "</td>
                <td>" . $row['nome'] . "</td>
                <td>" . $row['email'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum aluno encontrado.";
}

$conn->close();
?>
