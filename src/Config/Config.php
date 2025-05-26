<?php
namespace App\Config;

use Dotenv\Dotenv;

class Config
{
    private static ?Config $instance = null;
    private array $settings = [];

    // منع الإنشاء من خارج الكلاس
    private function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        // نقرأ جميع إعدادات البيئة المطلوبة
        $this->settings = [
            'db_connection' => $_ENV['DB_CONNECTION'] ?? 'mysql',
            'db_host' => $_ENV['DB_HOST'] ?? '127.0.0.1',
            'db_port' => $_ENV['DB_PORT'] ?? '3306',
            'db_database' => $_ENV['DB_DATABASE'] ?? '',
            'db_username' => $_ENV['DB_USERNAME'] ?? '',
            'db_password' => $_ENV['DB_PASSWORD'] ?? '',
            'app_name' => $_ENV['APP_NAME'] ?? 'MyApp',
        ];
    }

    // دالة الحصول على النسخة الوحيدة
    public static function getInstance(): Config
    {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    // دالة للوصول لإعداد معين
    public function get(string $key, $default = null)
    {
        return $this->settings[$key] ?? $default;
    }
}
