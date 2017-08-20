<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(function($) {
    // Quando clicando em uma imagem da div que tem CLASS = frase
    $("div.frase img").click(function() {
        // Recupera o ID da frase que está na propriedade LANG da DIV-PAI da imagem e que tem CLASS = frase
        var id = $(this).parent("div.frase").attr("lang");
        // Recupera o tipo (bom|ruim) que está na propriedade ALT da imagem clicada
        var tipo = $(this).attr("alt");
        // Seleciona o SPAN onde estão os votos
        var votos =  $("div[lang="+id+"] span."+tipo+" span.valor");
        // Seleciona a DIV onde serão colocadas as mensagens
        var status = $("div[lang="+id+"] div.status");
        
        // Mensagem de carregando
        status.html("<img src='imagens/loader.gif' alt='Carregando...' />");
        
        // Faz a requisição AJAX
        $.post("ajax/votar.php", {id: id, tipo: tipo}, function(resposta) {
            // Se houver uma mensagem na resposta, exibe a mensagem
            if (resposta) 
            {
                status.html(resposta);
            } 
            // Quando a resposta for FALSE 
            else 
            {
                // Incrementa mais um aos votos
                votos.html(parseInt(votos.html()) + 1);
                // Mensagem de sucesso
                status.html("Obrigado por votar!");
            }
        });
 
    }); 
});
</script>