$(function(){
	
	var data = new Date();
	var mesAtual = data.getMonth()+1;
	$('#mes_'+mesAtual).show();

	function hideShow(exibir){
		if(mesAtual > 12){
			mesAtual = 1;
		}else if (mesAtual <1){
			mesAtual = 12
		} 

		$('.mes').hide();
		$('#mes_'+mesAtual).show();
	}

	$('#vai').on('click', function(e){
		e.preventDefault();
		mesAtual++;
		hideShow();

		return false;
	});

	$('#volta').on('click', function(e){
		e.preventDefault();
		mesAtual--;
		hideShow();

		return false;
	});

});