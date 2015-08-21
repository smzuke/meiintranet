<?php include('header.php'); ?>

<div class="page container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <h1>Check it out, it's your e-mail!</h1>
      <p>Perfect for copying and pasting into Gmail</p>
      <hr>

<p><strong><?php echo $_POST["title"];?></strong></p>

<p>
  <?php
    echo $_POST["day"] . ", " . $_POST["date"] . "<br>";
    echo $_POST["startTime"] . " - " . $_POST["endTime"] . "<br>";
  ?>
</p>
<p>
  <?php
    echo $_POST["venueName"] . "<br>";
    echo $_POST["address"];
  ?>
</p>

<p><strong>What to expect/What could be newsworthy:</strong></p>

<?php
  echo "<p>Presentations and moderated discussion will begin at " . $_POST["startTime"] . ". The last 30 minutes will be reserved for audience Q&A, which will end at " . $_POST["endTime"] . ".</p>";
  echo "<p>" . $_POST["subject"] . "</p>";
  echo "<p>" . $_POST["newsworthy"] . "</p>";
?>

<p><strong>Logistics:</strong></p>

<?php
  $openEarly = 0;
  $hasMultbox = 0;
  $multicam = 0;
  $hasPower = 0;
  $bringLights = 0;
  $ownMics = 0;
  $speakerRiser = 0;
  $cameraRiser = 0;
  $powerpoint = 0;
  $copyright = 0;

  echo "<p>The event will be held in " . $_POST["roomName"];
  if ($_POST["accessNotes"]) {
    echo " (" . $_POST["accessNotes"] . ")";
  }
  echo ". ";
  echo "Crews ";
  if ($_POST["openEarly"]) {
    $openEarly = "are";
  }
    else {
      $openEarly = "are <strong><u>not</strong></u>";
    };
  echo $openEarly;
  echo " able to access the room two hours in advance.";
  echo "</p>";

  echo "<p>The room ";
  if ($_POST["multbox"]) {
    $hasMultbox = "has";
  }
    else {
      $hasMultbox = "does not have";
    };
  echo $hasMultbox;
  echo " a multbox. ";
  if ($_POST["multicam"]) {
      $multicam = "You may bring a second camera. ";
  }
    else {
      $multicam = "Space is limited, so we ask that you only bring one camera. ";
    }
  echo $multicam;
  if ($_POST["power"]) {
    $hasPower = "Power outlets are readily available. ";
  }
    else {
      $hasPower = "You may want to bring an extension cord to ensure access to power. ";
    }
  echo $hasPower;
  echo "</p>";

  echo "<p>You ";
  if ($_POST["bringLights"]) {
    $bringLights = "are advised to ";
  }
    else {
      $bringLights = "do not need to ";
    }
  echo $bringLights . "bring additional lighting. ";
  if ($_POST["mics"]) {
    $ownMics = "You may do your own mic'ing if needed. ";
  }
    else {
      $ownMics = "The venue does not allow crews to do separate mic'ing. ";
    }
  echo $ownMics;
  echo "</p>";

  echo "<p>It's about " . $_POST["roomDepth"] . " feet from the front of the room to where the cameras will be. ";
  echo "The speakers will be " . $_POST["arrangement"] . ". They ";
  if ($_POST["speakerriser"]) {
    $speakerRiser = "will";
  }
    else {
      $speakerRiser = "will not";
    }
  echo $speakerRiser . " be on a riser. ";
  if ($_POST["camriser"]) {
    $cameraRiser = "There will be a press riser in the back.";
  }
    else {
        $cameraRiser = "The venue does not allow for press risers.";
    }
  echo $cameraRiser;
  echo "</p>";

  echo "<p>We ";
  if ($_POST["powerpoint"]) {
    $powerpoint = "are";
  }
    else {
      $powerpoint = "are not";
    }
  echo $powerpoint . " expecting the speakers to use a powerpoint or other AV materials. ";
  if ($_POST["powerpoint"]) {
    echo "We'll work with them to get you a copy. ";
  }
  echo "There ";
  if ($_POST["copyright"]) {
    $copyright = "are some copyright restrictions we should discuss. ";
  }
    else {
      $copyright = "are no copyright restrictions to worry about. ";
    }
  echo $copyright;
  echo "</p>";
?>

<p><strong>Points of Contact:</strong></p>

<?php

  echo "<p>" . $_POST["meiPOCname"] . "<br>";
  echo "The Middle East Institute </br>";
  echo $_POST["meiPOCemail"] . "<br>";
  echo $_POST["meiPOCphone"] . "</p>";

  echo "<p>" . $_POST["venuePOCname"] . "<br>";
  echo $_POST["venueName"] . "<br>";
  echo $_POST["venuePOCemail"] . "<br>";
  echo $_POST["venuePOCphone"] . "</p>";

?>

</div>
</div>
</div>

<?php include('footer.php'); ?>
