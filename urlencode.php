<?php

$msg="Hello world!";

$encoded=urlencode($msg);
$rawencoded=rawurlencode($msg);

echo "encoded:[$encoded]\n";
echo "rawencoded:[$rawencoded]\n";

// NOTICE:'+' means a space only in application/x-www-form-urlencoded content, such as the query part of a URL:
// http://www.example.com/path/foo+bar/path?query+name=query+value
// rawurlencode is safer
// see: http://stackoverflow.com/questions/2678551/when-to-encode-space-to-plus-or-20
//
// output:
//
// encoded:[Hello+world%21]
// rawencoded:[Hello%20world%21]

// $data = ["foo"=>"bar", "hei"=>"ha"];
// var_dump($data);
// PHP Warning:  urlencode() expects parameter 1 to be string, array given in /data/roxma/git/php_learn/urlencode.php on line 24
// $encoded = urlencode($data);
// echo "encoded data[$encoded]\n";
