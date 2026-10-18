<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="container">
            <h1>Dados e informações</h1>
        </div>
    </header>
    <main>
      <?php 
        include "db.php";
        $id_sala = isset($_GET['sala']) ? intval($_GET['sala']) : 1;

        $sql = "SELECT a.marca, a.modelo, a.numero_serie, e.capacidade_btu, e.tensao_v, e.potencia_w, e.status_atual
        FROM alocacao al
        JOIN equipamento e ON al.id_equipamento = e.id_equipamento
        JOIN ar_condicionado a ON e.id_equipamento = a.id_equipamento
        WHERE al.id_sala = $id_sala";

        $resultado = $conexao->query($sql);
      ?>

      <h2>Ar-condicionado:</h2>

      <table border="1">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>N° de Série</th>
            <th>Capacidade (BTU)</th>
            <th>Tensão (V)</th>
            <th>Potencia (W)</th>
            <th>Status</th>
        </tr>

        <?php
        if ($resultado && $resultado->num_rows > 0) {
            while ($linha = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha["marca"] . "</td>";
                echo "<td>" . $linha["modelo"] . "</td>";
                echo "<td>" . $linha["numero_serie"] . "</td>";
                echo "<td>" . $linha["capacidade_btu"] . "</td>";
                echo "<td>" . $linha["tensao_v"] . "</td>";
                echo "<td>" . $linha["potencia_w"] . "</td>";
                echo "<td>" . $linha["status_atual"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'> Nenhum ar-condicionado encontrado </td></tr>";
        }
        ?>
      </table>

      <h2>Ventiladores:</h2>
      <?php
      $id_sala = $_GET['sala'];

$sql_ventilador = "SELECT e.capacidade_btu, e.tensao_v, e.potencia_w, v.marca, v.modelo, v.numero_serie, e.status_atual
                   FROM equipamento e
                   INNER JOIN ventilador v ON e.id_equipamento = v.id_equipamento
                   INNER JOIN alocacao a ON e.id_equipamento = a.id_equipamento
                   WHERE a.id_sala = '$id_sala'";

$resultado_ventilador = mysqli_query($conexao, $sql_ventilador);
?>

<table border="1">
    <thead>
        <tr>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>Nº DE SÉRIE</th>
            <th>TENSÃO (V)</th>
            <th>POTÊNCIA (W)</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($resultado_ventilador && $resultado_ventilador->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($resultado_ventilador)) {
            echo "<tr>";
            echo "<td>" . $row['marca'] . "</td>";
            echo "<td>" . $row['modelo'] . "</td>";
            echo "<td>" . $row['numero_serie'] . "</td>";
            echo "<td>" . $row['tensao_v'] . "</td>";
            echo "<td>" . $row['potencia_w'] . "</td>";
            echo "<td>" . $row['status_atual'] . "</td>";
            echo "</tr>";
        }
        } else {
            echo "<tr><td colspan='7'> Nenhum ventilador encontrado </td></tr>";
        }
        ?>
    </tbody>
</table>

<h2>Televisões:</h2>
<?php
      $id_sala = $_GET['sala'];

$sql_televisao = "SELECT e.capacidade_btu, e.tensao_v, e.potencia_w, t.marca, t.modelo, t.numero_serie 
                   FROM equipamento e
                   INNER JOIN televisao t ON e.id_equipamento = t.id_equipamento
                   INNER JOIN alocacao a ON e.id_equipamento = a.id_equipamento
                   WHERE a.id_sala = '$id_sala'";

$resultado_televisao = mysqli_query($conexao, $sql_televisao);
?>

<table border="1">
    <thead>
        <tr>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>Nº DE SÉRIE</th>
            <th>TENSÃO (V)</th>
            <th>POTÊNCIA (W)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($resultado_televisao && $resultado_televisao->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($resultado_televisao)) {
            echo "<tr>";
            echo "<td>" . $row['marca'] . "</td>";
            echo "<td>" . $row['modelo'] . "</td>";
            echo "<td>" . $row['numero_serie'] . "</td>";
            echo "<td>" . $row['tensao_v'] . "</td>";
            echo "<td>" . $row['potencia_w'] . "</td>";
            echo "</tr>";
        }
        } else {
            echo "<tr><td colspan='7'> Nenhuma televisao encontrada </td></tr>";
        }
        ?>
    </tbody>
</table>

    </main>
</body>
</html>