﻿<section id="price-calculator">
	<div class="price-calculator-section" level='0'>
		<h3>Tip imobil</h3>
		<label>
			<input type="radio" name="construction_type" value="house" data-ref-id="house-options"/>
			<span class="radio-label">Apartament</span>
		</label>
		<label>
			<input type="radio" name="construction_type" value="villas" data-ref-id="villas-options"/>
			<span class="radio-label">Case / vile peste 120 mp</span>
		</label>
		<label>
			<input type="radio" name="construction_type" value="office" data-ref-id="office-options"/>
			<span class="radio-label">Spațiu comercial / birou</span>
		</label>
	</div>

	<div id="house-options" class="price-calculator-section hideable" level='1'>
		<h3>Tip curățenie</h3>
		<label>
			<input type="radio" name="house_cleaning_type" data-ref-id="house-options-generic" data-key="generic"/>
			<span class="radio-label">Generală</span>
		</label>
		<label>
			<input type="radio" name="house_cleaning_type" data-ref-id="house-options-generic"  data-key="maintenance"/>
			<span class="radio-label">Întreținere</span>
		</label>
		<label>
			<input type="radio" name="house_cleaning_type"  data-ref-id="house-options-generic" data-key="constructor"/>
			<span class="radio-label">După constructor</span>
		</label>
	</div>
	<div id="villas-options" class="price-calculator-section hideable" level='1'>
		<h3>Tip curățenie</h3>
		<label>
			<input type="radio" name="villas_cleaning_type" data-ref-id="villas-options-generic;house-options-generic-room-extra-options;house-options-generic-kitchen-extra-options"/>
			<span class="radio-label">Generală</span>
		</label>
		<label>
			<input type="radio" name="villas_cleaning_type" data-ref-id="villas-options-maintenance;house-options-generic-room-extra-options;house-options-generic-kitchen-extra-options"/>
			<span class="radio-label">Întreținere</span>
		</label>
		<label>
			<input type="radio" name="villas_cleaning_type" data-ref-id="villas-options-constructor;house-options-generic-room-extra-options;house-options-generic-kitchen-extra-options"/>
			<span class="radio-label">După constructor</span>
		</label>
	</div>
	<div id="office-options" class="price-calculator-section hideable" level='1'>
		<h3>Tip curățenie</h3>
		<label>
			<input type="radio" name="office_cleaning_type" data-ref-id="office-options-generic"/>
			<span class="radio-label">Generală</span>
		</label>
		<label>
			<input type="radio" name="office_cleaning_type" data-ref-id="office-options-maintenance"/>
			<span class="radio-label">Întreținere</span>
		</label>
		<label>
			<input type="radio" name="office_cleaning_type" data-ref-id="office-options-constructor"/>
			<span class="radio-label">După constructor</span>
		</label>
	</div>

<!-- ============= House level 2 start ================ -->

	<div id="house-options-generic" class="price-calculator-section areas hideable" level='2'>
		<h3 class="sixteen columns">Spații de curățat</h3>
		<div class="areas-detail four columns">
			<p class="title">Nr. camere:</p>
			<output id="house-options-generic-number-of-rooms-value">0</output>
			<input type="range" id="house-options-generic-number-of-rooms" min='0' max='7' step='1' value='0' 
				data-ref-id="house-options-generic-room-extra-options" data-text-generic="Curățenie camere - generală"
				data-text-maintenance="Curățenie camere - întreținere" data-text-constructor="Curățenie camere - după constructor"
				data-price-per-unit-generic='125' data-price-per-unit-maintenance='75' data-price-per-unit-constructor='150'
				oninput="calculate_total();"/>
		</div>
		<div class="areas-detail four columns">
			<p class="title">Nr. băi:</p>
			<output id="house-options-generic-number-of-bathrooms-value">0</output>
			<input type="range" id="house-options-generic-number-of-bathrooms" min='0' max='4' step='1' value='0'
			data-text-generic="Curățenie baie - generală" data-text-maintenance="Curățenie baie - întreținere" data-text-constructor="Curățenie baie - după constructor"
			data-price-per-unit-generic='150' data-price-per-unit-maintenance='75' data-price-per-unit-constructor='150' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail four columns">
			<p class="title">Nr. bucătării:</p>
			<output id="house-options-generic-number-of-kitchens-value">0</output>
			<input type="range" id="house-options-generic-number-of-kitchens" min='0' max='2' step='1' value='0'
				data-ref-id="house-options-generic-kitchen-extra-options" data-text-generic="Curățenie bucătărie - generală"
				data-text-maintenance="Curățenie bucătărie - întreținere" data-text-constructor="Curățenie bucătărie - după constructor"
				data-price-per-unit-generic='175' data-price-per-unit-maintenance='100' data-price-per-unit-constructor='200'
				oninput="calculate_total();"/>
		</div>
		<div class="areas-detail four columns">
			<p class="title">Nr. balcoane / terase:</p>
			<output id="house-options-generic-number-of-balconies-value">0</output>
			<input type="range" id="house-options-generic-number-of-balconies" min='0' max='3' step='1' value='0' data-text-generic="Curățenie balcon - generală"
			data-text-maintenance="Curățenie balcon - întreținere" data-text-constructor="Curățenie balcon - după constructor"
			data-price-per-unit-generic='50' data-price-per-unit-maintenance='25' data-price-per-unit-constructor='50' oninput="calculate_total();"/>
		</div>
	</div>

