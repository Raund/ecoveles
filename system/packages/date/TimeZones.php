<?php
	class TimeZones {
		public static function getTimeZone($id, $dst) {
			$zd = self::getTimeZoneData($id);
			return new CTimeZone($id, $zd["offset"], $zd["hasdst"], $zd["longname"], $zd["shortname"], $dst);
		}
		
		public static function getTimeZoneData($id) {
			if (isset (self::$zones[$id]))
				return self::$zones[$id];
			else
				return self::$zones[2];
		}
		
		public function getUtcTimeZone($dst = 0) {
			return self::getTimeZone(2, $dst);
		}
		
		
	static $zones = array(
'39' => array(
				'offset' => -43200000,
				'longname' => "Eniwetok, Kwajalein",
				'shortname' => '(GMT-12:00)',
				'hasdst' => false ),
'16' => array(
				'offset' => -39600000,
				'longname' => "Midway Island, Samoa",
				'shortname' => '(GMT-11:00)',
				'hasdst' => false ),

'15' => array(
				'offset' => -36000000,
				'longname' => "Hawaii",
				'shortname' => '(GMT-10:00)',
				'hasdst' => false ),

'14' => array(
				'offset' => -32400000,
				'longname' => "Alaska",
				'shortname' => '(GMT-09:00)',
				'hasdst' => true,
				'dstlongname' => "Alaska Daylight Time",
				'dstshortname' => 'AKDT' ),

'13' => array(
				'offset' => -28800000,
				'longname' => "Pacific Time (US and Canada); Tijuana",
				'shortname' => '(GMT-08:00)',
				'hasdst' => true,
				'dstlongname' => "Pacific Daylight Time",
				'dstshortname' => 'PDT' ),

'38' => array(
				'offset' => -25200000,
				'longname' => "Arizona",
				'shortname' => '(GMT-07:00)',
				'hasdst' => false ),

'12' => array(
				'offset' => -25200000,
				'longname' => "Mountain Time (US and Canada)",
				'shortname' => '(GMT-07:00)',
				'hasdst' => true,
				'dstlongname' => "Mountain Daylight Time",
				'dstshortname' => 'MDT' ),

'55' => array(
				'offset' => -21600000,
				'longname' => "Central America",
				'shortname' => '(GMT-06:00)',
				'hasdst' => false ),

'11' => array(
				'offset' => -21600000,
				'longname' => 'Central Time (US and Canada)',
			        'shortname' => '(GMT-06:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Central Time (US and Canada)',
			        'dstshortname' => 'DST (GMT-06:00)'),
'37' => array(
				'offset' => -21600000,
				'longname' => 'Mexico City',
			        'shortname' => '(GMT-06:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Mexico City',
			        'dstshortname' => 'DST (GMT-06:00)' ),
'36' => array(
				'offset' => -21600000,
				'longname' => 'Saskatchewan',
			        'shortname' => '(GMT-06:00)',
			        'hasdst' => false ),

'35' => array(
				'offset' => -18000000,
				'longname' => 'Bogota, Lima, Quito',
			        'shortname' => '(GMT-05:00)',
			        'hasdst' => false ),
'10' => array(
				'offset' => -18000000,
				'longname' => 'Eastern Time (US and Canada)',
			        'shortname' => '(GMT-05:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Eastern Time (US and Canada)',
			        'dstshortname' => 'DST (GMT-05:00)'),
'34' => array(
				'offset' => -18000000,
				'longname' => 'Indiana (East)',
			        'shortname' => '(GMT-05:00)',
			        'hasdst' => false ),
'9' => array(
				'offset' => '-14400000',
				'longname' => 'Atlantic Time (Canada)',
			        'shortname' => '(GMT-04:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Atlantic Time (Canada)',
			        'dstshortname' => 'DST (GMT-04:00)'),
'33' => array(
				'offset' => '-14400000',
				'longname' => 'Caracas, La Paz',
			        'shortname' => '(GMT-04:00)',
			        'hasdst' => false ),
'65' => array(
				'offset' => '-14400000',
				'longname' => 'Santiago',
			        'shortname' => '(GMT-04:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Santiago',
			        'dstshortname' => 'DST (GMT-04:00)'),
'28' => array(
				'offset' => '-12600000',
				'longname' => 'Newfoundland',
			        'shortname' => '(GMT-03:30)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Newfoundland',
			        'dstshortname' => 'DST (GMT-03:30)'),
'8' => array(
				'offset' => '-10800000',
				'longname' => 'Brasilia',
			        'shortname' => '(GMT-03:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Brasilia',
			        'dstshortname' => 'DST (GMT-03:00)'),
'32' => array(
				'offset' => '-10800000',
				'longname' => 'Buenos Aires, Georgetown',
			        'shortname' => '(GMT-03:00)',
			        'hasdst' => false ),
'60' => array(
				'offset' => '-10800000',
				'longname' => 'Greenland',
			        'shortname' => '(GMT-03:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Greenland',
			        'dstshortname' => 'DST (GMT-03:00)'),
'30' => array(
				'offset' => '-7200000',
				'longname' => 'Mid-Atlantic',
			        'shortname' => '(GMT-02:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Mid-Atlantic',
			        'dstshortname' => 'DST (GMT-02:00)'),
'29' => array(
				'offset' => '-3600000',
				'longname' => 'Azores',
			        'shortname' => '(GMT-01:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Azores',
			        'dstshortname' => 'DST (GMT-01:00)'),
'53' => array(
				'offset' => '-3600000',
				'longname' => 'Cape Verde Is.',
			        'shortname' => '(GMT-01:00)',
			        'hasdst' => false ),
'31' => array(
				'offset' => '-3600000',
				'longname' => 'Casablanca, Monrovia',
			        'shortname' => '(GMT)',
			        'hasdst' => false ),

'2' => array(
				'offset' => '-3600000',
				'longname' => 'Dublin, Edinburgh, Lisbon, London',
		        'shortname' => '(GMT)',
		        'hasdst' => true ),

'6' => array(
				'offset' => '3600000',
				'longname' => 'Belgrade, Bratislava, Budapest, Ljubljana, Prague',
			        'shortname' => '(GMT+01:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Belgrade, Bratislava, Budapest, Ljubljana, Prague',
			        'dstshortname' => 'DST (GMT+01:00)'),
'3' => array(
				'offset' => '3600000',
				'longname' => 'Brussels, Copenhagen, Madrid, Paris',
			        'shortname' => '(GMT+01:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Brussels, Copenhagen, Madrid, Paris',
			        'dstshortname' => 'DST (GMT+01:00)'),
'57' => array(
				'offset' => '3600000',
				'longname' => 'Sarajevo, Skopje, Sofija, Vilnius, Warsaw, Zagreb',
			        'shortname' => '(GMT+01:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Sarajevo, Skopje, Sofija, Vilnius, Warsaw, Zagreb',
			        'dstshortname' => 'DST (GMT+01:00)'),
'69' => array(
				'offset' => '3600000',
				'longname' => 'West Central Africa',
			        'shortname' => '(GMT+01:00)',
			        'hasdst' => false ),
'7' => array(
				'offset' => '7200000',
				'longname' => 'Athens, Istanbul, Minsk',
			        'shortname' => '(GMT+02:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Athens, Istanbul, Minsk',
			        'dstshortname' => 'DST (GMT+02:00)'),
'5' => array(
				'offset' => '7200000',
				'longname' => 'Bucharest',
			        'shortname' => '(GMT+02:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Bucharest',
			        'dstshortname' => 'DST (GMT+02:00)'),
'49' => array(
				'offset' => '7200000',
				'longname' => 'Cairo',
			        'shortname' => '(GMT+02:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Cairo',
			        'dstshortname' => 'DST (GMT+02:00)'),
'50' => array(
				'offset' => '7200000',
				'longname' => 'Harare, Pretoria',
			        'shortname' => '(GMT+02:00)',
			        'hasdst' => false ),
'4' => array(
				'offset' => '3600000',
				'longname' => 'Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
			        'shortname' => '(GMT+01:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
			        'dstshortname' => 'DST (GMT+01:00)'),
'59' => array(
				'offset' => '7200000',
				'longname' => 'Helsinki, Riga, Tallinn',
			        'shortname' => '(GMT+02:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Helsinki, Riga, Tallinn',
			        'dstshortname' => 'DST (GMT+02:00)'),
'27' => array(
				'offset' => '7200000',
				'longname' => 'Jerusalem',
			        'shortname' => '(GMT+02:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Jerusalem',
			        'dstshortname' => 'DST (GMT+02:00)'),
'26' => array(
				'offset' => '10800000',
				'longname' => 'Baghdad',
			        'shortname' => '(GMT+03:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Baghdad',
			        'dstshortname' => 'DST (GMT+03:00)'),
'74' => array(
				'offset' => '10800000',
				'longname' => 'Kuwait, Riyadh',
			        'shortname' => '(GMT+03:00)',
			        'hasdst' => false ),
'51' => array(
				'offset' => '10800000',
				'longname' => 'Moscow, St. Petersburg, Volgograd',
			        'shortname' => '(GMT+03:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Moscow, St. Petersburg, Volgograd',
			        'dstshortname' => 'DST (GMT+03:00)'),
'56' => array(
				'offset' => '10800000',
				'longname' => 'Nairobi',
			        'shortname' => '(GMT+03:00)',
			        'hasdst' => false ),
'25' => array(
				'offset' => '12600000',
				'longname' => 'Tehran',
			        'shortname' => '(GMT+03:30)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Tehran',
			        'dstshortname' => 'DST (GMT+03:30)'),
'24' => array(
				'offset' => '14400000',
				'longname' => 'Abu Dhabi, Muscat',
			        'shortname' => '(GMT+04:00)',
			        'hasdst' => false ),

'54' => array(
				'offset' => '14400000',
				'longname' => 'Baku, Tbilisi, Yerevan',
			        'shortname' => '(GMT+04:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Baku, Tbilisi, Yerevan',
			        'dstshortname' => 'DST (GMT+04:00)'),
'48' => array(
				'offset' => '16200000',
				'longname' => 'Kabul',
			        'shortname' => '(GMT+04:30)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Kabul',
			        'dstshortname' => 'DST (GMT+04:30)'),
'58' => array(
				'offset' => '18000000',
				'longname' => 'Ekaterinburg',
			        'shortname' => '(GMT+05:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Ekaterinburg',
			        'dstshortname' => 'DST (GMT+05:00)'),
'47' => array(
				'offset' => '18000000',
				'longname' => 'Islamabad, Karachi, Tashkent',
			        'shortname' => '(GMT+05:00)',
			        'hasdst' => false ),
'23' => array(
				'offset' => '19800000',
				'longname' => 'Calcutta, Chennai, Mumbai, New Delhi',
			        'shortname' => '(GMT+05:30)',
			        'hasdst' => false ),
'62' => array(
				'offset' => '20700000',
				'longname' => 'Kathmandu',
			        'shortname' => '(GMT+05:45)',
			        'hasdst' => false ),
'46' => array(
				'offset' => '21600000',
				'longname' => 'Almaty, Novosibirsk',
			        'shortname' => '(GMT+06:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Almaty, Novosibirsk',
			        'dstshortname' => 'DST (GMT+06:00)'),
'71' => array(
				'offset' => '21600000',
				'longname' => 'Astana, Dhaka',
			        'shortname' => '(GMT+06:00)',
			        'hasdst' => false ),
'66' => array(
				'offset' => '21600000',
				'longname' => 'Sri Jayawardenepura',
			        'shortname' => '(GMT+06:00)',
			        'hasdst' => false ),
'61' => array(
				'offset' => '23400000',
				'longname' => 'Rangoon',
			        'shortname' => '(GMT+06:30)',
			        'hasdst' => false ),
'22' => array(
				'offset' => '25200000',
				'longname' => 'Bangkok, Hanoi, Jakarta',
			        'shortname' => '(GMT+07:00)',
			        'hasdst' => false ),
'64' => array(
				'offset' => '25200000',
				'longname' => 'Krasnoyarsk',
			        'shortname' => '(GMT+07:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Krasnoyarsk',
			        'dstshortname' => 'DST (GMT+07:00)'),
'45' => array(
				'offset' => '28800000',
				'longname' => 'Beijing, Chongqing, Hong Kong, Urumqi',
			        'shortname' => '(GMT+08:00)',
			        'hasdst' => false ),
'63' => array(
				'offset' => '28800000',
				'longname' => 'Irkutsk, Ulaan Bataar',
			        'shortname' => '(GMT+08:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Irkutsk, Ulaan Bataar',
			        'dstshortname' => 'DST (GMT+08:00)'),
'21' => array(
				'offset' => '28800000',
				'longname' => 'Kuala Lumpur, Singapore',
			        'shortname' => '(GMT+08:00)',
			        'hasdst' => false ),
'73' => array(
				'offset' => '28800000',
				'longname' => 'Perth',
			        'shortname' => '(GMT+08:00)',
			        'hasdst' => false ),
'75' => array(
				'offset' => '28800000',
				'longname' => 'Taipei',
			        'shortname' => '(GMT+08:00)',
			        'hasdst' => false ),
'20' => array(
				'offset' => '32400000',
				'longname' => 'Osaka, Sapporo, Tokyo',
			        'shortname' => '(GMT+09:00)',
			        'hasdst' => false ),
'72' => array(
				'offset' => '32400000',
				'longname' => 'Seoul',
			        'shortname' => '(GMT+09:00)',
			        'hasdst' => false ),
'70' => array(
				'offset' => '32400000',
				'longname' => 'Yakutsk',
			        'shortname' => '(GMT+09:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Yakutsk',
			        'dstshortname' => 'DST (GMT+09:00)'),
'19' => array(
				'offset' => '34200000',
				'longname' => 'Adelaide',
			        'shortname' => '(GMT+09:30)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Adelaide',
			        'dstshortname' => 'DST (GMT+09:30)'),
'44' => array(
				'offset' => '34200000',
				'longname' => 'Darwin',
			        'shortname' => '(GMT+09:30)',
			        'hasdst' => false ),
'18' => array(
				'offset' => '36000000',
				'longname' => 'Brisbane',
			        'shortname' => '(GMT+10:00)',
			        'hasdst' => false ),
'76' => array(
				'offset' => '36000000',
				'longname' => 'Canberra, Melbourne, Sydney',
			        'shortname' => '(GMT+10:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Canberra, Melbourne, Sydney',
			        'dstshortname' => 'DST (GMT+10:00)'),
'43' => array(
				'offset' => '36000000',
				'longname' => 'Guam, Port Moresby',
			        'shortname' => '(GMT+10:00)',
			        'hasdst' => false ),
'42' => array(
				'offset' => '36000000',
				'longname' => 'Hobart',
			        'shortname' => '(GMT+10:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Hobart',
			        'dstshortname' => 'DST (GMT+10:00)'),
'68' => array(
				'offset' => '36000000',
				'longname' => 'Vladivostok',
			        'shortname' => '(GMT+10:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Vladivostok',
			        'dstshortname' => 'DST (GMT+10:00)'),
'41' => array(
				'offset' => '39600000',
				'longname' => 'Magadan',
			        'shortname' => '(GMT+11:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Magadan',
			        'dstshortname' => 'DST (GMT+11:00)'),
'41' => array(
				'offset' => '39600000',
				'longname' => 'Solomon Is., New Caledonia',
			        'shortname' => '(GMT+11:00)',
			        'hasdst' => false ),
'17' => array(
				'offset' => '43200000',
				'longname' => 'Auckland, Wellington',
			        'shortname' => '(GMT+12:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Auckland, Wellington',
			        'dstshortname' => 'DST (GMT+12:00)'),
'40' => array(
				'offset' => '43200000',
				'longname' => 'Kamchatka',
			        'shortname' => '(GMT+12:00)',
			        'hasdst' => true,
        			'dstlongname' => 'DST Kamchatka',
			        'dstshortname' => 'DST (GMT+12:00)'),
'40' => array(
				'offset' => '43200000',
				'longname' => 'Fiji, Marshall Is.',
			        'shortname' => '(GMT+12:00)',
			        'hasdst' => false )
	);
	}
?>