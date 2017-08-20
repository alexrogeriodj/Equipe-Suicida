<?php
// Incluindo arquivo de conexão
include("../conn.php");
 
// Recuperando valores
$id = (int) $_POST["id"];
$tipo = addslashes($_POST["tipo"]);
$cookie = isset($_COOKIE["votado_".$id]) ? $_COOKIE["votado_".$id] : null; 
 
// Se o cookie ainda não foi setado
if (!isset($cookie))
{
    // Incrementa o voto da frase
    $query = mysql_query("UPDATE frases SET ".$tipo." = ".$tipo."+1 WHERE id = ".$id."");
    // Se for um sucesso a query
    if ($query) 
    {
        // Seta um cookie
        setcookie("votado_".$id."", true, time()+60*60*24*6004);
        // Retorna false, ou seja, sucesso
        echo false;
    }
    // Se houver erro na query 
    else 
    {
        echo "Problemas no servidor.";
    }
}
// Se já houver um cookie
else
{
    echo "Você já votou nessa frase.";
}
?>