<?php

if (($body_stream = file_get_contents("php://input"))===FALSE){
    echo "Bad Request";
}

$data = json_decode($body_stream, TRUE);
$mypath = getcwd();
$mypath .= $mypath."/word/onlyoffice4.docx";
$mypath = "http://34.255.137.12/welcome/onlyoffice4.docx"; 
$path_for_save = $mypath;
if ($data["status"] == 2){ 
    $downloadUri = $data["url"];
    $myfolder = getcwd();
        copy($downloadUri, $myfolder."/word/onlyoffice9.docx");
    if (($new_data = file_get_contents($downloadUri))===FALSE){
        echo "Bad Response";
    } else {
        file_put_contents($path_for_save, $new_data, LOCK_EX);
    }
}
echo "{\"error\":0}"; 
$msg = "The key is : ".$data["key"]." and status is: ".$data["url"];
mail("demu@applord.co.za","o test 2",$msg);
?>