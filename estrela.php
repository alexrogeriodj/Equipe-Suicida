
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script type="text/javascript" src="jquery.js"></script> 
<script type="text/javascript" src="jquery.rating.js"></script> 
<script type="text/javascript"> 
jQuery(function(){ 
jQuery('form.rating').rating(); 
}); 
</script> 
<title>Index</title> 
<link rel="stylesheet" type="text/css" href="style.css"/> 
</head> 
<body> 

<? 
mysql_connect('222.111.222.66','votacao','xxxx'); 
mysql_select_db('votacao'); 

$SQL = " SELECT votos, pontos FROM registro WHERE id = 1"; 
$RS = mysql_query($SQL); 
$RF = mysql_fetch_array($RS); 

$r = number_format($RF['pontos'] / $RF['votos'],2,'.','.'); 
$y = number_format($RF['votos']); 
?> 

<table> 
<tr> 
<td>Votos:&nbsp<?=$y?></td> 
<td>&nbsp|&nbspVote: </td> 
<td> 
<form style="display:none" title="Average Rating: <?=$r?>" class="rating" action="rate.php"> 
<input type="hidden" name="valor" value="1" /> 
<select id="r1"> 
<option value="1">1</option> 
<option value="2">2</option> 
<option value="3">3</option> 
<option value="4">4</option> 
<option value="5">5</option> 

</select> 

</form> 
</td> 
</tr> 
</table> 



</body> 
</html> 