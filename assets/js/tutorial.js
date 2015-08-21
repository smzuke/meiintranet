$(document).ready(function(){

  //Get the tutorial title from the included file
  $('h1.page-header').text($('#slides').attr('data-tutorial-title'));

  //Number the slides
  var slides = $('#slides>section'); //Create array of all the Sections inslide the Slide div
  var slidesLength = slides.length; //Count the slides
  $('#total-slides').text(slidesLength);
  for (i=0; i < slidesLength; i++){
    $(slides[i]).attr('id',i + 1); //Add a numbered id to each
  }
  $(slides).addClass('hidden').addClass('tutorial-slide');
  $(slides[0]).removeClass('hidden').addClass('active');

  //get ID of current slide
  function updateCurrentSlide(){
    var active = $('.active').attr('id');
    $('#active-slide').text(active);
  }

  //Determine Progress for Progress Bar
  function getProgress(){
    var currentSlide = $('.active').attr('id');
    var progress = ((currentSlide / slidesLength)*100).toFixed(0);
    $('.progress-bar').attr('style','width: '+progress+'%;').attr('aria-valuenow',progress);
    if (progress == 100){
      $('#progress-label').text('Tutorial Complete!');
    } else {
      $('#progress-label').text(progress+'%');
    }
  }

  //Advance slide
  $('.next-btn').on('click', function(){
    var $active = $('.active');
    if($active.is(':last-child')){
      $active.removeClass('active').addClass('hidden');
      $('#slides').children().first().addClass('active').removeClass('hidden');
      updateCurrentSlide();
      getProgress();
      return false;
    } else {
      var $next = $active.next();
      $active.removeClass('active').addClass('hidden');
      $next.addClass('active').removeClass('hidden');
      updateCurrentSlide();
      getProgress();
      return false;
    }
  });

  //Previous slide
  $('.prev-btn').on('click', function(){
    var $active = $('.active');
    if($active.is(':first-child')){
      $active.removeClass('active').addClass('hidden');
      $('#slides').children().last().addClass('active').removeClass('hidden');
      updateCurrentSlide();
      getProgress();
      return false;
    } else {
      var $next = $active.prev();
      $active.removeClass('active').addClass('hidden');
      $next.addClass('active').removeClass('hidden');
      updateCurrentSlide();
      getProgress();
      return false;
    }
  });

  //Add a Dynamic Table of Contents

    if ($('#slides').attr('data-toc').length) { //If user has added a data-toc attribute to the slides div...

      //Add TOC frame
      $('#slides').before('<aside class="toc hidden">'+
                          '<h2>Contents</h2>'+
                          '<ul id="toc-ul">'+
                          '</ul>'+
                          '</aside>');


      //Build the TOC
      var slideTitles = $('section h3:first-child').map(function() {
                 return $(this).text();
              }).get();
      var slideArray = $('#slides section').toArray();
      for(i=0 ; i < slideTitles.length ; i++) {
        $(slideArray[i]).attr('data-id',slideTitles[i]);
        $('#toc-ul').append('<li><a href="#" class="linkToSlide" data-target="'+slideTitles[i]+'">'+slideTitles[i]+'</a></li>');
      }

      //Add Bootstrap column to layout and insert the TOC
      var $sidebar = $('.toc').html();
      $('#slide-column').removeClass('col-md-10').removeClass('col-md-offset-1').addClass('col-md-9');
      $fullSidebar = '<div class="col-md-3 toc">'+$sidebar+'</div>';
      $('#slide-column').after($fullSidebar);
    }

    //Highlight the TOC entry for the active slide
    //Coming soon


  //Jump to a specific slide
  /*
    To add a link to another slide, make sure that the <section> tag of the
    target slide has a data-id attribute, ex. <section data-id="introduction">. Then create a hyperlink with the
    following format: <a href="#" class="linkToSlide" data-target="introduction">Go to Introduction</a>
  */
  $('.linkToSlide').on('click', function(){
    var $active = $('.active'); //Save the current slide
    var $targetId = $(this).attr('data-target'); //save the ID that the link is targetting
    console.log ('I want to go to '+$targetId);
    var $newActive = $('*[data-id="'+$targetId+'"]'); //select the slide with the targeted data-id attribute
    $active.removeClass('active').addClass('hidden');
    $newActive.addClass('active').removeClass('hidden');
    updateCurrentSlide();
    getProgress();
    return false;
  });

  //Startup function calls
  updateCurrentSlide();
  getProgress();

});
