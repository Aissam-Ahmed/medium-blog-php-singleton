<?php
namespace App\Core;

use App\Controllers\ArticleController;

class App
{
    public static function run()
    {
        $action = $_GET['action'] ?? 'index';

        $controller = new ArticleController();
        
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            http_response_code(404);
            echo "404 - الصفحة غير موجودة";
        }
    }
}