<!-- ============= House level 2 end ================ -->

<!-- ============= Villas level 2 start ================ -->
<div id="villas-options-generic" class="price-calculator-section villas hideable" level='2'>
		<h3>Case / vile peste 120 mp - curățenie generală (<span id="villas-generic-price-per-mp" class="unit-price"></span> RON/mp)</h3>
		<output id="villas-generic-mp-value">120 mp</output>
		<input type="range" id="villas-generic-mp" min='120' max='500' step='5' value='120'
			data-text="Case / vile peste 120 mp - curățenie generală" oninput="calculate_total();"/>
	</div>
	
	<div id="villas-options-maintenance" class="price-calculator-section villas hideable" level='2'>
		<h3>Case / vile peste 120 mp - curățenie de întrețínere (<span id="villas-maintanence-price-per-mp" class="unit-price"></span> RON/mp)</h3>
		<output id="villas-maintenance-mp-value">120 mp</output>
		<input type="range" id="villas-maintenance-mp" min='120' max='500' step='5' value='120'
			data-text="Case / vile peste 120 mp - curățenie de întrețínere" oninput="calculate_total();"/>
		
	</div>
	
	<div id="villas-options-constructor" class="price-calculator-section villas hideable" level='2'>
	<h3>Case / vile peste 120 mp - curățenie după constructor (<span id="villas-constructor-price-per-mp" class="unit-price"></span> RON/mp)</h3>
		<output id="villas-constructor-mp-value">120 mp</output>
		<input type="range" id="villas-constructor-mp" min='120' max='500' step='5' value='120'
		data-text="Case / vile peste 120 mp - curățenie după constructor" oninput="calculate_total();"/>
	</div>
<!-- ============= Villas level 2 end ================ -->

<!-- ============= Office level 2 start ================ -->
	<div id="office-options-generic" class="price-calculator-section office hideable" level='2'>
		<h3>Spațíu comercial peste 120 mp - curățenie generală (<span id="office-generic-price-per-mp" class="unit-price"></span> RON/mp)</h3>
		<output id="office-generic-mp-value">120 mp</output>
		<input type="range" id="office-generic-mp" min='120' max='500' step='5' value='120'
			data-text="Spațíu comercial - curățenie generală" oninput="calculate_total();"/>
	</div>
	
	<div id="office-options-maintenance" class="price-calculator-section office hideable" level='2'>
		<h3>Spațíu comercial peste 120 mp - curățenie de întrețínere (<span id="office-maintanence-price-per-mp" class="unit-price"></span> RON/mp)</h3>
		<output id="office-maintenance-mp-value">120 mp</output>
		<input type="range" id="office-maintenance-mp" min='120' max='500' step='5' value='120'
			data-text="Spațíu comercial - curățenie de întrețínere" oninput="calculate_total();"/>
	</div>
	
	<div id="office-options-constructor" class="price-calculator-section office hideable" level='2'>
		<h3>Spațíu comercial peste 120 mp - curățenie după constructor (<span id="office-constructor-price-per-mp" class="unit-price"></span> RON/mp)</h3>
		<output id="office-constructor-mp-value">120 mp</output>
		<input type="range" id="office-constructor-mp" min='120' max='500' step='5' value='120'
			data-text="Spațíu comercial - curățenie după constructor" oninput="calculate_total();"/>
	</div>
