<?php
namespace App\Controllers;

use App\Models\Article;

class ArticleController
{
    private Article $model;

    public function __construct()
    {
        $this->model = new Article();
    }

    public function index()
    {
        $articles = $this->model->all();
        include __DIR__ . '/../Views/list.php';
    }

    public function create()
    {
        include __DIR__ . '/../Views/create.php';
    }

    public function store()
    {
        $title = $_POST['title'] ?? '';
        $content = $_POST['content'] ?? '';

        if ($title && $content) {
            $this->model->create($title, $content);
            header('Location: /?action=index');
            exit;
        } else {
            echo "جميع الحقول مطلوبة.";
        }
    }
}
