$(function(){
	$("#user").blur(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('Class_usuario_DAL.php', dados, function(retorna)
			{
				if(retorna != "")
				{
					alert(retorna);
				}
			});
		}
	});
});