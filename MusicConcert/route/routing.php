<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$uri  = explode('/', $host)[$num];

if ($uri=='' OR $uri=='index.php' OR $uri=='home') {
   $response= Controller::start_site();
}
elseif ($uri=='contact') {
    $response=Controller::contact();

}
 else {
$response=Controller::error404();    
}

