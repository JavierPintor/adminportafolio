<?php
$debug = false;
if(@$_SERVER["SERVER_NAME"]=="localhost" || @$_SERVER["SERVER_NAME"]=="192.168.0.00"){
    $debug = true;
}
if($debug){ 
    return array(
        'title'=>'Riode',
        'connectionString' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'riode', 
        'username' => 'root',
        'password' => '123',
        'folderControladores' => 'protected/controller/',
        'folderModelos' => 'protected/model/', 
        'folderVistas' => 'protected/views/',
        'pathSite' => 'http://'.$_SERVER["SERVER_NAME"].'/riode/',
        'pathCMSSite' => 'http://'.$_SERVER["SERVER_NAME"].'/riode/',
        'design' => '1',
        'timezone' => 'America/Mexico_City',
        'createby' => 'Create By KMRww',
        
    );
} else {
    return array(
        'title'=>'KMRWW',
        'connectionString' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'dixiproj_demokmrww',
        'username' => 'dixiproj_userdemokmr',
        'password' => '4&N2J**G+_m%',
        'folderControladores' => 'protected/controller/',
        'folderModelos' => 'protected/model/',
        'folderVistas' => 'protected/views/',
        'pathSite' =>    'https://admin.kmrww.com/',
        'pathCMSSite' => 'https://admin.kmrww.com/',
        'design' => '2',
        'timezone' => 'America/Mexico_City',
        'createby' => 'Create By KMRww',
        'API_KEY_ZOOM'=>'6KmvB5L3TiR9BkCKt5lRg',
        'API_SECRET_ZOOM'=>'EAFZAEVWtqq4fEvTI6U1ct8WOy7oDeg1',
        'gettoken_ZOOM'=>'https://admin.kmrww.com/gettoken/'
    );
}
?>