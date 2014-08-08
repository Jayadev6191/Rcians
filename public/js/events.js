window.Events ={};
Events.CreateEvent = function(){
  console.log("post the event");
  $("#submitevent").click(function(){
    var name =$('input[name=eventname]').val();
    var date =$('input[name=eventDate]').val();    
    var start_time =$('input[name=event_start_time]').val();
    var end_time =$('input[name=event_end_time]').val();
    var eventvenue =$('input[name=eventvenue]').val(); 
    var postobject ={};
    postobject = {name : name,date : date, start_time: start_time, end_time: end_time, eventvenue: eventvenue};   
     console.log(postobject);
     $('#uploadEvent').modal('hide');
     var post={
     	table: "Events",
     	data:{
     		name:name,
     		ondate:date,
     		venue:eventvenue,
     	}
     };
     $.ajax({     
	    url: "events/addEvent",
	    // crossDomain : true,
	    // dataType : "json",
	    data:post,
	    type: "POST",
	  }).done(function( data ) {    
	    	location.reload();
	  })
	  .fail(function (data){         
	    if (data.status == 400){
	      alert("Bad Request");
	    }
	  });
  });
};
Events.getEvents = function(){
  console.log("get the events");
  $.ajax({     
    url: "events/getEvents",
    // crossDomain : true,
    // dataType : "json",
    type: "GET",
  }).done(function( data ) {    
    console.log(data);
    data = $.parseJSON(data);
    var content = "<ul>";
	for(var i =0; i < data['object'].length; i++){
		
		content+="<li>";
		content+="<h3>"+data['object'][i].name+"</h3>";
		content+="<p>Venue: "+data['object'][i].venue+"</p>";
		content+="<p>onDate: "+new Date(parseInt(data['object'][i].ondate)).toString()+"</p>";
		content+="</li>";
	}
	content+="</ul>";
	$("#events").append(content);
    // var all_letters = data.all_newsletters.monthly;
    // console.log(all_letters);    
    
  })
  .fail(function (data){         
    if (data.status == 400){
      alert("Bad Request");
    }
  });
};
$(document).ready(function(){  
  Events.CreateEvent();
  Events.getEvents();  
});
