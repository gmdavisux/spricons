<?php

function fName($str, $del, $arr){
//    tries to get a friendly name of an icon esp. material design
    $pcs = explode($id, $del);
    $result = array_diff($pcs, $arr);
    $fname = implode($pcs, ' ');
}

function shortname($fname){
//gets the simplified file name
    $filewords=array('symbol', 'svg', 'sprite');
    $pcs = explode('-', $fname);
    $result = array_diff($pcs, $filewords);
    return implode(' ', $result);
}

function showIcons($file) {
//    creates the page showing all icons in a sprite
    $path=pathinfo($file);
    $fname=$path['filename'];
    $fam=end(explode("/", $path['dirname'])); // family name
    if (file_exists($file)) {
        $xml = simplexml_load_file($file);
//        print_r($xml); //->symbol['0']['id']
        $i=0;
            $html.='
            <ul class="spr-ul">';
        foreach($xml->symbol as $item){
            $id=$item[0]['id'][0];

            $idwords=array('ic', '24px');
            $pcs = explode('_', $id);
            $result = array_diff($pcs, $idwords);
            $fid = implode(' ', $result);

            $path = pathinfo($file);

//            $filewords=array('symbol.svg', 'svg', 'sprite');
//            $pcs = explode('-', $file);
//            $result = array_diff($pcs, $filewords);
//            print_r($result);
//            $ffile = implode(' ', $result);
            $ffile = $fam." ".shortname($fname);

            $html.='
              <li class="mag spr-li col-sm-6 col-xs-12 col-md-4 col-lg-3">
                <a class="spr-2x" data-icon="'.$file.'#'.$id.'" href="ico.php?f='.$file.'&amp;i='.$id.'">'.$fid.'</a>
              </li>
            ';
            ++$i;
        }
        $html.='
        </ul>';
        $html='<div class="col-md-12 heading"><h2>'.$ffile.' <small>'.$i.' icons </small></h2></div><!--START-->'.$html.'<!-- END -->';
         return($html);
    } else {
        return('<h3>Failed to open '.$file.'.</h3>');
    }
}
?>
