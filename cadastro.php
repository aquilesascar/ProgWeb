<?PHP
include 'conexao.php';
$nome = $_POST['txtnome'];
$endereco = $_POST['txtendereco'];
$telefone = $_POST['txttelefone'];
$email = $_POST['txtemail'];
echo "dados objetos: <br/>
$nome<br/>$endereco<br/>
$telefone<br/>$email";



$sql = "insert into academico.alunos(nome, endereco, telefone, email) values ('$nome', '$endereco', '$telefone', '$email')";
$result = pg_query($conexao, $sql);
if(!$result) {
    echo "ERROO";
}
?>