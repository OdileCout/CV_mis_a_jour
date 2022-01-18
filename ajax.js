/**document.getElementById('sendMail').addEventListener('submit', function(e){
	e.preventDefault();

	var data = new FormData(this);

	var httpRequest = new XMLHttpRequest();

	httpRequest.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			console.log(this.reponse);
		} else if (this.readyState == 4){
			alert('Une erreur est survenue ...');
		}
	};

	httpRequest.open('POST', 'index.php', true);
	httpRequest.reponseType = 'json';
	httpRequest.send(data);

	return false;
})**/
$(function(){
	$('#sendMail').submit(function(){
		emailAdress = $(this).find('input[name = emailAdress]').val();
		socityName = $(this).find('input[name = socityName]').val();
		objectMess = $(this).find('input[name = objectMess]').val();
		bodyMessage = $(this).find('textarea[name = bodyMessage]').val();
		$.post('ajax.php', {emailAdress: emailAdress, socityName: socityName}, function(data){
			alert(data);
		});
		return false;
	});
});


