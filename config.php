<?php

define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','toothcare');


define('BASE_PATH', __DIR__);
define('CURRENT_DOMAIN', current_domain());
define('CURRENT_URL',current_url());
define('SLOT_DURATION', 'PT60M');
require_once __DIR__.'/helpers/PersistanceManager.php';


function current_domain(){
    $projectPath = '/php-study/my-sql/musab-sir/finel-project/itc-clinic/';
    return protocol() . $_SERVER['HTTP_HOST'] . $projectPath;
}

function current_url(){
    return current_domain().$_SERVER['REQUEST_URI'];
}

function protocol(){
    if(strpos($_SERVER['HTTP_HOST'],'https')!==false){
        return 'https://';
    }
    else {
        return 'http://';
    }
}

function asset($src){
    
     $domain = trim(CURRENT_DOMAIN,'/');
    $src = $domain.'/'.trim($src,'/');
    return $src;
}

function url ($url){
    $domain = trim(CURRENT_DOMAIN,'/');
    $url = $domain.'/'.trim($url,'/');
    return $url;
    
}




function dd($data, $comment = '')
{
    print('<pre>');
    print($comment);
    print('<br>');

    print_r($data);
    print('</pre>');

    die;
}

function pr($data, $comment = '')
{
    print('<pre>');
    print($comment);
    print('<br>');

    print_r($data);
    print('</pre>');
}

function getDays()
{
    return [
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday'
    ];
}


function generateRandomString($length = 4)
{
    return bin2hex(random_bytes($length / 2));
}


// $assets = asset('assets/css/index-style.css');



//   print('<pre>');
//     print($assets);
//     print('<br>');