<!-- ============= Office level 2 end ================ -->

<!-- ============= House level 3 start ================ -->
	<div id="house-options-generic-room-extra-options" class="price-calculator-section extras hideable" 
		data-text="Servicii extra - living / dormitor" level='3'>
		<h3>Servicii extra - living / dormitor</h3>
		<div class="extra-service-toggle eight columns">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare interior mobilier" data-price-per-unit='60' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare interior mobilier</p>
		</div>
		<div class="extra-service-toggle eight columns">
			<div class="toggle-wrapper">
				<input type="checkbox" data-ref-id="couch-number-of-seats" oninput="calculate_total();"/>
				<label></label>
			</div>
			<div class="title-and-slider">
				<p class="title">Curățare cu injecție/extracție canapea sau scaun (preț estimativ 50 RON / loc)</p>
				<div id="couch-number-of-seats" class="extra-service-detail hideable">
					<label>Nr. locuri:</label>
					<output id="couch-number-of-seats-input-value">0</output>
					<input type="range" id="couch-number-of-seats-input" min='1' max='10' step='1' value='2' data-text="Curățare canapea/scaun"
					data-price-per-unit-generic='50' data-unit-1='loc' data-unit='locuri' oninput="calculate_total();"/>
				</div>
			</div>
		</div>

		<div class="extra-service-toggle eight columns">
			<div class="toggle-wrapper">
				<input type="checkbox" data-ref-id="carpets-number-of-mp" oninput="calculate_total();"/>
				<label></label>
			</div>
			<div class="title-and-slider">
				<p class="title">Curățare mochete / covoare (8 RON / mp)</p>
				<div id="carpets-number-of-mp" class="extra-service-detail hideable">
					<label>Mp:</label>
					<output id="carpets-number-of-mp-input-value">0</output>
					<input type="range" id="carpets-number-of-mp-input" min='1' max='100' step='1' value='5' data-text="Curățare mochete / covoare"
					data-price-per-unit-generic='8' data-unit-1='mp' data-unit='mp' oninput="calculate_total();"/>
				</div>
			</div>
		</div>
	</div>

	<div id="house-options-generic-kitchen-extra-options" class="price-calculator-section extras hideable"
		data-text="Servicii extra - bucătărie" level='3'>
		<h3>Servicii extra - bucătărie</h3>
		
		<div class="extra-service-toggle eight columns">
			<div class="toggle-wrapper">
				<input type="checkbox" data-ref-id="couch-number-of-appliances" data-price-per-unit='50' oninput="calculate_total();"/>
				<label></label>
			</div>
			<div class="title-and-slider">
			<p class="title">Curățare electrocasnice interior - frigider, cuptor microunde etc. (preț estimativ 50 RON / buc.)</p>
				<div id="couch-number-of-appliances" class="extra-service-detail hideable">
					<label>Nr. bucăți:</label>
					<output id="couch-number-of-appliances-input-value">0</output>
					<input type="range" id="couch-number-of-appliances-input" min='1' max='10' step='1' value='1' data-text="Curățare electrocasnice"
					data-price-per-unit-generic='50' data-unit-1='bucată'  data-unit='bucăți' oninput="calculate_total();"/>
				</div>
			</div>
		</div>		
	</div>

	<div id="house-options-maintenance-room-extra-options" class="price-calculator-section extras hideable" 
		data-text="Servicii extra - dormitor" level='3'>
		<h3>Servicii extra - dormitor</h3>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare interior mobilier" data-price-per-unit='60' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare interior mobilier</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare saltea" data-price-per-unit='100' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare saltea</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare scaun tapițat" data-price-per-unit='49' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare scaun tapițat</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare scaun birou" data-price-per-unit='49' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare scaun birou</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare fotoliu" data-price-per-unit='79' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare fotoliu</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare canapea șezlong" data-price-per-unit='99' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare canapea șezlong</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare canapea 2 locuri" data-price-per-unit='139' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare canapea 2 locuri</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare canapea 3 locuri" data-price-per-unit='179' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare canapea 3 locuri</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare colțar / canapea extensibilă până în 5 locuri" data-price-per-unit='219' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare colțar / canapea extensibilă până în 5 locuri</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare canapea în L 6/7 locuri" data-price-per-unit='259' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare canapea în L 6/7 locuri</p>
		</div>
	</div>

	<div id="house-options-maintenance-kitchen-extra-options" class="price-calculator-section extras hideable"
		data-text="Servicii extra - bucătărie" level='3'>
		<h3>Servicii extra - bucătărie</h3>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Spălare vase" data-price-per-unit='25' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Spălare vase</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare frigider interior" data-price-per-unit='50' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare frigider interior</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare hotă" data-price-per-unit='30' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare hotă</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare cuptor microunde interior" data-price-per-unit='30' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare cuptor microunde interior</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare cuptor aragaz interior" data-price-per-unit='50' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare cuptor aragaz interior</p>
		</div>
	</div>

	<div id="house-options-constructor-room-extra-options" class="price-calculator-section extras hideable" 
		data-text="Servicii extra - dormitor" level='3'>
		<h3>Servicii extra - dormitor</h3>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare interior mobilier" data-price-per-unit='60' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare interior mobilier</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare saltea" data-price-per-unit='100' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare saltea</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare scaun tapițat" data-price-per-unit='49' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare scaun tapițat</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare scaun birou" data-price-per-unit='49' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare scaun birou</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare fotoliu" data-price-per-unit='79' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare fotoliu</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare canapea șezlong" data-price-per-unit='99' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare canapea șezlong</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare canapea 2 locuri" data-price-per-unit='139' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare canapea 2 locuri</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare canapea 3 locuri" data-price-per-unit='179' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare canapea 3 locuri</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare colțar / canapea extensibilă până în 5 locuri" data-price-per-unit='219' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare colțar / canapea extensibilă până în 5 locuri</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare canapea în L 6/7 locuri" data-price-per-unit='259' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare canapea în L 6/7 locuri</p>
		</div>
	</div>

	<div id="house-options-constructor-kitchen-extra-options" class="price-calculator-section extras hideable"
		data-text="Servicii extra - bucătărie" level='3'>
		<h3>Servicii extra - bucătărie</h3>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Spălare vase" data-price-per-unit='25' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Spălare vase</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare frigider interior" data-price-per-unit='50' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare frigider interior</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare hotă" data-price-per-unit='30' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare hotă</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare cuptor microunde interior" data-price-per-unit='30' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare cuptor microunde interior</p>
		</div>
		<div class="extra-service-toggle">
			<div class="toggle-wrapper">
				<input type="checkbox" data-text="Curățare cuptor aragaz interior" data-price-per-unit='50' oninput="calculate_total();"/>
				<label></label>
			</div>
			<p class="title">Curățare cuptor aragaz interior</p>
		</div>
	</div>

<!-- ============= House level 3 end ================ -->

	<section id="price-info" class="price-calculator-section">
		<h3>Sumar</h3>
		<div id="summary-lines"></div>
		<div id="summary-total">
			<span class="summary-line-title">Total</span>
			<span class="summary-line-price" id="total-price">0 RON</span>
		</div>
		<div id="voucher-wrapper">
			<input type="text" id="voucher-code" placeholder="Cod discount ..." maxlength="10"/>
			<button class="action-button" onclick="applyVoucher();">Aplică</button>
			<p id="voucher-error"></p>
			<p id="discount-percent"></p>
		</div>
		<p>* Prețurile afișate sunt estimative. Prețul final se va stabili în urma unei verificări detaliate, făcută împreună cu clientul, la adresa locației.</p>
		<div class="button-container">
			<button class="action-button" id="send-calculation" onclick="sendCalculation();">Trimite cererea de ofertă</button>
		</div>
	</section>
</section>
