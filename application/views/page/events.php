<script type="text/javascript" src="public/js/events.js"></script>
<!-- <script type="text/javascript" src="public/js/jqueryForm.js"></script> -->
<div id="meals_container">
  <h3>Rc Upcomming Events</h3>
    <ul>
      <li>
        <div>
          <h5>Bowling</h5>
          <p>Date: 15th August</p>
          <p>Day: Friday</p>
          <p>Time: 3:30pm onwards</p>
          <p>Venue: Abc Street</p>
        </div>
      </li>
      <li>
        <div>
          <h5>Beach Day</h5>
          <p>Date: 30th August</p>
          <p>Saturday</p>
          <p>Time: 10:00am onwards</p>
          <p>Venue: Abc Street</p>
        </div>
      </li>
      <li>
        <div>
          <h5>Picnic</h5>
          <p>Date: 19th September</p>
          <p>Friday</p>
          <p>Time: 10:00am - 4:00pm</p>
          <p>Venue: Abc Street</p>
        </div>
      </li>                  
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