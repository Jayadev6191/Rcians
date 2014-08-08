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
  });
};
Events.getEvents = function(){
  console.log("get the events");
  $.ajax({     
    url: "./dummy/newsletter.json",
    crossDomain : true,
    dataType : "json",
    type: "GET",
  }).done(function( data ) {    
    console.log(data);
    var all_letters = data.all_newsletters.monthly;
    console.log(all_letters);    
    
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