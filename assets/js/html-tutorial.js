$(document).ready(function(){

  //Number the slides
  var slides = $('#slides>section');
  console.log (slides);
  var slidesLength = slides.length;
  console.log (slidesLength);
  for (i=0; i < slidesLength; i++){
    $(this).attr('id',i);
  }

  //Advance slide
  $('#next-btn').on('click', function(){
    var $active = $('.active');
    if($active.is(':last-child')){
      $active.removeClass('active').addClass('hidden');
      alert('You made it to the end!');
      $('#slides').children().first().addClass('active').removeClass('hidden');
      updateCurrentSlide();
      return false;
    } else {
    var $next = $active.next();
    $active.removeClass('active').addClass('hidden');
    $next.addClass('active').removeClass('hidden');
    updateCurrentSlide();
    return false;
  }
  });

  //Previous slide
  $('#prev-btn').on('click', function(){
    var $active = $('.active');
    if($active.is(':first-child')){
      $active.removeClass('active').addClass('hidden');
      $('#slides').children().last().addClass('active').removeClass('hidden');
      updateCurrentSlide();
      return false;
    } else {
    var $next = $active.prev();
    $active.removeClass('active').addClass('hidden');
    $next.addClass('active').removeClass('hidden');
    updateCurrentSlide();
    return false;
  }
  });

  //get ID of current slide
  function updateCurrentSlide(){
  var active = $('.active').attr('id');
  $('#active-slide').text(active);
  }
});
