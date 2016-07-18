<?php

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");

foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
// d = lemon
// a = orange
// b = banana
// c = apple

ksort($fruits);

foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
// a = orange
// b = banana
// c = apple
// d = lemon
