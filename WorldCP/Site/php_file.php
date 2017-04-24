<?php

//This necessary to prevent AJAX from automatically ESCAPING all values (e.g. "Bob" is turned into \"Bob\" )
if (get_magic_quotes_gpc()) {
    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while (list($key, $val) = each($process)) {
        foreach ($val as $k => $v) {
            unset($process[$key][$k]);
            if (is_array($v)) {
                $process[$key][stripslashes($k)] = $v;
                $process[] = &$process[$key][stripslashes($k)];
            } else {
                $process[$key][stripslashes($k)] = stripslashes($v);
            }
        }
    }
    unset($process);
}

if ($_POST['req'] == 'load') {
   $file_name = $_POST['fileName'];
    $xml = file_get_contents($file_name);
    echo $xml;

}else if ($_POST['req'] == 'save') {
    $d = $_POST['changes'];
    $file_name = $_POST['fileName'];
    //echo $d;
    $size = file_put_contents($file_name, $d);
    //$myfile = fopen($file_name, "w") or die("Unable to open file!");
    //fwrite($myfile, $d);
    //fclose($myfile);
    echo 'Wrote ' .$size. ' bytes to file ' .$file_name. '. Refresh page with [Ctrl]+[F5] to see your changes.';
}
