window.NewsLetters ={};

NewsLetters.getNewsletters = function(){
  console.log("getting");
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
NewsLetters.Upload = function(){
  //console.log("upload");
  $("#upload").click(function(){
    console.log("clicked");
  });
};
NewsLetters.submitupload = function(){
  
  $("#submitupload").click(function(){
  console.log("submit now");
   if ( $('input[name=userfile]').val() == '') { return false; }
        var filename=$('input[name=userfile]').val();
        var extension = filename.split('.').pop().toLowerCase();
        console.log("filename"+filename);
        console.log("extension"+extension);
        if(extension !== 'pdf' && extension !== 'doc' && extension !== 'docx')
        {
          $('#uploadModal .upload_error').html('News letter must be in one of the following formats: .Pdf, .Doc, or .Docx').show();
          return false;
        }
           $('#uploadModal form').ajaxSubmit({
          success: function ( data ) {
            //console.log(data);            
           var jsonData = $.parseJSON( data );
            //console.log(jsonData);
            if (typeof jsonData.path != 'undefined'){
              var fileObj = {
                url: jsonData.path
              };                            
              $('#uploadModal').modal('hide');

              //TODO Make api call here
              
              // $.post('api/post2/user/postUpdateUserAvatar', {uploadfile: jsonData.path, csrf:csrf}, function(tabs) { }, "json")
                // .done(function(data) {
                // }).fail(function(data) { $("#activityIndicator").hide();  console.log("ajax error"); });
            } 
            else {
              if (typeof jsonData.status != 'undefined' && jsonData.status == 0){
                $('#uploadModal .upload_error').html(jsonData.error);
                $('#uploadModal .upload_error').show();
              }
            }          
          },
          error: function (data) {
            console.log("ERROR");
            $('#uploadModal').modal('hide');
            alert("error uploading  File");              
          }      
         });        
});
};

$(document).ready(function(){  
  NewsLetters.Upload();
  NewsLetters.submitupload();
  NewsLetters.getNewsletters();
});