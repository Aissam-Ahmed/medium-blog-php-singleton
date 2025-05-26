<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>قائمة المقالات</title>
</head>
<body>
    <h1>المقالات</h1>
    <a href="/?action=create">➕ إضافة مقالة جديدة</a>
    <hr>
    <?php foreach ($articles as $article): ?>
        <h3><?= htmlspecialchars($article['title']) ?></h3>
        <p><?= nl2br(htmlspecialchars($article['content'])) ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>
