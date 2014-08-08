$(document).ready(function(){
	var source = $("#mealListTmpl").html();
	var tmpl = Handlebars.compile(source);
	
	var tableName="Meals";
	var url="meals/getMealName";
	console.log(url);
	$.ajax({
		type:"post",
		url:url,
		success:function(res){
			var data = $.parseJSON(res);
			var content = "<ul>";
			for(var i =0; i < data['object'].length; i++){
				content+="<li>"+data['object'][i].Cuisine+"</li>";
				
			}
			content+="</ul>";
			$(".selected_choices").html(content);
			console.log(data);
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
					location.reload();
				}
			});
		}	
		
	});
});