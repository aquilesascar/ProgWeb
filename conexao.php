.<?PHP
$usuario="aula";
$senha= "aula";
$ip= "10.90.24.54";
$banco= "aula";

$conexao= pg_connect("host=$ip dbname=$banco user=$usuario password=$senha");

if(!$conexao){
    die("Erro na conexão");
}

?>