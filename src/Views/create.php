<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إضافة مقالة</title>
</head>
<body>
    <h1>إضافة مقالة جديدة</h1>
    <form method="POST" action="/?action=store">
        <input type="text" name="title" placeholder="عنوان المقالة" required><br><br>
        <textarea name="content" rows="6" cols="40" placeholder="محتوى المقالة" required></textarea><br><br>
        <button type="submit">نشر</button>
    </form>
    <br>
    <a href="/?action=index">⬅ الرجوع للقائمة</a>
</body>
</html>
