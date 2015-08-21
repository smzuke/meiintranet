<?php include('header.php'); ?>

<div id="cspan" class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <h1 class="page-header">C-SPAN Questionnaire Filler!</h1>

      	<form action="cspan-output.php" method="POST">
    			<legend>Basic Information</legend>
          <div class="form-group">
      			<label>Event Title</label>
            <input type="text" name="title" class="form-control" />
          </div>
          <div class="form-group">
            <label>Day of the week</label>
            <input type="date" name="day" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Date (ex. November 18)</label>
            <input type="date" name="date" class="form-control"/>
          </div>
      		<div class="form-group">
            <label>Start Time (ex. 1pm / 1:30pm)</label>
            <input type="text" name="startTime" class="form-control" />
          </div>
          <div class="form-group">
            <label>End Time</label>
            <input type="text" name="endTime" class="form-control" />
          </div>
          <div class="form-group">
            <label>Venue Name</label>
            <input type="text" name="venueName" class="form-control" />
          </div>
          <div class="form-group">
            <label>Room Name</label>
            <input type="text" name="roomName" class="form-control" />
          </div>
          <div class="form-group">
            <label>Street Address (ex. 1761 N St. NW)</label>
            <input type="text" name="address" class="form-control" />
          </div>
          <br>
      		<legend>Contact Information</legend>
          <div class="form-group">
            <label>MEI Staff Contact</label>
            <input type="text" name="meiPOCname" class="form-control" placeholder="Scott Zuke" />
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="meiPOCemail" class="form-control" placeholder="szuke@mei.edu" />
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="meiPOCphone" class="form-control" placeholder="202-785-1141 ext. 236" />
          </div>
          <hr>
          <div class="form-group">
            <label>Venue Point of Contact</label>
            <input type="text" name="venuePOCname" class="form-control" placeholder="name" />
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="venuePOCemail" class="form-control" />
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="venuePOCphone" class="form-control" />
          </div>
          <br>
      		<legend>Editorial Questions</legend>
          <div class="form-group">
            <label>What will the speaker(s) discuss?</label>
            <textarea name="subject" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Will there be differing points of view, or anything newsworthy?</label>
            <textarea name="newsworthy" class="form-control"></textarea>
          </div>
          <br>
      		<legend>Logistics</legend>
          <div class="form-group">
            <label>Can camera crews arrive 2 hours in advance?</label><br>
            <input id="yes" type="radio" name="openEarly" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="openEarly" value="0"/><label for="no">&nbsp;No</label>
          </div>
          <div class="form-group">
            <label>If there are any instructions for getting in, write here. Otherwise, leave blank.</label>
            <textarea name="accessNotes" class="form-control"></textarea>
          </div>
      		<div class="form-group">
            <label>The speaker(s) will be...</label>
            <select name="arrangement" class="form-control">
              <option value="using a podium">Using podium</option>
              <option value="seated at a table">Seated at table</option>
              <option value="seated in chairs">Seated in chairs</option>
            </select>
          </div>
      		<div class="form-group">
            <label>Will there be a multbox?</label><br>
            <input id="yes" type="radio" name="multbox" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="multbox" value="0" /><label for="no">&nbsp;No</label>
          </div>
          <div class="form-group">
            <label>Are power outlets readily accessible?</label><br>
            <input id="yes" type="radio" name="power" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="power" value="0" /><label for="no">&nbsp;No</label>
          </div>
      		<div class="form-group">
            <label>Can camera crews do their own mic'ing if necessary?</label><br>
            <input id="yes" type="radio" name="mics" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="mics" value="0" /><label for="no">&nbsp;No</label>
          </div>
          <div class="form-group">
            <label>Is the lighting on-site sufficient for camera crews?</label><br>
            <input id="yes" type="radio" name="bringLights" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="bringLights" value="0" /><label for="no">&nbsp;No</label>
          </div>
          <div class="form-group">
            <label>How deep is the room (distance from speaker to cameras) in feet?</label>
            <input type="text" name="roomDepth" class="form-control" />
          </div>
      		<div class="form-group">
            <label>Can crews bring more than one camera?</label><br>
            <input id="yes" type="radio" name="multicam" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="multicam" value="0" /><label for="no">&nbsp;No</label>
          </div>
      		<div class="form-group">
            <label>Will the speaker(s) be on a riser?</label><br>
            <input id="yes" type="radio" name="speakerriser" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="speakerriser" value="0" /><label for="no">&nbsp;No</label>
          </div>
          <div class="form-group">
            <label>Will camera crews need to bring a riser?</label><br>
            <input id="yes" type="radio" name="camriser" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="camriser" value="0" /><label for="no">&nbsp;No</label>
          </div>
          <div class="form-group">
            <label>Will there be any powerpoints or other on-screen AV?</label><br>
            <input id="yes" type="radio" name="powerpoint" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="powerpoint" value="0" /><label for="no">&nbsp;No</label>
          </div>
          <div class="form-group">
            <label>Are there any intellectual property/copyright issues regarding unrestricted (unlimited) rebroadcast (in perpetuity) on all platforms?</label><br>
            <input id="yes" type="radio" name="copyright" value="1" /><label for="yes">&nbsp;Yes</label>
            <input id="no" type="radio" name="copyright" value="0" /><label for="no">&nbsp;No</label>
          </div>
      		<br>
      		<input type="submit" value="Submit" id="submit" class="btn btn-lg btn-primary" />
      	</form>
        <br>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
