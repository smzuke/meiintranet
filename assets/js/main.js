$(document).ready(function(){

  // Cache the window object
  var $window = $(window);

  // Parallax background effect
  $('section[data-type="background"]').each(function(){
    var $bgobj = $(this); // assigning the object
    $(window).scroll(function(){
      // scroll the background at var speed
      // the yPos is negative value because we're scrolling it up
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));
      //put together our final background position
      var coords = '50%' + yPos + 'px';
      // Move the background
      $bgobj.css({ backgroundPosition: coords});
    }); // end window scroll
  });

  // Set the current page as active in the navigation menu
  var path = window.location.pathname;
  if (path == '/resources.php') {
    $('#resources-btn').addClass('active');
  }
  if (path == '/index.php') {
    $('#home-btn').addClass('active');
  }
  if (path == '/interns.php') {
    $('#interns-btn').addClass('active');
  }
  if (path == '/tutorials.php') {
    $('#tutorials-btn').addClass('active');
  }
  

});
