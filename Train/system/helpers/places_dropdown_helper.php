<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Drop-down Menu for places
 *
 * @access	public
 * @param	string
 * @param	array
 * @param	string
 * @param	string
 * @return	string
 */
//Checks for 'state_dropdown' function
if ( ! function_exists('state_dropdown'))
{
	function state_dropdown($selected = array(), $extra = '')
	{
	//Array of US states and territories
	$us_states = array(
						'AL'	=>	'Alabama',
						'AK'	=>	'Alaska',
						'AS'	=>	'American Samoa',
						'AZ'	=>	'Arizona',
						'AR'	=>	'Arkansas',
						'AE'	=>	'Armed Forces - Europe',
						'AP'	=>	'Armed Forces - Pacific',
						'AA'	=>	'Armed Forces - USA/Canada',
						'CA'	=>	'California',
						'CO'	=>	'Colorado',
						'CT'	=>	'Connecticut',
						'DE'	=>	'Delaware',
						'DC'	=>	'District of Columbia',
						'FL'	=>	'Florida',
						'GA'	=>	'Georgia',
						'GU'	=>	'Guam',
						'HI'	=>	'Hawaii',
						'ID'	=>	'Idaho',
						'IL'	=>	'Illinois',
						'IN'	=>	'Indiana',
						'IA'	=>	'Iowa',
						'KS'	=>	'Kansas',
						'KY'	=>	'Kentucky',
						'LA'	=>	'Louisiana',
						'ME'	=>	'Maine',
						'MD'	=>	'Maryland',
						'MA'	=>	'Massachusetts',
						'MI'	=>	'Michigan',
						'MN'	=>	'Minnesota',
						'MS'	=>	'Mississippi',
						'MO'	=>	'Missouri',
						'MT'	=>	'Montana',
						'NE'	=>	'Nebraska',
						'NV'	=>	'Nevada',
						'NH'	=>	'New Hampshire',
						'NJ'	=>	'New Jersey',
						'NM'	=>	'New Mexico',
						'NY'	=>	'New York',
						'NC'	=>	'North Carolina',
						'ND'	=>	'North Dakota',
						'OH'	=>	'Ohio',
						'OK'	=>	'Oklahoma',
						'OR'	=>	'Oregon',
						'PA'	=>	'Pennsylvania',
						'PR'	=>	'Puerto Rico',
						'RI'	=>	'Rhode Island',
						'SC'	=>	'South Carolina',
						'SD'	=>	'South Dakota',
						'TN'	=>	'Tennessee',
						'TX'	=>	'Texas',
						'UT'	=>	'Utah',
						'VT'	=>	'Vermont',
						'VI'	=>	'Virgin Islands',
						'VA'	=>	'Virginia',
						'WA'	=>	'Washington',
						'WV'	=>	'West Virginia',
						'WI'	=>	'Wisconsin',
						'WY'	=>	'Wyoming'
						);
						
		if ( ! is_array($selected))
		{
			$selected = array($selected);
		}

		// If no selected state was submitted we will attempt to set it automatically
		if (count($selected) === 0)
		{
			// If the form name appears in the $_POST array we have a winner!
			if (isset($_POST['state']))
			{
				$selected = array($_POST['state']);
			}
		}

		if ($extra != '') $extra = ' '.$extra;

		$multiple = (count($selected) > 1 && strpos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

		$form = '<select name="state"'.$extra.$multiple.">\n";

		foreach ($us_states as $key => $val)
		{
			$key = (string) $key;

			if (is_array($val) && ! empty($val))
			{
				$form .= '<optgroup label="'.$key.'">'."\n";

				foreach ($val as $optgroup_key => $optgroup_val)
				{
					$sel = (in_array($optgroup_key, $selected)) ? ' selected="selected"' : '';

					$form .= '<option value="'.$optgroup_key.'"'.$sel.'>'.(string) $optgroup_val."</option>\n";
				}

				$form .= '</optgroup>'."\n";
			}
			else
			{
				$sel = (in_array($key, $selected)) ? ' selected="selected"' : '';

				$form .= '<option value="'.$key.'"'.$sel.'>'.(string) $val."</option>\n";
			}
		}

		$form .= '</select>';

		return $form;
	}
}

//------------------------------------------------------------------------------------------------------------------------------------

//Checks for 'country_dropdown' function
if ( ! function_exists('country_dropdown'))
{
	function country_dropdown($selected = array(), $extra = '')
	{
                //Array of the countries of the world
		$country_list = array(
						'US'	=>	'United States',
						'AF'	=>	'Afghanistan',
						'AL'	=>	'Albania',
						'DZ'	=>	'Algeria',
						'AS'	=>	'American Samoa',
						'AD'	=>	'Andorra',
						'AO'	=>	'Angola',
						'AI'	=>	'Anguilla',
						'AQ'	=>	'Antarctica',
						'AG'	=>	'Antigua And Barbuda',
						'AR'	=>	'Argentina',
						'AM'	=>	'Armenia',
						'AW'	=>	'Aruba',
						'AU'	=>	'Australia',
						'AT'	=>	'Austria',
						'AZ'	=>	'Azerbaijan',
						'BS'	=>	'Bahamas',
						'BH'	=>	'Bahrain',
						'BD'	=>	'Bangladesh',
						'BB'	=>	'Barbados',
						'BY'	=>	'Belarus',
						'BE'	=>	'Belgium',
						'BZ'	=>	'Belize',
						'BJ'	=>	'Benin',
						'BM'	=>	'Bermuda',
						'BT'	=>	'Bhutan',
						'BO'	=>	'Bolivia',
						'BA'	=>	'Bosnia And Herzegowina',
						'BW'	=>	'Botswana',
						'BV'	=>	'Bouvet Island',
						'BR'	=>	'Brazil',
						'IO'	=>	'British Indian Ocean Territory',
						'BN'	=>	'Brunei Darussalam',
						'BG'	=>	'Bulgaria',
						'BF'	=>	'Burkina Faso',
						'BI'	=>	'Burundi',
						'KH'	=>	'Cambodia',
						'CM'	=>	'Cameroon',
						'CA'	=>	'Canada',
						'CV'	=>	'Cape Verde',
						'KY'	=>	'Cayman Islands',
						'CF'	=>	'Central African Republic',
						'TD'	=>	'Chad',
						'CL'	=>	'Chile',
						'CN'	=>	'China',
						'CX'	=>	'Christmas Island',
						'CC'	=>	'Cocos (Keeling) Islands',
						'CO'	=>	'Colombia',
						'KM'	=>	'Comoros',
						'CG'	=>	'Congo',
						'CD'	=>	'Congo, The Democratic Republic Of The',
						'CK'	=>	'Cook Islands',
						'CR'	=>	'Costa Rica',
						'CI'	=>	'Cote D\'Ivoire',
						'HR'	=>	'Croatia (Local Name: Hrvatska)',
						'CU'	=>	'Cuba',
						'CY'	=>	'Cyprus',
						'CZ'	=>	'Czech Republic',
						'DK'	=>	'Denmark',
						'DJ'	=>	'Djibouti',
						'DM'	=>	'Dominica',
						'DO'	=>	'Dominican Republic',
						'TP'	=>	'East Timor',
						'EC'	=>	'Ecuador',
						'EG'	=>	'Egypt',
						'SV'	=>	'El Salvador',
						'GQ'	=>	'Equatorial Guinea',
						'ER'	=>	'Eritrea',
						'EE'	=>	'Estonia',
						'ET'	=>	'Ethiopia',
						'FK'	=>	'Falkland Islands (Malvinas)',
						'FO'	=>	'Faroe Islands',
						'FJ'	=>	'Fiji',
						'FI'	=>	'Finland',
						'FR'	=>	'France',
						'FX'	=>	'France, Metropolitan',
						'GF'	=>	'French Guiana',
						'PF'	=>	'French Polynesia',
						'TF'	=>	'French Southern Territories',
						'GA'	=>	'Gabon',
						'GM'	=>	'Gambia',
						'GE'	=>	'Georgia',
						'DE'	=>	'Germany',
						'GH'	=>	'Ghana',
						'GI'	=>	'Gibraltar',
						'GR'	=>	'Greece',
						'GL'	=>	'Greenland',
						'GD'	=>	'Grenada',
						'GP'	=>	'Guadeloupe',
						'GU'	=>	'Guam',
						'GT'	=>	'Guatemala',
						'GN'	=>	'Guinea',
						'GW'	=>	'Guinea-Bissau',
						'GY'	=>	'Guyana',
						'HT'	=>	'Haiti',
						'HM'	=>	'Heard And Mc Donald Islands',
						'HN'	=>	'Honduras',
						'HK'	=>	'Hong Kong',
						'HU'	=>	'Hungary',
						'IS'	=>	'Iceland',
						'IN'	=>	'India',
						'ID'	=>	'Indonesia',
						'IR'	=>	'Iran (Islamic Republic Of)',
						'IQ'	=>	'Iraq',
						'IE'	=>	'Ireland',
						'IL'	=>	'Israel',
						'IT'	=>	'Italy',
						'JM'	=>	'Jamaica',
						'JP'	=>	'Japan',
						'JO'	=>	'Jordan',
						'KZ'	=>	'Kazakhstan',
						'KE'	=>	'Kenya',
						'KI'	=>	'Kiribati',
						'KP'	=>	'Korea, Democratic People\'S Republic Of',
						'KR'	=>	'Korea, Republic Of',
						'KW'	=>	'Kuwait',
						'KG'	=>	'Kyrgyzstan',
						'LA'	=>	'Lao People\'S Democratic Republic',
						'LV'	=>	'Latvia',
						'LB'	=>	'Lebanon',
						'LS'	=>	'Lesotho',
						'LR'	=>	'Liberia',
						'LY'	=>	'Libyan Arab Jamahiriya',
						'LI'	=>	'Liechtenstein',
						'LT'	=>	'Lithuania',
						'LU'	=>	'Luxembourg',
						'MO'	=>	'Macau',
						'MK'	=>	'Macedonia, Former Yugoslav Republic Of',
						'MG'	=>	'Madagascar',
						'MW'	=>	'Malawi',
						'MY'	=>	'Malaysia',
						'MV'	=>	'Maldives',
						'ML'	=>	'Mali',
						'MT'	=>	'Malta',
						'MH'	=>	'Marshall Islands, Republic of the',
						'MQ'	=>	'Martinique',
						'MR'	=>	'Mauritania',
						'MU'	=>	'Mauritius',
						'YT'	=>	'Mayotte',
						'MX'	=>	'Mexico',
						'FM'	=>	'Micronesia, Federated States Of',
						'MD'	=>	'Moldova, Republic Of',
						'MC'	=>	'Monaco',
						'MN'	=>	'Mongolia',
						'MS'	=>	'Montserrat',
						'MA'	=>	'Morocco',
						'MZ'	=>	'Mozambique',
						'MM'	=>	'Myanmar',
						'NA'	=>	'Namibia',
						'NR'	=>	'Nauru',
						'NP'	=>	'Nepal',
						'NL'	=>	'Netherlands',
						'AN'	=>	'Netherlands Antilles',
						'NC'	=>	'New Caledonia',
						'NZ'	=>	'New Zealand',
						'NI'	=>	'Nicaragua',
						'NE'	=>	'Niger',
						'NG'	=>	'Nigeria',
						'NU'	=>	'Niue',
						'NF'	=>	'Norfolk Island',
						'MP'	=>	'Northern Mariana Islands, Commonwealth of the',
						'NO'	=>	'Norway',
						'OM'	=>	'Oman',
						'PK'	=>	'Pakistan',
						'PW'	=>	'Palau, Republic of',
						'PA'	=>	'Panama',
						'PG'	=>	'Papua New Guinea',
						'PY'	=>	'Paraguay',
						'PE'	=>	'Peru',
						'PH'	=>	'Philippines',
						'PN'	=>	'Pitcairn',
						'PL'	=>	'Poland',
						'PT'	=>	'Portugal',
						'PR'	=>	'Puerto Rico',
						'QA'	=>	'Qatar',
						'RE'	=>	'Reunion',
						'RO'	=>	'Romania',
						'RU'	=>	'Russian Federation',
						'RW'	=>	'Rwanda',
						'KN'	=>	'Saint Kitts And Nevis',
						'LC'	=>	'Saint Lucia',
						'VC'	=>	'Saint Vincent And The Grenadines',
						'WS'	=>	'Samoa',
						'SM'	=>	'San Marino',
						'ST'	=>	'Sao Tome And Principe',
						'SA'	=>	'Saudi Arabia',
						'SN'	=>	'Senegal',
						'SC'	=>	'Seychelles',
						'SL'	=>	'Sierra Leone',
						'SG'	=>	'Singapore',
						'SK'	=>	'Slovakia (Slovak Republic)',
						'SI'	=>	'Slovenia',
						'SB'	=>	'Solomon Islands',
						'SO'	=>	'Somalia',
						'ZA'	=>	'South Africa',
						'GS'	=>	'South Georgia, South Sandwich Islands',
						'ES'	=>	'Spain',
						'LK'	=>	'Sri Lanka',
						'SH'	=>	'St. Helena',
						'PM'	=>	'St. Pierre And Miquelon',
						'SD'	=>	'Sudan',
						'SR'	=>	'Suriname',
						'SJ'	=>	'Svalbard And Jan Mayen Islands',
						'SZ'	=>	'Swaziland',
						'SE'	=>	'Sweden',
						'CH'	=>	'Switzerland',
						'SY'	=>	'Syrian Arab Republic',
						'TW'	=>	'Taiwan',
						'TJ'	=>	'Tajikistan',
						'TZ'	=>	'Tanzania, United Republic Of',
						'TH'	=>	'Thailand',
						'TG'	=>	'Togo',
						'TK'	=>	'Tokelau',
						'TO'	=>	'Tonga',
						'TT'	=>	'Trinidad And Tobago',
						'TN'	=>	'Tunisia',
						'TR'	=>	'Turkey',
						'TM'	=>	'Turkmenistan',
						'TC'	=>	'Turks And Caicos Islands',
						'TV'	=>	'Tuvalu',
						'UG'	=>	'Uganda',
						'UA'	=>	'Ukraine',
						'AE'	=>	'United Arab Emirates',
						'GB'	=>	'United Kingdom',
						'UM'	=>	'United States Minor Outlying Islands',
						'UY'	=>	'Uruguay',
						'UZ'	=>	'Uzbekistan',
						'VU'	=>	'Vanuatu',
						'VA'	=>	'Vatican City, State of the',
						'VE'	=>	'Venezuela',
						'VN'	=>	'Viet Nam',
						'VG'	=>	'Virgin Islands (British)',
						'VI'	=>	'Virgin Islands (U.S.)',
						'WF'	=>	'Wallis And Futuna Islands',
						'EH'	=>	'Western Sahara',
						'YE'	=>	'Yemen',
						'YU'	=>	'Yugoslavia',
						'ZM'	=>	'Zambia',
						'ZW'	=>	'Zimbabwe'
						);
						
		if ( ! is_array($selected))
		{
			$selected = array($selected);
		}

		// If no selected country was submitted we will attempt to set it automatically
		if (count($selected) === 0)
		{
			// If the form name appears in the $_POST array we have a winner!
			if (isset($_POST['country']))
			{
				$selected = array($_POST['country']);
			}
		}

		if ($extra != '') $extra = ' '.$extra;

		$multiple = (count($selected) > 1 && strpos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

		$form = '<select name="country"'.$extra.$multiple.">\n";

		foreach ($country_list as $key => $val)
		{
			$key = (string) $key;

			if (is_array($val) && ! empty($val))
			{
				$form .= '<optgroup label="'.$key.'">'."\n";

				foreach ($val as $optgroup_key => $optgroup_val)
				{
					$sel = (in_array($optgroup_key, $selected)) ? ' selected="selected"' : '';

					$form .= '<option value="'.$optgroup_key.'"'.$sel.'>'.(string) $optgroup_val."</option>\n";
				}

				$form .= '</optgroup>'."\n";
			}
			else
			{
				$sel = (in_array($key, $selected)) ? ' selected="selected"' : '';

				$form .= '<option value="'.$key.'"'.$sel.'>'.(string) $val."</option>\n";
			}
		}

		$form .= '</select>';

		return $form;
	}
}

//-----------------------------------------------------------------------------------------------------------

//Checks for 'canadian_provinces_dropdown' function
if ( ! function_exists('canadian_provinces_dropdown'))
{
	function canadian_provinces_dropdown($selected = array(), $extra = '')
	{
                //Array of Canadian Provinces
		$canadian_provinces = array(
						'AB'	=>	'Alberta',
						'BC'	=>	'British Columbia',
						'MB'	=>	'Manitoba',
						'NB'	=>	'New Brunswick',
						'NF'	=>	'Newfoundland and Labrador',
						'NT'	=>	'Northwest Territories',
						'NS'	=>	'Nova Scotia',
						'NU'	=>	'Nunavut',
						'ON'	=>	'Ontario',
						'PE'	=>	'Prince Edward Island',
						'QC'	=>	'Quebec',
						'SK'	=>	'Saskatchewan',
						'YT'	=>	'Yukon Territory'
						);
						
		if ( ! is_array($selected))
		{
			$selected = array($selected);
		}

		// If no selected province was submitted we will attempt to set it automatically
		if (count($selected) === 0)
		{
			// If the form name appears in the $_POST array we have a winner!
			if (isset($_POST['canadian_provinces']))
			{
				$selected = array($_POST['canadian_provinces']);
			}
		}

		if ($extra != '') $extra = ' '.$extra;

		$multiple = (count($selected) > 1 && strpos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

		$form = '<select name="canadian_provinces"'.$extra.$multiple.">\n";

		foreach ($canadian_provinces as $key => $val)
		{
			$key = (string) $key;

			if (is_array($val) && ! empty($val))
			{
				$form .= '<optgroup label="'.$key.'">'."\n";

				foreach ($val as $optgroup_key => $optgroup_val)
				{
					$sel = (in_array($optgroup_key, $selected)) ? ' selected="selected"' : '';

					$form .= '<option value="'.$optgroup_key.'"'.$sel.'>'.(string) $optgroup_val."</option>\n";
				}

				$form .= '</optgroup>'."\n";
			}
			else
			{
				$sel = (in_array($key, $selected)) ? ' selected="selected"' : '';

				$form .= '<option value="'.$key.'"'.$sel.'>'.(string) $val."</option>\n";
			}
		}

		$form .= '</select>';

		return $form;
	}
}

//-------------------------------------------------------------------------------------------------------------------------------------

//Checks for 'aussie_states_dropdown' function				
if ( ! function_exists('aussie_states_dropdown'))
{
	function aussie_states_dropdown($selected = array(), $extra = '')
	{
                //Array of Aussie states
		$aussie_states = array(
						'AAT' => 'Australian Antarctic Territory',
						'ACT' =>	'Australian Capital Territory',
						'JBT'	=>	'Jervis Bay Territory',
						'NSW'	=>	'New South Wales',
						'NT'	=>	'Northern Territory',
						'QLD'	=>	'Queensland',
						'SA'	=>	'South Australia',
						'TAS'	=>	'Tasmania',
						'VIC'	=>	'Victoria',
						'WA'	=>	'Western Australia'
						);
						
		if ( ! is_array($selected))
		{
			$selected = array($selected);
		}

		// If no selected state was submitted we will attempt to set it automatically
		if (count($selected) === 0)
		{
			// If the form name appears in the $_POST array we have a winner!
			if (isset($_POST['aussie_states']))
			{
				$selected = array($_POST['aussie_states']);
			}
		}

		if ($extra != '') $extra = ' '.$extra;

		$multiple = (count($selected) > 1 && strpos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

		$form = '<select name="aussie_states"'.$extra.$multiple.">\n";

		foreach ($aussie_states as $key => $val)
		{
			$key = (string) $key;

			if (is_array($val) && ! empty($val))
			{
				$form .= '<optgroup label="'.$key.'">'."\n";

				foreach ($val as $optgroup_key => $optgroup_val)
				{
					$sel = (in_array($optgroup_key, $selected)) ? ' selected="selected"' : '';

					$form .= '<option value="'.$optgroup_key.'"'.$sel.'>'.(string) $optgroup_val."</option>\n";
				}

				$form .= '</optgroup>'."\n";
			}
			else
			{
				$sel = (in_array($key, $selected)) ? ' selected="selected"' : '';

				$form .= '<option value="'.$key.'"'.$sel.'>'.(string) $val."</option>\n";
			}
		}

		$form .= '</select>';

		return $form;
	}
}

//=================================================================================================================================
//---------------End of places_dropdown_helper-------------------------------------------------------------------------------------
?>