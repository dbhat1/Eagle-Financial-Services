<?
function getStockQuote($symbol)
{
	$searchstring = $symbol;
	//$searchstring = "goog";
	$URL = "http://finance.yahoo.com/q?s=".$searchstring;
	$file = fopen("$URL", "r");
	$r = "";
	do{
		$data = fread($file, 8192);
		$r .= $data;
	}
	while(strlen($data) != 0);
	$r = strstr($r, "Open:");
	$r = substr($r, 5, 70);
	$r= strip_tags($r);
	return $r;
}

require('nusoap.php');

$server = new nusoap_server();

$server->configureWSDL('stockserver', 'urn:stockquote');

$server->register("getStockQuote",
                array('symbol' => 'xsd:string'),
                array('return' => 'xsd:decimal'),
                'urn:stockquote',
                'urn:stockquote#getStockQuote');

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)
                      ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);

?>


