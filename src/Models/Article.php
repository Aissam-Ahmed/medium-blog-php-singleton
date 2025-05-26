<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Article
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function all(): array
    {
        $stmt = $this->db->query("SELECT * FROM articles ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(string $title, string $content): bool
    {
        $stmt = $this->db->prepare("INSERT INTO articles (title, content, created_at) VALUES (?, ?, NOW())");
        return $stmt->execute([$title, $content]);
    }
}
