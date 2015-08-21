<?php include('header.php'); ?>


<div class="page container">
  <div class="row">
    <div id="slide-column" class="col-md-10 col-md-offset-1">
      <h1 class="page-header">Tutorials!</h1>

        <div id="slide-area">

          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
              <span id="progress-label">0%</span>
            </div>
          </div>

          <div class="prev-btn">&laquo;</div>
          <div class="next-btn">&raquo;</div>
          <p id="btn-spacer" class="clearfix"></p>

          <!-- ===========================
          			SLIDES
          ================================ -->

          <?php
          $tutorial = $_GET['n'];
          include('assets/tutorials/'.$tutorial.'.php');
          ?>

        <div id="slide-nav-bar">

          <div id="bottom-btns">
            <div class="prev-btn">&laquo;</div>
            <div class="next-btn">&raquo;</div>
            <p id="btn-spacer" class="clearfix"></p>
          </div>

          <p id="slide-counter">Slide <span id="active-slide">1</span> of <span id="total-slides">#</span></p>

        </div>
      </div> <!-- /slide-area -->
    </div> <!-- /col -->
  </div> <!-- /row -->
</div> <!-- /container -->

<script src="assets/js/tutorial.js"></script>

<?php include('footer.php'); ?>
