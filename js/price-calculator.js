
/* Prices */
const _stairPricePerMp = 10;
const _villasGenericPricePerMp = 10;
const _villasMaintenancePricePerMp = 8;
const _villasConstructorPricePerMp = 10;
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
	$('#villas-generic-price-per-mp').text(_villasGenericPricePerMp);
	$('#villas-maintanence-price-per-mp').text(_villasMaintenancePricePerMp);
	$('#villas-constructor-price-per-mp').text(_villasConstructorPricePerMp);
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

	$(option).attr('data-ref-id').split(';').forEach(function(refId){
		show_progressive($('#'+refId));

		var key = $(option).attr("data-key");
		if (typeof key !== 'undefined') {
			$('#'+refId).attr('data-key', key);
		}
		
		activate_selected_children($('#'+refId));
	});
	
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
	var visiblePriceCalculatorSection = $('.price-calculator-section.areas:visible')[0];
	var visibleRangeInputs = $(visiblePriceCalculatorSection).find('.areas-detail input[type=range]');

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

		var key = $(visiblePriceCalculatorSection).attr('data-key');
		var price = val * $(this).attr('data-price-per-unit-' + key);
		if (price > 0) {
			_summaryLines.append(
				_summaryListItem
				.replace('{{summaryLineTitle}}', $(this).attr('data-text-' + key))
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
		var extras = $(this).find("input[type=checkbox]");
		if (extras.length === 0) return;
		
		var sectionText = $(this).attr("data-text");
		var sectionTotalPrice = 0;
		var sectionLines = "";
		extras.each(function() {
			var refId = '#' + $(this).attr("data-ref-id");
			var checked = $(this).is(":checked");
			if (refId !== '#undefined') {
				if (!checked){
					if ($(refId).is(":visible")) {
						$(refId).hide();
					}
					return true;
				}

				if ($(refId).is(":hidden")) {
					show_progressive($(refId));
				}
				var inputChild = $(refId).children("input")[0];
				var val = parseInt(inputChild.value);
				$('#' + inputChild.id + '-value').val(val);
				
				var pricePerUnit = parseInt($(inputChild).attr('data-price-per-unit-generic'));
				var price = val * pricePerUnit;
				var dataUnitAttr = 'data-unit';
				if (val === 1) dataUnitAttr += '-1';

				if (price > 0){
					var text = $(inputChild).attr('data-text') + ' - ' + val + ' ' + $(inputChild).attr(dataUnitAttr) + ' * ' + pricePerUnit + ' RON';
					sectionLines += _summaryListItemWithIndent
						.replace('{{summaryLineTitle}}', text)
						.replace('{{summaryLinePrice}}', price + ' RON');
					sectionTotalPrice += price;	
				}

				return true;
			}

			if (!checked) return true;
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

function calculate_mp_based_area(type) {
	var totalPrice = 0;

	$('.price-calculator-section.' + type + ':visible').each(function(){
		var pricePerMp = $(this).find('span.unit-price')[0].innerHTML;
		var input = $(this).find('input[type=range]')[0];
		var val = parseInt(input.value);
		$('#' + input.id + '-value').val(val + ' mp');

		var price = val * pricePerMp;		
		if (price === 0) return;

		totalPrice += price;
		totalPrice += get_extras_price();

		_summaryLines.append(
			_summaryListItem
			.replace('{{summaryLineTitle}}', $(input).attr("data-text") + ' ' + val + ' mp')
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

function get_discount(totalPrice) {
	var percent = parseInt($('#discount-percent').attr('data-percent')) || 0;
	if (percent === 0) return 0;
	var discount = totalPrice * percent / 100;

	_summaryLines.append(
		_summaryListItem
		.replace('{{summaryLineTitle}}', 'Discount ' + $('#discount-percent').attr('data-code') + ' - ' + percent + ' %')
		.replace('{{summaryLinePrice}}', '- ' + discount + ' RON'));
	
	return discount;
}

function calculate_total() {
	_summaryLines.empty();
	var totalPrice = 0;
	var constructionType = $('input[type=radio][name="construction_type"]:checked').val();
	
	if (constructionType === "house")
	{
		totalPrice += calculate_house();
	}

	if (constructionType === "office" || constructionType === "villas")
	{
		totalPrice += calculate_mp_based_area(constructionType);
	}

	// if (constructionType === "stairs")
	// { 
	// 	totalPrice += calculate_stairs();
	// }

	totalPrice -= get_discount(totalPrice);

	_totalPrice.text(totalPrice + ' RON');
}

function sendCalculation() {
	var message = "Bună ziua,\n\nV-am fi foarte recunoscători dacă ați putea să ne furnizați mai multe detalii despre cotația următoarelor servicii\n\n";
	$('#summary-lines').children('.summary-line').each(function() {
		if ($(this).hasClass('indent')){
			message += '  ';
		}

		var title = $(this).children('.summary-line-title')[0].innerHTML;
		var price = $(this).children('.summary-line-price')[0].innerHTML;
		message += title + ' = ' + price + '\n';
	});

	var totalPrice = $('#summary-total').children('.summary-line-price')[0].innerHTML;
	message += 'TOTAL - ' + totalPrice;

	message += "\n\nAșteptăm cu nerăbdare un răspuns de la dvs. Mulţumim anticipat!"

	$('#message').text(message);
	$('#message').height($('#message').prop("scrollHeight"));

	$('html, body').animate({
        scrollTop: $("#contact-section").offset().top
    }, 1500);
}

function onlyLettersAndNumbers(str) {
	return /^[A-Za-z0-9]*$/.test(str);
}

function applyVoucher() {
	var voucherCode = $('#voucher-code').val();
	if(!voucherCode) return;

	$('#voucher-error').hide();

	$.ajax({
		type: "POST",
		dataType: "json",
		url: 'discount.php',
		data: {'discountCode': $('#voucher-code').val()},
		timeout: 6000,
		error: function(request,error) {
			$('#voucher-error').text('Eroare!');
			$('#voucher-error').fadeIn(1000);
		},
		success: function(data) {

			var status = data['status'];
			var message = data['message'];

			if(status === true){
				$('#discount-percent').attr('data-code', voucherCode);
				$('#discount-percent').attr('data-percent', message);
				$('#voucher-wrapper').hide();
				calculate_total();
			} else {
				$('#voucher-error').text(message);
				$('#voucher-error').fadeIn(1000);
			}			
		}
	});
}