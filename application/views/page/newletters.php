<script type="text/javascript" src="public/js/newsletters.js"></script>
<script type="text/javascript" src="public/js/jqueryForm.js"></script>
<div class="box1 effect8">    
  <h3>Rc News letter</h3>
    <ul>
      <li><a href="./uploads/App_Store_Marketing_Getting_Started_Guide.pdf" target="_blank">Jan</a></li>
      <li><a href="./uploads/rc_feb.pdf"  target="_blank">Feb</a></li>
      <li><a href="./uploads/rc_march.pdf"  target="_blank">March</a></li>      
    </ul>
     <button id="upload" class="btn btn-danger" data-toggle="modal" data-target="#uploadModal"  title="Newsletter" alt="Newsletter">Upload News letter</button>       
</div>
<!-- news letter upload modal -->
    <div class="modal fade" id="uploadModal">
      <div class="modal-dialog">
        <form enctype="multipart/form-data" action="newsletters/upload_news_letter" method="post" >
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Upload News Letter</h4>
            </div>
            <div class="modal-body">
              <p class="upload_error" style="display: none;"></p>
              <p>Upload News Letter of the Month:</p>
              <input type="file" required="required" name="userfile" id="file-with-photo">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="submitupload" type="button" class="btn btn-primary">Upload</button>
              <!-- <input type="submit" value="Upload" class="btn btn-primary"> -->
            </div>
          </div><!-- /.modal-content -->
        </form>
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->