<?php

$results = [];
$tags = [];
$items = [];

$link = [
	'computer-repair.asp',
	'computer-networks.asp',
	'computers-servers.asp',
	'it-support-services.asp',
	'managed-it-services.asp',
	'network-security.asp',
	'remote-access.asp',
	'remote-data-backup-disaster-recovery.asp',
	'digital-video-surveillance.asp',
	'premise-network-wiring.asp',
	'wireless-networking.asp',
	'website-web-design-development.asp',
	'eccomerce-sites-shopping-carts.asp',
	'web-hosting.asp',
	'seo-search-engine-optimization.asp',
	'sem-search-engine-marketing.asp',
	'software-developers-programmers.asp',
	'database-developers-programmers.asp',
	'data-analysis-reports.asp'
];

foreach($link as $url)
{
	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, 'http://www.infoworkz.com/'.$url);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_NOBODY, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$head = curl_exec($curl);

	$index = explode('.', $url)[0];
	array_push($results, [$index => strstr(strstr($head, '<TITLE>', false), '<link rel="stylesheet" type="text/css" href="anylinkcssmenu.css" />', true)]);
}

// extract the results
for($i = 0; $i < count($link); $i++)
{
	$tags = [];
	$index = $link[$i];
	$index = explode('.', $index)[0];
	$title = substr(strstr(strstr($results[$i][$index], '<TITLE>', false), '</TITLE>', true), 7);
	$result = strstr($results[$i][$index], "</TITLE>");

	// make keywords lowercase
	$result = preg_replace_callback("#META#", function($matches){return strtolower($matches[0]);}, $result);
	$result = preg_replace_callback("#NAME#", function($matches){return strtolower($matches[0]);}, $result);
	$result = preg_replace_callback("#CONTENT#", function($matches){return strtolower($matches[0]);}, $result);
	$result = preg_replace_callback("#HTTP-EQUIV#", function($matches){return strtolower($matches[0]);}, $result);

	$result = explode('<meta', $result);
	for($j = 1; $j < count($result); $j++) {
		$tag = $result[$j];
		if(strpos($tag, "name=") !== false)
		{
			$name = strstr(explode('name="', $tag)[1], '"', true);
			$content = strstr(explode('content="', $tag)[1], '"', true);
			array_push($tags, ['page' => $index, 'name' => $name, 'content' => $content]);
		}
	}

	array_push($items, [$title, $tags]);
}

var_dump($items);
// return false;

// write the data
$myfile = fopen("results.txt", "w") or die("Unable to open file!");
foreach($items as $item)
{
	$txt = "\n\n<title>".$item[0]."</title>\n\n";
	fwrite($myfile, $txt);
	foreach($item[1] as $tag)
	{
		$txt = "<meta name=\"".$tag['name']."\" content=\"".$tag['content']."\">\n";
		fwrite($myfile, $txt);
	}
}
fclose($myfile);