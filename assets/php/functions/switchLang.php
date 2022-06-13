<?php
// Switch language
function switch_lang($lang){
    if($lang !== "de" && $lang !== "en" && $lang !== "es" && $lang !== "pl") $lang = "de";

    setcookie("language", $lang, time() + 2 * (365 * 24 * 60 * 60), "/");
    $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    header("Location: $url");
    exit();
};

// listen for language switch
if(isset($_GET["lang"])){
    switch_lang($_GET["lang"]);
};