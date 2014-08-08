<script type="text/javascript" src="public/js/events.js"></script>
<!-- <script type="text/javascript" src="public/js/jqueryForm.js"></script> -->
<div class="box1 effect8">   
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
     <button id="upload" class="btn btn-danger" data-toggle="modal" data-target="#uploadEvent"  title="Events" alt="Event Upload">Create Event</button>       
</div>
<!-- news letter upload modal -->
    <div class="modal fade" id="uploadEvent">
      <div class="modal-dialog">
        <form enctype="multipart/form-data" action="newsletters/upload_news_letter" method="post" >
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Create Event</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
              <label for="eventName">Event Name</label>              
              <input type="text" required="required" name="eventname" id="eventname" class="form-control">
              </div>
              <div class="form-group">
              <label for="eventDate">Date</label>              
              <input type="date" required="required" name="eventDate" id="eventDate" class="form-control">
              </div>
              <div class="form-group">
              <label for="event_start_time">Start Time</label>              
              <input type="datetime" required="required" name="event_start_time" id="event_start_time" class="form-control">
              </div>
              <div class="form-group">
              <label for="event_end_time">End Time</label>              
              <input type="text" required="required" name="event_end_time" id="event_end_time" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="submitupload" type="button" class="btn btn-primary">Create</button>
              <!-- <input type="submit" value="Upload" class="btn btn-primary"> -->
            </div>
          </div><!-- /.modal-content -->
        </form>
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->