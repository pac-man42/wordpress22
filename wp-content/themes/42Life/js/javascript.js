
  $(document).ready(function(){
    $("#sticker").sticky({topSpacing:0});
  

  $(".more").on('click', function(){

	$(this).parent().children(".description").animate({height: '600'}, 2000);
	if ($(this).parent().hasClass("show"))
		$(this).children(".more");
	else $(this).children(".more");
});

});