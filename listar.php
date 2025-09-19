<?php
include 'conexao.php';
$sql = 'select * from academico.alunos';
$result = pg_query($conexao, $sql);
if ($result) {
    while($alunos = pg_fetch_array($result)) {
        
        echo $alunos['nome']; echo "&emsp;";
        echo $alunos['endereco']; echo "&emsp;";
        echo $alunos['telefone']; echo "&emsp;";
        echo $alunos['email']; echo "&emsp;";
        echo "<br/>";
    }
} else {
    echo "erro"; echo pg_last_error();
}
pg_close($conexao);
echo"<input type='button' value='VOLTAR' onclick='history.back();'";
?>