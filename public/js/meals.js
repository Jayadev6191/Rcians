$(document).ready(function(){
	var tableName="Meals";
	$.ajax({
		type:"post",
		url:document.URL,
		data:tableName,
	});
	console.log(document.URL);
	$('#submit_meal').click(function(){
		if($(this).val()!==""){
			var data=$(this).val();
			$.ajax({
				type:"post",
				url:document.URL,
				data:data
			});
		}
	});
});