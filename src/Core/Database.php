<?php
namespace App\Core;

use App\Config\Config;
use PDO;
use PDOException;

class Database
{
    private static ?Database $instance = null;
    private ?PDO $connection = null;

    // منع الإنشاء من خارج الكلاس
    private function __construct()
    {
        $config = Config::getInstance();

        $driver = $config->get('db_connection');
        $host = $config->get('db_host');
        $port = $config->get('db_port');
        $dbname = $config->get('db_database');
        $user = $config->get('db_username');
        $pass = $config->get('db_password');

        try {
            $dsn = "$driver:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            $this->connection = new PDO($dsn, $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("خطأ في الاتصال بقاعدة البيانات: " . $e->getMessage());
        }
    }

    // دالة الحصول على النسخة الوحيدة
    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // دالة للحصول على الاتصال PDO
    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
