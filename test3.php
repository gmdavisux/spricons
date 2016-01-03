<?php

$file="svg/material-design/svg-sprite-maps-symbol.svg#ic_place_24px";
$path=pathinfo($file);
$fname=$path['filename'];
$fam=end(explode("/", $path['dirname']));
echo $fam." ".shortname($fname);

function shortname($fname){
    $filewords=array('symbol', 'svg', 'sprite');
    $pcs = explode('-', $fname);
    $result = array_diff($pcs, $filewords);
    return implode(' ', $result);
}

?>
