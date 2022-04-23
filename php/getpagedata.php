<?php

include './simple_html_dom.php';

if (isset($_GET['d']) && isset($_GET['u'])) {

    $accepted_domain = 'https://www.gsmarena.com';
    $domain = "https://www.".$_GET['d'].".com";
    $url = $domain.$_GET['u'].".php"; 

    if ($domain == $accepted_domain) {
        $result = file_get_contents($url);
    }
    else{
        $result = "None";
    }
    $html = new simple_html_dom();
    $html -> load($result);
    $name = $html -> find('div[class=specs-phone-name-title]'); 
    var_dump($name);
}
?>
