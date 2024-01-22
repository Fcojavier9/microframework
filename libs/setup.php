<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
// Parámetros de conexión a la BD
//$config->set('dbhost', 'localhost');
//$config->set('dbname', 'test');
//$config->set('dbuser', 'root');
//$config->set('dbpass', '');


$config->set('dbhost', 'roundhouse.proxy.rlwy.net:52883');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', '5-deGaBGEE6h5AAB3215CBF3GC362-hF');

//mysql://root:5-deGaBGEE6h5AAB3215CBF3GC362-hF@roundhouse.proxy.rlwy.net:52883/railway
?>
