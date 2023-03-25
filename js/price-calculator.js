
//$('input[name="genderS"]:checked').val();

/* Prices */
const _pricePerStairMp = 50;

/* Total containers */
const _summaryLines = $('#summary-lines');
const _totalPrice = $('#total-price');

/* HTML Templates */
const _summaryListItem = 
	"<div class='summary-line'>"
	+ "  <span class='summary-line-title'>{{summaryLineTitle}}</span>"
	+ "  <span class='summary-line-price'>{{summaryLinePrice}}</span>"
	+ "</div>";

$(document).ready(function() {
	$('#stair-price-per-mp').text(_pricePerStairMp + ' lei/mp');
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

	handle_total();
}

function handle_stairs() {
	var numberOfStairs = $('#number-of-stairs').val();
	$('#number-of-stairs-value').val(numberOfStairs);

	var totalPrice = numberOfStairs * _pricePerStairMp;

	_totalPrice.text(totalPrice);
}

function handle_total() {
	var constructionType = $('input[type=radio][name="construction_type"]').val();
	
	if (constructionType==="stairs")
	{
		handle_stairs();
	}
}