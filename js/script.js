$(document).ready(function(){
	displayData();
 
	$('#save').on('click', function(){
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var address = $('#address').val();
 
		if($('#firstname').val() == "" || $('#lastname').val() == "" || $('address').val()){
			alert("Please complete the required field");
		}else{
			$.ajax({
				type: 'POST',
				url: 'insert.php',
				data: {
					firstname: firstname,
					lastname: lastname,
					address: address
				},
				success: function(data){
					$('#firstname').val('');
					$('#lastname').val('');
					$('#address').val('');
					alert(data);
					displayData();
				}
			})
		}
	});
 
	function displayData(){
		$.ajax({
			type: 'POST',
			url: 'data.php',
			data: {res: 1},
			success: function(data){
				$('#data').html(data)
			}
		});
	}
});