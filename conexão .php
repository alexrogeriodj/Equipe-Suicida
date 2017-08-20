// Informações para conexão
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "banco";
 
// Conectando ao banco de dados
$conn = mysql_connect($host, $usuario, $senha) or die (mysql_error());
// Selecionando o banco de dados
$db = mysql_select_db($banco, $conn) or die (mysql_error());
// Definindo o charset como utf8 para evitar problemas com acentuação
$charset = mysql_set_charset("utf8");