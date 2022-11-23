<?php

include('1conexao.php');

$codigo = $_GET['codigo'];

$sql = "DELETE FROM Cliente WHERE codigo=$codigo";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: 1listausu.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}
?>