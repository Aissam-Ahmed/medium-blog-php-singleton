<?php
require __DIR__ . '/../vendor/autoload.php';

// use App\Config\Config;
// use App\Core\Database;

// $db = Database::getInstance()->getConnection();

use App\Core\App;

App::run();


// الآن يمكنك استخدام $db لتنفيذ استعلامات MySQL
// $stmt = $db->query("SELECT NOW()");
// echo $stmt->fetchColumn();
