
/* Prices */
const _stairPricePerMp = 10;
const _officeGenericPricePerMp = 10;
const _officeMaintenancePricePerMp = 8;
const _officeConstructorPricePerMp = 10;

/* Total containers */
const _summaryLines = $('#summary-lines');
const _totalPrice = $('#total-price');

/* HTML Templates */
const _summaryListItem = 
	"<div class='summary-line'>"
	+ "  <span class='summary-line-title'>{{summaryLineTitle}}</span>"
	+ "  <span class='summary-line-price'>{{summaryLinePrice}}</span>"
	+ "</div>";
const _summaryListItemWithIndent = 
	"<div class='summary-line indent'>"
	+ "  <span class='summary-line-title'>{{summaryLineTitle}}</span>"
	+ "  <span class='summary-line-price'>{{summaryLinePrice}}</span>"
	+ "</div>";

$(document).ready(function() {
	//$('#stair-price-per-mp').text(_stairPricePerMp + ' RON/mp');
	$('#office-generic-price-per-mp').text(_officeGenericPricePerMp);
	$('#office-maintanence-price-per-mp').text(_officeMaintenancePricePerMp);
	$('#office-constructor-price-per-mp').text(_officeConstructorPricePerMp);
    $('input[type=radio]').change(function() {
        Handle_radio($(this));
    });
});

function activate_selected_children(container) {
	children = $(container).find("input:checked");
	children.each(function(){
		$(this).trigger("change");
		var refId = $(this).attr("data-ref-id");
		if (typeof refId !== 'undefined') {
			activate_selected_children($('#' + refId));
		}
	});
}

function Handle_radio(option) {
	var level = parseInt($(option).closest('.price-calculator-section').attr('level'));
	$('.price-calculator-section.hideable')
	.filter(function() {
		return parseInt($(this).attr('level')) > level
	})
	.hide();

	var refId = $(option).attr('data-ref-id');
	show_progressive($('#'+refId));
	
	activate_selected_children($('#'+refId));
	calculate_total();
}

function show_progressive(el) {
	$(el).css({
		'opacity': '0',
		'display': 'inline-block'
	}).show().animate({opacity:1}, 1500);
}

function get_areas_price() {
	var totalPrice = 0;
	var visibleRangeInputs = $('.price-calculator-section.areas:visible .areas-detail input[type=range]');
	visibleRangeInputs.each(function(){
		var val = $(this).val();
		$('#' + this.id + '-value').text(val);

		var refId = '#' + $(this).attr('data-ref-id');
		if (val > 0 && $(refId).is(":hidden")) {
			show_progressive($(refId));
		}
		if (val == 0 && $(refId).is(":visible")) {
			$(refId).hide();
		}

		var price = val * $(this).attr('data-price-per-unit');
		if (price > 0) {
			_summaryLines.append(
				_summaryListItem
				.replace('{{summaryLineTitle}}', $(this).attr('data-text'))
				.replace('{{summaryLinePrice}}', price + ' RON'));
		}
		totalPrice += price;
	});

	return totalPrice;
}

function get_extras_price() {
	var totalPrice = 0;
	var visibleExtrasSections = $('.price-calculator-section.extras:visible');
	visibleExtrasSections.each(function() {
		var chosenExtras = $(this).find("input[type=checkbox]:checked");
		if (chosenExtras.length === 0) return;

		var sectionText = $(this).attr("data-text");
		var sectionTotalPrice = 0;
		var sectionLines = "";
		chosenExtras.each(function(c) {
			var price = parseInt($(this).attr("data-price-per-unit"));
			if (price > 0)
			{
				sectionLines += _summaryListItemWithIndent
					.replace('{{summaryLineTitle}}', $(this).attr('data-text'))
					.replace('{{summaryLinePrice}}', price + ' RON');
				sectionTotalPrice += price;
			}
		});

		if (sectionTotalPrice === 0) return;
		totalPrice += sectionTotalPrice;

		_summaryLines.append(
			_summaryListItem
			.replace('{{summaryLineTitle}}', sectionText)
			.replace('{{summaryLinePrice}}', sectionTotalPrice + ' RON'));
		_summaryLines.append(sectionLines);
	});

	return totalPrice;
}

function calculate_house() {
	return get_areas_price() + get_extras_price();
}

function calculate_office() {
	var totalPrice = 0;

	$('.price-calculator-section.office:visible').each(function(){
		var pricePerMp = $(this).find('span.unit-price')[0].innerHTML;
		var input = $(this).find('input[type=range]')[0];
		var val = parseInt(input.value);
		$('#' + input.id + '-value').val(val + ' mp');

		var price = val * pricePerMp;		
		if (price === 0) return;

		totalPrice += price;

		_summaryLines.append(
			_summaryListItem
			.replace('{{summaryLineTitle}}', $(input).attr("data-text"))
			.replace('{{summaryLinePrice}}', price + ' RON'));

	});

	return totalPrice;
}

function calculate_stairs() {
	var numberOfStairs = $('#number-of-stairs').val();
	$('#number-of-stairs-value').val(numberOfStairs);

	var totalPrice = numberOfStairs * _stairPricePerMp + ' RON';

	_summaryLines.empty();
	_summaryLines.append(
		_summaryListItem
		.replace('{{summaryLineTitle}}', 'Scări de bloc')
		.replace('{{summaryLinePrice}}', totalPrice));

	_totalPrice.text(totalPrice);
}

function calculate_total() {
	_summaryLines.empty();
	var totalPrice = 0;

	var constructionType = $('input[type=radio][name="construction_type"]:checked').val();
	
	if (constructionType === "house")
	{
		totalPrice += calculate_house();
	}

	if (constructionType === "office")
	{
		totalPrice += calculate_office();
	}

	// if (constructionType === "stairs")
	// {
	// 	totalPrice += calculate_stairs();
	// }

	_totalPrice.text(totalPrice + ' RON');
}