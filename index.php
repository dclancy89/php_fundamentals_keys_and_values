<?php

function KeyValues($arr) {
    echo "There are " . count(array_keys($arr)) . " key(s) in this array:<br />";
    $arr_keys = array_keys($arr);
    foreach( $arr_keys as $key ) {
        echo "\t" . $key . "<br />";
    }

    foreach ( $arr as $key => $value) {
        echo "The value in the key '" . $key . "' is '" . $value . "'<br />";
    }
}

$array1["first_name"] = "Daniel";
$array1["last_name"] = "Clancy";

KeyValues($array1);