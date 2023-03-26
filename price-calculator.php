<section id="price-calculator">
	<div class="price-calculator-section" level='0'>
		<h4>Tip construcție</h4>
		<label>
			<input type="radio" name="construction_type" value="house" data-ref-id="house-options"/>
			<span class="radio-label">Apartament / casă</span>
		</label>
		<label>
			<input type="radio" name="construction_type" value="office" data-ref-id="office-options"/>
			<span class="radio-label">Spațiu comercial / birou</span>
		</label>
		<!-- <label>
			<input type="radio" name="construction_type" value="stairs" data-ref-id="stairs-options"/>
			<span class="radio-label">Scări de bloc</span>
		</label> -->
	</div>

	<div id="house-options" class="price-calculator-section hideable" level='1'>
		<h4>Tip curățenie</h4>
		<!-- <p>Apartament / casă</p> -->
		<label>
			<input type="radio" name="house_cleaning_type" data-ref-id="house-options-generic"/>
			<span class="radio-label">Generală</span>
		</label>
		<label>
			<input type="radio" name="house_cleaning_type" data-ref-id="house-options-maintenance"/>
			<span class="radio-label">Întreținere</span>
		</label>
		<label>
			<input type="radio" name="house_cleaning_type"  data-ref-id="house-options-constructor"/>
			<span class="radio-label">După constructor</span>
		</label>
	</div>
	<div id="office-options" class="price-calculator-section hideable" level='1'>
		<h4>Tip curățenie</h4>
		<!-- <p>Spațiu comercial / birou</p> -->
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
	<!-- <div id="stairs-options" class="price-calculator-section hideable" level='1'>
		<h4>Numărul de scări</h4>
		<p id="stair-price-per-mp"></p>
		<input type="range" id="number-of-stairs" min='0' max='100' step='1' value='0'
			oninput="calculate_stairs();"/>
		<output id="number-of-stairs-value">0</output>
	</div> -->

<!-- ============= House level 2 start ================ -->

	<div id="house-options-generic" class="price-calculator-section areas hideable" level='2'>
		<h4>Spații de curățat</h4>
		<div class="areas-detail">
			<p class="title">Nr. camere</p>
			<output id="house-options-generic-number-of-rooms-value">0</output>
			<input type="range" id="house-options-generic-number-of-rooms" min='0' max='10' step='1' value='0' 
				data-ref-id="house-options-generic-room-extra-options" data-text="Curățenie generală camere" data-price-per-unit='125'
				oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. băi</p>
			<output id="house-options-generic-number-of-bathrooms-value">0</output>
			<input type="range" id="house-options-generic-number-of-bathrooms" min='0' max='10' step='1' value='0' 
				data-text="Curățenie generală băi" data-price-per-unit='150' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. bucătării</p>
			<output id="house-options-generic-number-of-kitchens-value">0</output>
			<input type="range" id="house-options-generic-number-of-kitchens" min='0' max='10' step='1' value='0'
				data-ref-id="house-options-generic-kitchen-extra-options" data-text="Curățenie generală bucătării" data-price-per-unit='175'
				oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. balcoane</p>
			<output id="house-options-generic-number-of-balconies-value">0</output>
			<input type="range" id="house-options-generic-number-of-balconies" min='0' max='10' step='1' value='0'
				data-text="Curățenie generală balcoane" data-price-per-unit='50' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. terase</p>
			<output id="house-options-generic-number-of-terraces-value">0</output>
			<input type="range" id="house-options-generic-number-of-terraces" min='0' max='10' step='1' value='0'
				data-text="Curățenie generală terase" data-price-per-unit='75' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. mansarde</p>
			<output id="house-options-generic-number-of-attics-value">0</output>
			<input type="range" id="house-options-generic-number-of-attics" min='0' max='10' step='1' value='0'
				data-text="Curățenie generală terase" data-price-per-unit='75' oninput="calculate_total();"/>
		</div>			
	</div>

	<div id="house-options-maintenance" class="price-calculator-section areas hideable" level='2'>
		<h4>Spații de curățat</h4>
		<div class="areas-detail">
			<p class="title">Nr. camere</p>
			<output id="house-options-maintenance-number-of-rooms-value">0</output>
			<input type="range" id="house-options-maintenance-number-of-rooms" min='0' max='10' step='1' value='0' 
				data-ref-id="house-options-maintenance-room-extra-options" data-text="Curățenie de întrețínere camere" data-price-per-unit='75'
				oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. băi</p>
			<output id="house-options-maintenance-number-of-bathrooms-value">0</output>
			<input type="range" id="house-options-maintenance-number-of-bathrooms" min='0' max='10' step='1' value='0' 
				data-text="Curățenie de întrețínere băi" data-price-per-unit='75' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. bucătării</p>
			<output id="house-options-maintenance-number-of-kitchens-value">0</output>
			<input type="range" id="house-options-maintenance-number-of-kitchens" min='0' max='10' step='1' value='0'
				data-ref-id="house-options-maintenance-kitchen-extra-options" data-text="Curățenie de întrețínere bucătării" data-price-per-unit='100'
				oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. balcoane</p>
			<output id="house-options-maintenance-number-of-balconies-value">0</output>
			<input type="range" id="house-options-maintenance-number-of-balconies" min='0' max='10' step='1' value='0'
				data-text="Curățenie de întrețínere balcoane" data-price-per-unit='25' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. terase</p>
			<output id="house-options-maintenance-number-of-terraces-value">0</output>
			<input type="range" id="house-options-maintenance-number-of-terraces" min='0' max='10' step='1' value='0'
				data-text="Curățenie de întrețínere terase" data-price-per-unit='50' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. mansarde</p>
			<output id="house-options-maintenance-number-of-attics-value">0</output>
			<input type="range" id="house-options-maintenance-number-of-attics" min='0' max='10' step='1' value='0'
				data-text="Curățenie de întrețínere mansarde" data-price-per-unit='50' oninput="calculate_total();"/>
		</div>
	</div>

	<div id="house-options-constructor" class="price-calculator-section areas hideable" level='2'>
		<h4>Spații de curățat</h4>
		<div class="areas-detail">
			<p class="title">Nr. camere</p>
			<output id="house-options-constructor-number-of-rooms-value">0</output>
			<input type="range" id="house-options-constructor-number-of-rooms" min='0' max='10' step='1' value='0' 
				data-ref-id="house-options-constructor-room-extra-options" data-text="Curățenie după constructor camere" data-price-per-unit='150'
				oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. băi</p>
			<output id="house-options-constructor-number-of-bathrooms-value">0</output>
			<input type="range" id="house-options-constructor-number-of-bathrooms" min='0' max='10' step='1' value='0' 
				data-text="Curățenie după constructor băi" data-price-per-unit='150' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. bucătării</p>
			<output id="house-options-constructor-number-of-kitchens-value">0</output>
			<input type="range" id="house-options-constructor-number-of-kitchens" min='0' max='10' step='1' value='0'
				data-ref-id="house-options-constructor-kitchen-extra-options" data-text="Curățenie după constructor bucătării" data-price-per-unit='200'
				oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. balcoane</p>
			<output id="house-options-constructor-number-of-balconies-value">0</output>
			<input type="range" id="house-options-constructor-number-of-balconies" min='0' max='10' step='1' value='0'
				data-text="Curățenie după constructor balcoane" data-price-per-unit='50' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. terase</p>
			<output id="house-options-constructor-number-of-terraces-value">0</output>
			<input type="range" id="house-options-constructor-number-of-terraces" min='0' max='10' step='1' value='0'
				data-text="Curățenie după constructor terase" data-price-per-unit='50' oninput="calculate_total();"/>
		</div>
		<div class="areas-detail">
			<p class="title">Nr. mansarde</p>
			<output id="house-options-constructor-number-of-attics-value">0</output>
			<input type="range" id="house-options-constructor-number-of-attics" min='0' max='10' step='1' value='0'
				data-text="Curățenie după constructor mansarde" data-price-per-unit='50' oninput="calculate_total();"/>
		</div>
	</div>

