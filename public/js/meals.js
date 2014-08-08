$(document).ready(function(){
	var tableName="Meals";
	var url=document.URL+"/getMealName"
	console.log(url);
	$.ajax({
		type:"post",
		url:url,
		success:function(res){
			var a=JSON.stringify(res);
			console.log(a);
		}
	});
	// console.log(document.URL);
// 	$('#submit_meal').click(function(){
// 		if($(this).val()!==""){
// 			var data=$(this).val();
// 			$.ajax({
// 				type:"post",
// 				url:document.URL,
// 				data:data
// 			});
// 		}
// 	});
});