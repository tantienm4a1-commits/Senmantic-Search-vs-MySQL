<?php
require_once __DIR__ . '/functions.php';

$message = '';
$error = '';
$count = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $documents = getAllDocuments();
        if (!$documents) {
            throw new RuntimeException('Bang documents chua co du lieu. Hay import file sql/schema.sql.');
        }
        $count = syncDocumentsToChroma($documents);
        $message = 'Da dong bo ' . $count . ' tai lieu sang ChromaDB. Bay gio co the quay lai trang tim kiem va chon Semantic Search.';
    } catch (Throwable $exception) {
        $error = $exception->getMessage();
    }
}
?>
<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đồng bộ ChromaDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>body{background:#f4f7fb}.box{max-width:760px;margin:8vh auto;background:white;border:1px solid #e3e9f2;border-radius:20px;padding:32px}</style>
</head>
<body>
<div class="container">
    <main class="box">
        <h1 class="h3 fw-bold mb-3">Đồng bộ dữ liệu lên ChromaDB</h1>
        <p class="text-secondary">Chức năng này đọc các tài liệu trong MySQL, tạo vector embedding rồi lưu vào collection <code><?= e(CHROMA_COLLECTION) ?></code>.</p>
        <?php if ($message !== ''): ?><div class="alert alert-success"><?= e($message) ?></div><?php endif; ?>
        <?php if ($error !== ''): ?><div class="alert alert-danger"><strong>Đồng bộ chưa thành công:</strong><br><?= e($error) ?></div><?php endif; ?>
        <div class="alert alert-info">
            Trước khi đồng bộ, hãy đảm bảo MySQL đang chạy, ChromaDB đang chạy tại <code><?= e(CHROMA_URL) ?></code> và đã điền <code>OPENAI_API_KEY</code> trong <code>config.php</code>.
        </div>
        <form method="post">
            <button type="submit" class="btn btn-primary">Bắt đầu đồng bộ</button>
            <a href="index.php" class="btn btn-outline-secondary ms-2">Quay lại tìm kiếm</a>
        </form>
    </main>
</div>
</body>
</html>
