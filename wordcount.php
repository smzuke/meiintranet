<?php include('header.php'); ?>

<div id="wordcount" class="page container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">

      <h1>A Quick, Simple Word Count</h1>

      <form method="POST" name="wordcount">

      <div class="form-group">
        <textarea name="wordcount2" class="form-control" rows="8"></textarea>
      </div>
        <button id="wordcount-btn" type="submit" value="Calculate Words" class="btn btn-lg btn-primary">Count the Words!</button>
        <br><br>
      <div class="form-group">
        <input type="text" class="outputField" name="wordcount3">
      </div>
      </form>

    </div>
  </div>
</div>

<script src="assets/js/wordcount.js"></script>

<?php include('footer.php'); ?>
