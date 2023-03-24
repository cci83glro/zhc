
//$('input[name="genderS"]:checked').val();

$(document).ready(function() {
    $('input[type=radio]').change(function() {
        handle_radio($(this));
    });
});

function handle_radio(option) {
	var level = parseInt($(option).closest('.price-calculator-section').attr('level'));
	$('.price-calculator-section.hideable')
	.filter(function() {
		return parseInt($(this).attr('level')) > level
	})
	.hide();

	var refId = $(option).attr('data-ref-id');
	//$('#'+refId).css('display', 'inline-block');
	$('#'+refId).css({
		'opacity': '0',
		'display': 'inline-block'
	}).show().animate({opacity:1}, 1500);
}