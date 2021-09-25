<!doctype html>

<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Days Left</title>
	<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">  -->
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css">

</head>
<body class="years">
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="script.js"></script>

<div id="wrapper">

<div id="calendar" class="clearfix"></div><!-- #calendar -->

<div id="details">
<p>Hi friend. Each dot up there represents a day in your life, of which we predict there to be <strong><span id="expectancy"></span></strong>. You've spent (squandered?) <strong><span id="daysSpent"></span></strong> of them and you'll probably die in another <strong><span id="daysLeft"></span></strong>. That puts you at about the <strong><span id="percComplete"></span></strong> mark in your journey ;)</p>
<p id="stats">Total: <strong><span id="expectancy2years"></span> years</strong> (<span id="expectancy2days"></span> days) | Spent: <strong><span id="daysSpent2years"></span> years</strong> (<span id="daysSpent2days"></span> days) | Remaining: <strong><span id="daysLeft2years"></span> years</strong> (<span id="daysLeft2days"></span> days) | <a href="https://data.worldbank.org/indicator/SP.DYN.LE00.IN">Data Source →</a></p>
</div><!-- #details -->



<div id="form">
	<span>Birthday </span>
	<select id="month">
		<option value="01">1</option>
		<option value="02">2</option>
		<option value="03">3</option>
		<option value="04">4</option>
		<option value="05">5</option>
		<option value="06">6</option>
		<option value="07">7</option>
		<option value="08">8</option>
		<option value="09">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
	</select>
	<select id="day">
		<option value="01">1</option>
		<option value="02">2</option>
		<option value="03">3</option>
		<option value="04">4</option>
		<option value="05">5</option>
		<option value="06">6</option>
		<option value="07">7</option>
		<option value="08">8</option>
		<option value="09">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>
	<input id="year" type="number" name="year" min="1900" max="2017" value="1980">
	<!-- <span style="margin-left:20px;">Sex Chromosomes </span> -->
	<select id="gender">
		<option value="Female">Female</option>
		<option value="Male">Male</option>
		<option value="Genderless">Combined</option>
	</select>
	<select id="country">
		<option selected="selected" value="United States">United States</option>
		<option value="Coming SOon">More Coming Soon</option> 
		<!-- <option value="Afghanistan">Afghanistan</option> 
		<option value="AFRICA">AFRICA</option> 
		<option value="Albania">Albania</option> 
		<option value="Algeria">Algeria</option> 
		<option value="Angola">Angola</option> 
		<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
		<option value="Arab Rep of Egypt">Arab Rep of Egypt</option> 
		<option value="Argentina">Argentina</option> 
		<option value="Armenia">Armenia</option> 
		<option value="Aruba">Aruba</option> 
		<option value="ASIA">ASIA</option> 
		<option value="Australia">Australia</option> 
		"Australia/New Zealand", 
		<option value="Austria">Austria</option> 
		<option value="Azerbaijan">Azerbaijan</option> 
		<option value="The Bahamas">The Bahamas</option> 
		<option value="Bahrain">Bahrain</option> 
		<option value="Bangladesh">Bangladesh</option> 
		<option value="Barbados">Barbados</option> 
		<option value="Belarus">Belarus</option> 
		<option value="Belgium">Belgium</option> 
		<option value="Belize">Belize</option> 
		<option value="Benin">Benin</option> 
		<option value="Bhutan">Bhutan</option> 
		<option value="Bolivia">Bolivia</option> 
		<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
		<option value="Botswana">Botswana</option> 
		<option value="Brazil">Brazil</option> 
		<option value="Brunei Darussalam">Brunei Darussalam</option> 
		<option value="Bulgaria">Bulgaria</option> 
		<option value="Burkina Faso">Burkina Faso</option> 
		<option value="Burundi">Burundi</option> 
		"Cote-d-Ivoire", 
		<option value="Cabo Verde">Cabo Verde</option> 
		<option value="Cambodia">Cambodia</option> 
		<option value="Cameroon">Cameroon</option> 
		<option value="Canada">Canada</option> 
		<option value="Caribbean">Caribbean</option> 
		<option value="Central African Republic">Central African Republic</option> 
		<option value="Central America">Central America</option> 
		<option value="Central Asia">Central Asia</option> 
		<option value="Chad">Chad</option> 
		<option value="Channel Islands">Channel Islands</option> 
		<option value="Chile">Chile</option> 
		<option value="China">China</option> 
		"Hong Kong SAR-China", 
		<option value="Macao SAR China">Macao SAR China</option> 
		<option value="Colombia">Colombia</option> 
		<option value="Comoros">Comoros</option> 
		<option value="Congo">Congo</option> 
		<option value="Costa Rica">Costa Rica</option> 
		<option value="Croatia">Croatia</option> 
		<option value="Cuba">Cuba</option> 
		<option value="Curacao">Curacao</option> 
		<option value="Cyprus">Cyprus</option> 
		<option value="Czech Republic">Czech Republic</option> 
		<option value="Dem Peoples Rep of Korea">Dem Peoples Rep of Korea</option> 
		<option value="Dem Rep of Congo">Dem Rep of Congo</option> 
		<option value="Denmark">Denmark</option> 
		<option value="Djibouti">Djibouti</option> 
		<option value="Dominican Republic">Dominican Republic</option> 
		<option value="Eastern Africa">Eastern Africa</option> 
		<option value="Eastern Asia">Eastern Asia</option> 
		<option value="Eastern Europe">Eastern Europe</option> 
		<option value="Ecuador">Ecuador</option> 
		<option value="El Salvador">El Salvador</option> 
		<option value="Equatorial Guinea">Equatorial Guinea</option> 
		<option value="Eritrea">Eritrea</option> 
		<option value="Estonia">Estonia</option> 
		<option value="Ethiopia">Ethiopia</option> 
		<option value="EUROPE">EUROPE</option> 
		<option value="Federated States of Micronesia">Federated States of Micronesia</option> 
		<option value="Fiji">Fiji</option> 
		<option value="Finland">Finland</option> 
		<option value="France">France</option> 
		<option value="French Guiana">French Guiana</option> 
		<option value="French Polynesia">French Polynesia</option> 
		<option value="FYR Macedonia">FYR Macedonia</option> 
		<option value="Gabon">Gabon</option> 
		<option value="The Gambia">The Gambia</option> 
		<option value="Georgia">Georgia</option> 
		<option value="Germany">Germany</option> 
		<option value="Ghana">Ghana</option> 
		<option value="Greece">Greece</option> 
		<option value="Grenada">Grenada</option> 
		<option value="Guadeloupe">Guadeloupe</option> 
		<option value="Guam">Guam</option> 
		<option value="Guatemala">Guatemala</option> 
		<option value="Guinea">Guinea</option> 
		"Guinea-Bissau", 
		<option value="Guyana">Guyana</option> 
		<option value="Haiti">Haiti</option> 
		<option value="Honduras">Honduras</option> 
		<option value="Hungary">Hungary</option> 
		<option value="Iceland">Iceland</option> 
		<option value="India">India</option> 
		<option value="Indonesia">Indonesia</option> 
		<option value="Islamic Republic of Iran">Islamic Republic of Iran</option> 
		<option value="Iraq">Iraq</option> 
		<option value="Ireland">Ireland</option> 
		<option value="Israel">Israel</option> 
		<option value="Italy">Italy</option> 
		<option value="Jamaica">Jamaica</option> 
		<option value="Japan">Japan</option> 
		<option value="Jordan">Jordan</option> 
		<option value="Kazakhstan">Kazakhstan</option> 
		<option value="Kenya">Kenya</option> 
		<option value="Kiribati">Kiribati</option> 
		<option value="Kuwait">Kuwait</option> 
		<option value="Kyrgyz Republic">Kyrgyz Republic</option> 
		<option value="Lao PDR">Lao PDR</option> 
		<option value="LATIN AMERICA AND THE CARIBBEAN">LATIN AMERICA AND THE CARIBBEAN</option> 
		<option value="Latvia">Latvia</option> 
		<option value="Least developed countries">Least developed countries</option> 
		<option value="Lebanon">Lebanon</option> 
		<option value="Lesotho">Lesotho</option> 
		<option value="Less developed regions">Less developed regions</option> 
		"Less developed regions, excluding China", 
		"Less developed regions, excluding least developed countries", 
		<option value="Liberia">Liberia</option> 
		<option value="Libya">Libya</option> 
		<option value="Lithuania">Lithuania</option> 
		<option value="Luxembourg">Luxembourg</option> 
		<option value="Madagascar">Madagascar</option> 
		<option value="Malawi">Malawi</option> 
		<option value="Malaysia">Malaysia</option> 
		<option value="Maldives">Maldives</option> 
		<option value="Mali">Mali</option> 
		<option value="Malta">Malta</option> 
		<option value="Martinique">Martinique</option> 
		<option value="Mauritania">Mauritania</option> 
		<option value="Mauritius">Mauritius</option> 
		<option value="Mayotte">Mayotte</option> 
		<option value="Melanesia">Melanesia</option> 
		<option value="Mexico">Mexico</option> 
		<option value="Micronesia">Micronesia</option> 
		<option value="Middle Africa">Middle Africa</option> 
		<option value="Moldova">Moldova</option> 
		<option value="Mongolia">Mongolia</option> 
		<option value="Montenegro">Montenegro</option> 
		<option value="More developed regions">More developed regions</option> 
		<option value="Morocco">Morocco</option> 
		<option value="Mozambique">Mozambique</option> 
		<option value="Myanmar">Myanmar</option> 
		<option value="Namibia">Namibia</option> 
		<option value="Nepal">Nepal</option> 
		<option value="The Netherlands">The Netherlands</option> 
		<option value="New Caledonia">New Caledonia</option> 
		<option value="New Zealand">New Zealand</option> 
		<option value="Nicaragua">Nicaragua</option> 
		<option value="Niger">Niger</option> 
		<option value="Nigeria">Nigeria</option> 
		<option value="Northern Africa">Northern Africa</option> 
		<option value="NORTHERN AMERICA">NORTHERN AMERICA</option> 
		<option value="Northern Europe">Northern Europe</option> 
		<option value="Norway">Norway</option> 
		<option value="OCEANIA">OCEANIA</option> 
		<option value="Oman">Oman</option> 
		"Other non-specified areas", 
		<option value="Pakistan">Pakistan</option> 
		<option value="Panama">Panama</option> 
		<option value="Papua New Guinea">Papua New Guinea</option> 
		<option value="Paraguay">Paraguay</option> 
		<option value="Peru">Peru</option> 
		<option value="Philippines">Philippines</option> 
		<option value="Poland">Poland</option> 
		<option value="Polynesia">Polynesia</option> 
		<option value="Portugal">Portugal</option> 
		<option value="Puerto Rico">Puerto Rico</option> 
		<option value="Qatar">Qatar</option> 
		<option value="Reunion">Reunion</option> 
		"RB-de-Venezuela", 
		<option value="Rep of Korea">Rep of Korea</option> 
		<option value="Rep of Yemen">Rep of Yemen</option> 
		<option value="Romania">Romania</option> 
		<option value="Russian Federation">Russian Federation</option> 
		<option value="Rwanda">Rwanda</option> 
		"St-Lucia", 
		"St-Vincent and the Grenadines", 
		<option value="Samoa">Samoa</option> 
		<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
		<option value="Saudi Arabia">Saudi Arabia</option> 
		<option value="Senegal">Senegal</option> 
		<option value="Serbia">Serbia</option> 
		<option value="Seychelles">Seychelles</option> 
		<option value="Sierra Leone">Sierra Leone</option> 
		<option value="Singapore">Singapore</option> 
		<option value="Slovak Republic">Slovak Republic</option> 
		<option value="Slovenia">Slovenia</option> 
		<option value="Solomon Islands">Solomon Islands</option> 
		<option value="Somalia">Somalia</option> 
		<option value="South Africa">South Africa</option> 
		<option value="South America">South America</option> 
		<option value="South Sudan">South Sudan</option> 
		"South-Central Asia", 
		"South-Eastern Asia", 
		<option value="Southern Africa">Southern Africa</option> 
		<option value="Southern Asia">Southern Asia</option> 
		<option value="Southern Europe">Southern Europe</option> 
		<option value="Spain">Spain</option> 
		<option value="Sri Lanka">Sri Lanka</option> 
		<option value="West Bank and Gaza">West Bank and Gaza</option> 
		"Sub-Saharan Africa", 
		<option value="Sudan">Sudan</option> 
		<option value="Suriname">Suriname</option> 
		<option value="Swaziland">Swaziland</option> 
		<option value="Sweden">Sweden</option> 
		<option value="Switzerland">Switzerland</option> 
		<option value="Syrian Arab Rep">Syrian Arab Rep</option> 
		<option value="Tajikistan">Tajikistan</option> 
		<option value="Tanzania">Tanzania</option> 
		<option value="Thailand">Thailand</option> 
		"Timor-Leste", 
		<option value="Togo">Togo</option> 
		<option value="Tonga">Tonga</option> 
		<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
		<option value="Tunisia">Tunisia</option> 
		<option value="Turkey">Turkey</option> 
		<option value="Turkmenistan">Turkmenistan</option> 
		<option value="Uganda">Uganda</option> 
		<option value="Ukraine">Ukraine</option> 
		<option value="United Arab Emirates">United Arab Emirates</option> 
		<option value="United Kingdom">United Kingdom</option> 
		<option selected="selected" value="United States">United States</option> 
		<option value="US Virgin Islands">US Virgin Islands</option> 
		<option value="Uruguay">Uruguay</option> 
		<option value="Uzbekistan">Uzbekistan</option> 
		<option value="Vanuatu">Vanuatu</option> 
		<option value="Vietnam">Vietnam</option> 
		<option value="Western Africa">Western Africa</option> 
		<option value="Western Asia">Western Asia</option> 
		<option value="Western Europe">Western Europe</option> 
		<option value="Western Sahara">Western Sahara</option> 
		<option value="World">World</option> 
		<option value="Zambia">Zambia</option> 
		"Zimbabwe" -->
	</select>
	<input id="submit" type="submit" value="Do It!" style="margin-left:20px;">
	<!-- <div class="button">Do it!</div> -->
</div><!-- #form -->

</body>
</html>