<?php include('header.php'); ?>

<div class="container">
<div class="row">
  <div id="input" class="col-sm-6">
  <h2>Have a good News & Views!</h2>

  <p>Run the forms below to fill out the Scholars In The News section. Simply copy the HTML output and paste over the entire section HTML in Constant Contact to save yourself time and frustration :)</p>
	<br>

  <form>
    <legend>Add a Fancy Quote</legend>
    <div class="form-group">
      <label for="speaker">Speaker</label>
      <input type="text" id="speaker" class="form-control" />
    </div>
    <div class="form-group">
      <label for="source">Source</label>
      <input type="text" id="source" class="form-control" />
    </div>
    <div class="form-group">
      <label for="url">URL</label>
      <input type="text" id="url" class="form-control" />
    </div>
    <div class="form-group">
    <label for="quote">Quote</label>
    <input type="text" id="quote" class="form-control" />
  </div>
    <br>
    <button id="addQuoteBtn" type="submit" class="btn btn-lg btn-primary">Add Item!</button>
  </form>

  <br>

  <form>
    <legend>Add a Publication Link</legend>
    <div class="form-group">
      <label for="author">Scholar</label>
      <input type="text" id="author" class="form-control" />
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" class="form-control" />
    </div>
    <div class="form-group">
      <label for="outlet">Outlet</label>
      <input type="text" id="outlet" class="form-control" />
    </div>
    <div class="form-group">
      <label for="pubUrl">URL</label>
      <input type="text" id="pubUrl" class="form-control" />
    </div>
    <br>
    <button id="addPublicationBtn" type="submit" class="btn btn-lg btn-primary">Add Item!</button>
  </form>

  <br>

  <form>
    <legend>Add a Feature Box</legend>
    <div class="form-group">
      <label for="featureTitle">Title</label>
      <input type="text" id="featureTitle" class="form-control" />
    </div>
    <div class="form-group">
      <label for="featureText">Box Text</label>
      <textarea type="textarea" id="featureText" class="form-control" >Make it good!</textarea>
    </div>
    <button id="addFeatureBoxBtn" type="submit" class="btn btn-lg btn-primary">Add Item!</button>
  </form>

  <br>
  <br>

  </div> <!-- End of Input pane -->

<div id="output" class="col-sm-6">
	<p id="explainer">HTML will be generated here when you add an item!</p>
  <span id="prefix"></span>
  <ul id='list'>
  </ul>
  <span id="suffix"></span>
</div> <!-- End of Output pane -->


</div> <!-- row -->
</div> <!-- container -->

<script src="assets/js/nvbuilder.js"></script>

<?php include('footer.php'); ?>
