<?php include ("conn.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistema de votação simples com PHP/JQuery/AJAX</title>
 
</head>
 
<body>
<h1>Sistema de votação simples com PHP/JQuery/AJAX</h1>
 
<?php
// Selecionando todas as frases
$query = mysql_query("SELECT * FROM frases ORDER BY id DESC");
// Passando frase por frase
while ($frase = mysql_fetch_object($query)):
?>
 
<div class="frase" lang="<?php echo $frase->id; ?>">
    <div class="texto"><?php echo $frase->texto; ?></div>
    
    <img src="imagens/bom.png" alt="bom" />
    <span class="bom">
        (<span class="valor"><?php echo $frase->bom; ?></span>)
    </span>
    
    <img src="imagens/ruim.png" alt="ruim" />
    <span class="ruim">
        (<span class="valor"><?php echo $frase->ruim; ?></span>)
    </span>
    
    <div class="status"></div>
</div>
 
<?php endwhile; ?>
</body>
</html>