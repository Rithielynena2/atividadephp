<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'exercicio_prova';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário de busca
$criterio = $_POST['criterio'];
$valor = $_POST['valor'];

// Define a coluna que será usada na busca com base no critério escolhido
if ($criterio == 'nome') {
    $coluna = 'nome';
} elseif ($criterio == 'matricula') {
    $coluna = 'matricula';
} else {
    $coluna = 'email';
}

// Cria a query de busca
$sql = "SELECT matricula, nome, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria 
        FROM cadastroalunos WHERE $coluna LIKE ?";

$stmt = $conn->prepare($sql);
$valor_busca = "%$valor%";
$stmt->bind_param("s", $valor_busca);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    echo "<h2>Resultado da Busca</h2>";
    echo "<table border='1'>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>E-mail Institucional</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Curso para Horas Complementares</th>
                <th>Carga Horária</th>
            </tr>";
    
    while($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['matricula'] . "</td>
                <td>" . $row['nome'] . "</td>
                <td>" . $row['curso'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['telefone'] . "</td>
                <td>" . $row['endereco'] . "</td>
                <td>" . $row['cep'] . "</td>
                <td>" . $row['cidade'] . "</td>
                <td>" . $row['uf'] . "</td>
                <td>" . $row['curso_horas'] . "</td>
                <td>" . $row['carga_horaria'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$stmt->close();
$conn->close();
?>
