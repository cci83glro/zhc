//Home fit screen	
	/*global $:false */
	$(function(){"use strict";
		$('#home-section').css({'height':($(window).height())+'px'});
		$(window).resize(function(){
		$('#home-section').css({'height':($(window).height())+'px'});
		});
	});

//Navigation	

$('ul.slimmenu').on('click',function(){
var width = $(window).width(); 
if ((width <= 800)){ 
    $(this).slideToggle(); 
}	
});				
$('ul.slimmenu').slimmenu(
{
    resizeWidth: '800',
    collapserTitle: '',
    easingEffect:'easeInOutQuint',
    animSpeed:'medium',
    indentChildren: true,
    childrenIndenter: '&raquo;'
});	
/*global $:false */
$(document).ready(function(){"use strict";
	$(".scroll").click(function(event){

		event.preventDefault();

		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top - 60;

		$('html, body').animate({scrollTop:target_top}, 1200);
	});
});
			
$(document).ready(function () {
	$('.flippy').flippy({
		interval: 4,
		speed: 500,
		stop: false,
		distance: "100px"
	});
});

$(document).ready(function () {
    $('.flipWrapper').click(function () {
        $(this).find('.card').toggleClass('flipped');
        return false;
    });
	$('.open-modal').click(function (event) {
		event.preventDefault();
		$('#' + $(this).attr('data-ref-id')).show();
	});
	$('.close-modal').click(function () {
		$(this).closest('.modal').hide();
	});
});
	