<?php
$user_country_code = $_SERVER["HTTP_CF_IPCOUNTRY"]; 

// North America (2 CloudFlare Data Centres, 2 Locations)
if ($user_country_code == "US"){echo 'Connected via United States of America';} else 
if ($user_country_code == "CA"){echo 'Connected via Toronto, Ontario, Canada';} else 

// Europe (11 CloudFalre Data Centres, 21 locations)
if ($user_country_code == "NL"){echo 'Connected via Amsterdam, Netherlands';} else 
if ($user_country_code == "DE"){echo 'Connected via Frankfurt, Germany';} else 
if ($user_country_code == "ES"){echo 'Connected via Madrid, Spain';} else 
if ($user_country_code == "SE"){echo 'Connected via Stockholm, Sweden';} else 
if ($user_country_code == "IT"){echo 'Connected via Milan, Italy';} else
if ($user_country_code == "GB"){echo 'Connected via London, England';} else
if ($user_country_code == "AL"){echo 'Connected via London, England';} else
if ($user_country_code == "RO"){echo 'Connected via London, England';} else
if ($user_country_code == "FR"){echo 'Connected via Paris, France';} else
if ($user_country_code == "AT"){echo 'Connected via Vienna, Austria';} else
if ($user_country_code == "PL"){echo 'Connected via Warsaw, Poland';} else
if ($user_country_code == "TR"){echo 'Connected via London, England';} else
if ($user_country_code == "CZ"){echo 'Connected via Prague, Czech Republic';} else
if ($user_country_code == "DD"){echo 'Connected via Düsseldorf, Germany';} else
if ($user_country_code == "UA"){echo 'Connected via Frankfurt, Germany';} else
if ($user_country_code == "FI"){echo 'Connected via Stockholm, Sweden';} else 
if ($user_country_code == "BA"){echo 'Connected via Frankfurt, Germany';} else 
if ($user_country_code == "BE"){echo 'Connected via Amsterdam, Netherlands';} else
if ($user_country_code == "EE"){echo 'Connected via Stockholm, Sweden';} else 
if ($user_country_code == "HU"){echo 'Connected via Prague, Czech Republic';} else
if ($user_country_code == "IS"){echo 'Connected via Amsterdam, Netherlands';} else 


// Asia (4 CloudFlare Data Centres, 9 Locations)
if ($user_country_code == "JP"){echo 'Connected via Tokyo, Japan';} else
if ($user_country_code == "KR"){echo 'Connected via Seoul, South Korea';} else
if ($user_country_code == "HK"){echo 'Connected via Hong Kong, Hong Kong';} else
if ($user_country_code == "SG"){echo 'Connected via Singapore, Singapo';} else
if ($user_country_code == "PK"){echo 'Connected via Singapore, Singapo';} else
if ($user_country_code == "IN"){echo 'Connected via Hong Kong, Hong Kong';} else
if ($user_country_code == "AE"){echo 'Connected via Singapore, Singapo';} else
if ($user_country_code == "SA"){echo 'Connected via Frankfurt, Germany';} else
if ($user_country_code == "LK"){echo 'Connected via Singapore, Singapo';} else

// South America (5 CloudFlare Data Centres, 5 locations)
if ($user_country_code == "CL"){echo 'Connected via Valparaíso, Chile';} else
if ($user_country_code == "BR"){echo 'Connected via São Paulo, Brazil';} else
if ($user_country_code == "CO"){echo 'Connected via Medellín, Colombia';} else
if ($user_country_code == "PE"){echo 'Connected via Lima, Peru';} else
if ($user_country_code == "RA"){echo 'Connected via Buenos Aires, Argentin';} else

// Oceania (2 CloudFlare Data Centres, 2 locations)
if ($user_country_code == "NZ"){echo 'Connected via Auckland, New Zealand';} else
if ($user_country_code == "AU"){echo 'Connected via Sydney, New South Wales, Australia';} else

// Africa (1 CloudFlare Data Centres, 1 location)
if ($user_country_code == "ZA"){echo 'Connected via Johannesburg, South Africa';} else

// Input random CloudFlare locations, when the client refreshes the page
$randomcflocation = array(
        1 => "Connected via Oxygen's Ass",
        2 => "Connected via World War III",
        3 => "Connected via Hitler's Dad",
        4 => "Connected via Kekko/Zero's Brain",
);

$random = rand(1, count($randomcflocation));
$rcfl = $randomcflocation[$random];

echo $rcfl;
?>