<!-- ============= House level 2 end ================ -->


<!-- ============= House level 3 start ================ -->
	<div id="house-options-generic-room-extra-options" class="price-calculator-section extras hideable" 
		data-text="Servicii extra - dormitor" level='3'>
		<h4>Servicii extra - dormitor</h4>
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

	<div id="house-options-generic-kitchen-extra-options" class="price-calculator-section extras hideable"
		data-text="Servicii extra - bucătărie" level='3'>
		<h4>Servicii extra - bucătărie</h4>
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

	<div id="house-options-maintenance-room-extra-options" class="price-calculator-section extras hideable" 
		data-text="Servicii extra - dormitor" level='3'>
		<h4>Servicii extra - dormitor</h4>
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
		<h4>Servicii extra - bucătărie</h4>
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
		<h4>Servicii extra - dormitor</h4>
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
		<h4>Servicii extra - bucătărie</h4>
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

<!-- ============= Office level 2 start ================ -->
	<div id="office-options-generic" class="price-calculator-section office hideable" level='2'>
		<h4>Spațíu comercial peste 120 mp - curățenie generală</h4>
		<p><span id="office-generic-price-per-mp" class="unit-price"></span> RON/mp</p>
		<input type="range" id="office-generic-mp" min='120' max='500' step='5' value='120'
			data-text="Spațíu comercial - curățenie generală" oninput="calculate_total();"/>
		<output id="office-generic-mp-value">120</output>
	</div>
	
	<div id="office-options-maintenance" class="price-calculator-section office hideable" level='2'>
		<h4>Spațíu comercial peste 120 mp - curățenie de întrețínere</h4>
		<p><span id="office-maintanence-price-per-mp" class="unit-price"></span> RON/mp</p>
		<input type="range" id="office-maintenance-mp" min='120' max='500' step='5' value='120'
			data-text="Spațíu comercial - curățenie de întrețínere" oninput="calculate_total();"/>
		<output id="office-maintenance-mp-value">120</output>
	</div>
	
	<div id="office-options-constructor" class="price-calculator-section office hideable" level='2'>
		<h4>Spațíu comercial peste 120 mp - curățenie după constructor</h4>
		<p><span id="office-constructor-price-per-mp" class="unit-price"></span> RON/mp</p>
		<input type="range" id="office-constructor-mp" min='120' max='500' step='5' value='120'
		data-text="Spațíu comercial - curățenie după constructor" oninput="calculate_total();"/>
		<output id="office-constructor-mp-value">120</output>
	</div>
<!-- ============= Office level 2 end ================ -->


	<section id="price-info" class="price-calculator-section">
		<h4>Sumar</h4>
		<div id="summary-lines"></div>
		<div id="summary-total">
			<span class="summary-line-title">Total</span>
			<span class="summary-line-price" id="total-price">0 RON</span>
		</div>
		<p>* Prețurile afișate sunt estimative. Prețul final se va stabili în urma unei verificări detaliate, făcută împreună cu clientul, la adresa locației.</p>
		<div class="button-container">
			<button class="action-button" id="send-calculation" onclick="sendCalculation();">Trimite cererea de ofertă</button>
		</div>
	</section>
</section>
