$(document).ready(function(){
	var tableName="Meals";
	var url=document.URL+"/getMealName"
	console.log(url);
	$.ajax({
		type:"post",
		url:url,
		success:function(res){
			// var a=JSON.stringify(res);
		}
	});

	$('#submit_meal').click(function(){
		// alert($('#meal_name').val());
		if($('#meal_name').val()!==""){
			var meal_name=$('#meal_name').val();
			
			var row={
				"table":"Meals",
				"data":{
					"Cuisine":meal_name,
					}
				};
			
			
			
			$.ajax({
				type:"POST",
				url:'meals/insertMealName/',
				data:row,
				success:function(res){
					console.log('success');
				}
			});
		}	
		
	});
});