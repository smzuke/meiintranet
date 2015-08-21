$('#wordcount-btn').on('click', function(){
  var formcontent=document.wordcount.wordcount2.value;
  formcontent=formcontent.split(" ");
  document.wordcount.wordcount3.value=formcontent.length;
  return false;
});
