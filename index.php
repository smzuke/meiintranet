<?php
	include('header.php');
?>

<!-- ===========================
			QUICK LINKS SECTION
================================ -->

<section id="quicklinks">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h1 class="section-title">Quick Links</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 centered">
				<h2><a href="https://mail.google.com" class="quicklink"><i class="fa fa-envelope-o"></i><br>Gmail</a></h2>
				<p>You've Got Mail!</p>
			</div>
			<div class="col-sm-3 centered">
				<h2><a href="staff.php" class="quicklink"><i class="fa fa-phone"></i><br>Staff</a></h2>
				<p>Phone Directory</p>
			</div>
			<div class="col-sm-3 centered">
				<h2><a href="https://resource-secure.adp.com/ts/login.do" class="quicklink"><i class="fa fa-user"></i><br>ADP</a></h2>
				<p>Timecard Due?</p>
			</div>
			<div class="col-sm-3 centered">
				<h2><a href="#" class="quicklink" data-toggle="modal" data-target="#cameraModal"><i class="fa fa-video-camera"></i><br>Cameras</a></h2>
				<p>Peek Outside</p>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- quicklinks section -->

<!-- ===========================
			REFERENCES SECTION
================================ -->

<section id="references">
	<div class="container">
		<div class="row">
			<div class="reference-text col-md-4">
				<h1 class="section-title">References</h1>
					<div class="reference-container">
						<i class="fa fa-users"></i>
						<h2><a href="scholars.php">Scholars</a></h2>
						<p>Contact information for Middle East Institute experts.</p>
					</div>
					<div class="reference-container">
						<i class="fa fa-font"></i>
						<h2><a href="https://docs.google.com/a/mei.edu/document/d/1bHM5gj0NyEjsHU7LoAJ8a8_nZsI750I2uIA6tphNS_Y/edit?usp=sharing">Style Guide</a></h2>
						<p>Information about MEI's official branding guidelines.</p>
					</div>
					<div class="reference-container">
						<i class="fa fa-paint-brush"></i>
						<h2><a href="https://docs.google.com/document/d/1Ehyts4WZ8lwxoGM9ryYLCG4hXtce3lw1KLCVD1yTMtg/edit?usp=sharing">Color Chart</a></h2>
						<p>Color codes and values for MEI's website and print materials.</p>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- ===========================
			STATISTICS SECTION
================================ -->

<section id="statistics">
				<h1 class="section-title">Statistics</h1>
				<div class="stats-container">
					<i class="fa fa-twitter twitter"></i>
					<h2 class="twitter">42,000+</h2>
					<p>Twitter Followers</p>
				</div>
				<div class="stats-container">
					<i class="fa fa-facebook-official fb"></i>
					<h2 class="fb">10,700+</h2>
					<p>Facebook Likes</p>
				</div>
				<div class="stats-container">
					<i class="fa fa-youtube yt"></i>
					<h2 class="yt">1,600+</h2>
					<p>YouTube Subscribers</p>
				</div>
				<div class="stats-container">
					<i class="fa fa-line-chart analytics"></i>
					<h2 class="analytics">20,000+</h2>
					<p>Weekly Pageviews</p>
				</div>
</section>

<!-- Modal -->
<div class="modal fade" id="cameraModal" tabindex="-1" role="dialog" aria-labelledby="Choose Camera">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Select Camera</h4>
      </div>
      <div class="modal-body">
        <?php include('config/security-cameras.php'); ?>
		<div class="clearfix"></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>-->
    </div>
  </div>
</div>

<?php
	include('footer.php');
?>
