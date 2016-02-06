<HTML>
<HEAD>
<TITLE>SQuote2</TITLE>
</HEAD>
<BODY>
<h4><B>
</B></h4>
<h1 align="center"><b><font color="green" face="arial"> 	<font color="#000066">Results of Stock Quote</font></font></b></h1>
<h2 align="center">&nbsp;</h2>
<br>
<?php
$quote = $_POST['stquote'];
print "<br><br>";
 
   print "<font size=6pt>Stock Symbol is:<FONT COLOR=red>    $quote</font>";
require_once('nusoap.php'); 

$c = new nusoap_client('http://loki.ist.unomaha.edu/~groyce/ws/stockquoteservice.php');

$stockprice = $c->call('getStockQuote',
              array('symbol' => $quote));
print "<br><br><font size=6pt> Price in dollars delayed by 20 minutes     $</font>";
print "<font size=6pt><FONT COLOR=red>  $stockprice </font><br><br>";
	
	
?>
</BODY>
</HTML>
 
