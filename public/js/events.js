window.Events ={};
Events.CreateEvent = function(){
  console.log("post the event");
};
$(document).ready(function(){  
  Events.CreateEvent();  
});