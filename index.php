<?php
require_once __DIR__ . '/functions.php';

$query = trim($_GET['q'] ?? '');
$category = trim($_GET['category'] ?? 'all');
$minPrice = $_GET['min_price'] ?? '';
$maxPrice = $_GET['max_price'] ?? '';
$mode = $_GET['mode'] ?? 'compare';

$products = getProducts();
$filteredProducts = filterProducts($products, $category, $minPrice, $maxPrice);

$keywordResults = $query === '' ? [] : keywordSearch($filteredProducts, $query);
$semanticResults = $query === '' ? [] : semanticSearch($filteredProducts, $query);

function resultCard(array $product, string $type): void {
    $title = htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8');
    $category = htmlspecialchars($product['category'], ENT_QUOTES, 'UTF-8');
    $price = number_format((float)$product['price'], 0, ',', '.');
    
    // Đóng gói thông số kỹ thuật thành JSON để truyền vào JavaScript
    $specsJson = isset($product['specs']) ? htmlspecialchars(json_encode($product['specs']), ENT_QUOTES, 'UTF-8') : '{}';

    // Thêm class 'clickable-card' và các data-*
    echo '<article class="product-card clickable-card" data-title="'.$title.'" data-price="'.$price.'" data-category="'.$category.'" data-desc="'.$description.'" data-specs="'.$specsJson.'">';
    echo '<div class="product-top"><span class="category-tag">' . $category . '</span><span class="price">' . $price . ' đ</span></div>';
    echo '<h3>' . $title . '</h3><p>' . $description . '</p>';
    echo '<div class="match-note">' . ($type === 'keyword' ? 'Khớp từ khóa' : 'Liên quan ngữ nghĩa') . '</div>';
    echo '</article>';
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semantic Search vs MySQL Search</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="site-header">
    <a class="brand" href="index.php"><span class="brand-mark">S</span><span>Search<span class="brand-light">Lab</span></span></a>
    <nav><a href="#search">Thử tìm kiếm</a><a href="#comparison">So sánh</a><a href="#about">Cách hoạt động</a></nav>
</header>

<main>
    <section class="hero">
        <div class="eyebrow"><span class="pulse"></span> SEARCH TECHNOLOGY DEMO</div>
        <h1>Tìm đúng từ khóa.<br><span>Hiểu đúng ý định.</span></h1>
        <p class="hero-copy">Khám phá sự khác biệt giữa tìm kiếm từ khóa truyền thống và tìm kiếm mô phỏng theo ngữ nghĩa trên cùng một bộ dữ liệu sản phẩm.</p>
        <a class="primary-button" href="#search">Bắt đầu trải nghiệm <span>↘</span></a>
        <div class="hero-stats">
            <div><strong>02</strong><span>Phương pháp</span></div>
            <div><strong>40+</strong><span>Sản phẩm mẫu</span></div>
            <div><strong>PHP</strong><span>Không cần database</span></div>
        </div>
    </section>

    <section class="search-section section-wrap" id="search">
        <div class="section-heading">
            <div><div class="eyebrow">INTERACTIVE DEMO</div><h2>Thử cùng một truy vấn</h2></div>
            <p>Nhập nhu cầu tự nhiên hoặc tên sản phẩm, sau đó so sánh kết quả hai bên.</p>
        </div>
        <form class="search-panel" method="get" action="index.php#results" id="searchForm">
            <label class="search-label" for="q">Bạn đang tìm gì?</label>
            <div class="search-row">
                <span class="search-icon">⌕</span>
                <input type="text" id="q" name="q" value="<?= htmlspecialchars($query, ENT_QUOTES, 'UTF-8') ?>" placeholder="Ví dụ: thiết bị di động màn hình gập" autocomplete="off">
                <button class="primary-button search-submit" type="submit">Tìm kiếm <span>→</span></button>
            </div>
            <div class="filters">
                <label>Danh mục
                    <select name="category">
                        <option value="all" <?= $category === 'all' ? 'selected' : '' ?>>Tất cả danh mục</option>
                        <?php foreach (getCategories($products) as $item): ?>
                            <option value="<?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?>" <?= $category === $item ? 'selected' : '' ?>><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label>Giá từ (VNĐ)<input type="number" min="0" name="min_price" placeholder="0" value="<?= htmlspecialchars((string)$minPrice, ENT_QUOTES, 'UTF-8') ?>"></label>
                <label>Giá đến (VNĐ)<input type="number" min="0" name="max_price" placeholder="Không giới hạn" value="<?= htmlspecialchars((string)$maxPrice, ENT_QUOTES, 'UTF-8') ?>"></label>
            </div>
            <div class="examples"><span>Gợi ý:</span>
                <button type="button" class="chip" data-query="thiết bị di động màn hình gập">thiết bị di động màn hình gập</button>
                <button type="button" class="chip" data-query="điện thoại chụp ảnh đẹp">điện thoại chụp ảnh đẹp</button>
                <button type="button" class="chip" data-query="máy tính để học lập trình">máy tính học lập trình</button>
                <button type="button" class="chip" data-query="loa nghe nhạc bluetooth">loa nghe nhạc bluetooth</button>
                <button type="button" class="chip" data-query="bàn phím cơ làm việc">bàn phím cơ làm việc</button>
            </div>
            <input type="hidden" name="mode" value="compare">
        </form>

        <?php if ($query !== ''): ?>
        <div class="results-area" id="results">
            <div class="query-summary">Kết quả cho: <strong>“<?= htmlspecialchars($query, ENT_QUOTES, 'UTF-8') ?>”</strong>
                <a href="index.php#search">Xóa tìm kiếm</a>
            </div>
            <div class="results-grid">
                <section class="result-column">
                    <div class="result-heading"><span class="method-icon mysql-icon">M</span><div><h3>MySQL Keyword Search</h3><p>Tìm kiếm theo từ khóa</p></div><span class="result-count"><?= count($keywordResults) ?> kết quả</span></div>
                    <?php if (!$keywordResults): ?>
                        <div class="empty-state"><span>⌕</span><strong>Không tìm thấy kết quả</strong><p>Không có sản phẩm chứa các từ khóa phù hợp. Thử truy vấn khác nhé.</p></div>
                    <?php else: foreach ($keywordResults as $product) { resultCard($product, 'keyword'); } endif; ?>
                </section>
                <section class="result-column semantic-column">
                    <div class="result-heading"><span class="method-icon ai-icon">✳</span><div><h3>Semantic Search (mô phỏng)</h3><p>So khớp từ đồng nghĩa và ý định</p></div><span class="result-count"><?= count($semanticResults) ?> kết quả</span></div>
                    <?php if (!$semanticResults): ?>
                        <div class="empty-state"><span>✳</span><strong>Chưa tìm thấy kết quả liên quan</strong><p>Thử diễn đạt lại nhu cầu bằng cách khác.</p></div>
                    <?php else: foreach ($semanticResults as $product) { resultCard($product, 'semantic'); } endif; ?>
                </section>
            </div>
            <p class="demo-note"><strong>Lưu ý:</strong> Click vào từng thẻ sản phẩm để xem thông tin chi tiết. Semantic Search được mô phỏng bằng từ đồng nghĩa và điểm liên quan, không phải embedding vector hoặc Vector Database thật.</p>
        </div>
        <?php else: ?>
        <div class="empty-prompt"><span class="prompt-symbol">✳</span><div><strong>Sẵn sàng khám phá?</strong><p>Nhập một truy vấn ở trên hoặc chọn một gợi ý để xem kết quả.</p></div></div>
        <?php endif; ?>
    </section>

    <section class="comparison-section" id="comparison">
        <div class="section-wrap">
            <div class="section-heading"><div><div class="eyebrow">AT A GLANCE</div><h2>Hai cách tìm kiếm, hai thế mạnh</h2></div><p>Chọn phương pháp dựa trên dữ liệu và mục tiêu của ứng dụng.</p></div>
            <div class="comparison-table-wrap">
                <table class="comparison-table">
                    <thead><tr><th>Tiêu chí</th><th>MySQL Search</th><th>Semantic Search</th></tr></thead>
                    <tbody>
                        <tr><td>Nguyên lý</td><td>Khớp từ khóa / Full-text</td><td>Độ tương đồng ý nghĩa (bản demo mô phỏng)</td></tr>
                        <tr><td>Dữ liệu phù hợp</td><td>Bảng, số liệu, tên chính xác</td><td>Văn bản tự nhiên, nhu cầu diễn đạt linh hoạt</td></tr>
                        <tr><td>Ưu điểm</td><td>Lọc điều kiện rõ ràng, dễ kiểm soát</td><td>Có thể tìm qua từ đồng nghĩa được khai báo</td></tr>
                        <tr><td>Hạn chế</td><td>Có thể bỏ sót khi khác từ vựng</td><td>Demo chưa hiểu ngữ cảnh như mô hình embedding thật</td></tr>
                        <tr><td>Ví dụ sử dụng</td><td>Lọc sản phẩm theo tên, giá, danh mục</td><td>Tìm sản phẩm theo nhu cầu mô tả tự nhiên</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="how-section section-wrap" id="about">
        <div class="section-heading"><div><div class="eyebrow">HOW IT WORKS</div><h2>Luồng xử lý tìm kiếm</h2></div><p>Hai bộ xử lý nhận cùng truy vấn nhưng chấm điểm theo cách khác nhau.</p></div>
        <div class="steps">
            <article class="step-card"><span class="step-number">01</span><div class="step-icon">⌕</div><h3>Nhập truy vấn</h3><p>Người dùng nhập tên sản phẩm hoặc mô tả nhu cầu bằng ngôn ngữ tự nhiên.</p></article>
            <article class="step-card"><span class="step-number">02</span><div class="step-icon">M</div><h3>Keyword Search</h3><p>PHP chuẩn hóa chữ và tìm từ khóa xuất hiện trong tên, mô tả hoặc danh mục.</p></article>
            <article class="step-card"><span class="step-number">03</span><div class="step-icon">✳</div><h3>Semantic mô phỏng</h3><p>PHP mở rộng từ đồng nghĩa và tính điểm dựa trên các từ liên quan đã định nghĩa.</p></article>
            <article class="step-card"><span class="step-number">04</span><div class="step-icon">↔</div><h3>So sánh kết quả</h3><p>Hiển thị song song để người dùng quan sát điểm khác biệt giữa hai cách tìm.</p></article>
        </div>
    </section>
</main>

<footer class="site-footer"><a class="brand" href="#"><span class="brand-mark">S</span><span>Search<span class="brand-light">Lab</span></span></a><p>Demo học tập PHP · Semantic Search & MySQL Search</p><span>Không sử dụng cơ sở dữ liệu</span></footer>

<!-- Modal Chi tiết sản phẩm -->
<div id="productModal" class="modal-overlay">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-header">
            <span id="modalCategory" class="category-tag"></span>
            <h2 id="modalTitle"></h2>
            <div id="modalPrice" class="price"></div>
        </div>
        <p id="modalDesc" class="modal-desc"></p>
        <div class="modal-specs-container">
            <h3>Thông số kỹ thuật</h3>
            <ul id="modalSpecsList"></ul>
        </div>
    </div>
</div>

<script src="assets/script.js"></script>
</body>
</html>