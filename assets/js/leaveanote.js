$(document).ready(function(){

$('#noteContent').submit(function(e){
	var author = $('#authorField').val();
	var noteText = $('#noteText').val();
	var color = $('input[name="color"]:checked').val();

	$('#addNote').slideUp('fast');

	$('#note-header').text('Someone left you a note!').css('text-align','center');
	$('#noteBody').text(noteText);
	$('#author').text('- '+author);
	$('#note').css('background', color).css('cursor','grab').draggable();
	$('#noteArea').removeClass('hidden').fadeIn('slow');
	return false;
});

$('#dismiss').on('click',function(){
	$('#noteArea').fadeOut('slow');
	$('#note-header').text('Leave a Note!').css('text-align','left');
	$('#expandForm').hide();
	$('#addNote').slideDown('fast');
});

$('#expandForm').on('click',function(){
	$('#addNote').slideDown('fast');
	$(this).hide();
});

});
