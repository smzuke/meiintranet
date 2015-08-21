<?php include('header.php'); ?>

<div id="leaveanote" class="page container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">

      <h1  class="page-header" id="note-header">Leave a Note!</h1>

      <div id="container">

      <!-- ADD NOTE SECTION -->

      <section id="addNote">
      	<form id="noteContent">
          <div class="form-group">
            <label>What's your name?</label>
            <input type="text" name="author" class="form-control" id="authorField"/>
          </div>
          <div class="form-group">
            <label>Write your note:</label>
            <textarea name="noteText" id="noteText" class="form-control"></textarea>
          </div>
      		<div class="form-group">
            <input type="radio" name="color" value="#FFFFCC" checked="checked" />&nbsp;Yellow
            <input type="radio" name="color" value="#FFCCCC" />&nbsp;Red
            <input type="radio" name="color" value="#E0F0FF" />&nbsp;Blue
            <input type="radio" name="color" value="url('assets/img/pattern.png') 50% repeat" />&nbsp;Wacky
          </div>
      		<button id="addNoteButton" class="btn btn-lg btn-primary">Post Note</button>
      	</form>
      </section> <!-- END OF ADD NOTE SECTION -->

      <!-- NOTE SECTION -->
      <section id="noteArea" class="hidden">
      	<div id="note">
      		<div id="dismiss"><img src="assets/img/close.png" style="width:30px;height:30px;" /></div>
      		<div>
      			<p id="noteBody"></p>
      			<p id="author">Your name will go here.</p>
      		</div>
      	</div>
      </section> <!-- END OF NOTE SECTION -->

</div>
</div>
</div>
</div> <!-- End of Container -->

<script src="assets/js/leaveanote.js"></script>

<?php include('footer.php'); ?>
