<script type="text/javascript" src="public/js/events.js"></script>
<link href="assets/css/events.css"   rel="stylesheet"/>
<!-- <script type="text/javascript" src="public/js/jqueryForm.js"></script> -->
<div class="box1 effect8">   
  <h3>Rc Upcomming Events</h3>
    <ul id="events" class="all_events">
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
              <!--<div class="form-group">
              <label for="event_end_time">End Time</label>              
              <input type="text" required="required" name="event_end_time" id="event_end_time" class="form-control">
              </div>
              <div class="form-group">
              <label for="event_end_time">Venue</label>              
              <input type="text" required="required" name="eventvenue" id="eventvenue" class="form-control">
              </div>-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="submitevent" type="button" class="btn btn-primary">Create</button>
              <!-- <input type="submit" value="Upload" class="btn btn-primary"> -->
            </div>
          </div><!-- /.modal-content -->
        </form>
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->