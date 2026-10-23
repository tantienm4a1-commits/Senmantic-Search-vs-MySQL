<?php
/**
 * Dữ liệu mẫu được lưu trong mảng PHP, không cần MySQL hay database.
 */
function getProducts(): array {
    return [
        ['id'=>1, 'name'=>'Samsung Galaxy Z Fold5', 'description'=>'Điện thoại màn hình gập lớn, đa nhiệm, phù hợp làm việc và giải trí.', 'category'=>'Điện thoại', 'price'=>24990000, 'keywords'=>'samsung galaxy fold gập màn hình gập smartphone thiết bị di động android', 'specs'=>['Màn hình'=>'7.6 inch Dynamic AMOLED', 'RAM'=>'12GB', 'Lưu trữ'=>'256GB', 'Pin'=>'4400 mAh']],
        ['id'=>2, 'name'=>'iPhone 15 Pro', 'description'=>'Điện thoại cao cấp với camera chất lượng, quay video tốt và hiệu năng mạnh.', 'category'=>'Điện thoại', 'price'=>23990000, 'keywords'=>'apple iphone smartphone điện thoại chụp ảnh camera quay phim ios', 'specs'=>['Màn hình'=>'6.1 inch OLED', 'Chip'=>'A17 Pro', 'RAM'=>'8GB', 'Lưu trữ'=>'256GB']],
        ['id'=>3, 'name'=>'Samsung Galaxy S24 Ultra', 'description'=>'Điện thoại Android có camera zoom, màn hình sắc nét và hiệu năng cao.', 'category'=>'Điện thoại', 'price'=>27990000, 'keywords'=>'samsung android smartphone điện thoại chụp ảnh camera zoom cao cấp', 'specs'=>['Màn hình'=>'6.8 inch 120Hz', 'Camera'=>'200MP + Zoom 5x', 'RAM'=>'12GB', 'Pin'=>'5000 mAh']],
        ['id'=>4, 'name'=>'Google Pixel 8', 'description'=>'Điện thoại nổi bật với xử lý ảnh, chụp đêm và tính năng thông minh.', 'category'=>'Điện thoại', 'price'=>15990000, 'keywords'=>'google pixel smartphone điện thoại chụp ảnh đẹp camera chụp đêm', 'specs'=>['Màn hình'=>'6.2 inch 120Hz', 'Chip'=>'Google Tensor G3', 'RAM'=>'8GB', 'Lưu trữ'=>'128GB']],
        ['id'=>5, 'name'=>'Xiaomi Redmi Note 13', 'description'=>'Điện thoại tầm trung có màn hình đẹp, pin tốt và mức giá dễ tiếp cận.', 'category'=>'Điện thoại', 'price'=>4990000, 'keywords'=>'xiaomi redmi điện thoại giá rẻ pin lâu màn hình smartphone', 'specs'=>['Màn hình'=>'6.67 inch AMOLED', 'RAM'=>'6GB', 'Lưu trữ'=>'128GB', 'Pin'=>'5000 mAh']],
        ['id'=>6, 'name'=>'OPPO Reno11', 'description'=>'Điện thoại thiên về chân dung, camera selfie và thiết kế thời trang.', 'category'=>'Điện thoại', 'price'=>8990000, 'keywords'=>'oppo điện thoại selfie chân dung chụp ảnh camera smartphone', 'specs'=>['Màn hình'=>'6.7 inch 3D Curved', 'Camera selfie'=>'32MP', 'RAM'=>'8GB', 'Sạc nhanh'=>'67W']],
        ['id'=>7, 'name'=>'Samsung Galaxy A55', 'description'=>'Điện thoại dùng hằng ngày với màn hình AMOLED, pin ổn và camera đa dụng.', 'category'=>'Điện thoại', 'price'=>8990000, 'keywords'=>'samsung galaxy điện thoại phổ thông pin màn hình camera android', 'specs'=>['Màn hình'=>'6.6 inch Super AMOLED', 'RAM'=>'8GB', 'Lưu trữ'=>'128GB', 'Pin'=>'5000 mAh']],
        ['id'=>8, 'name'=>'Nothing Phone (2a)', 'description'=>'Điện thoại Android thiết kế khác biệt, giao diện gọn và trải nghiệm mượt.', 'category'=>'Điện thoại', 'price'=>7990000, 'keywords'=>'nothing phone android điện thoại thiết kế độc đáo smartphone', 'specs'=>['Màn hình'=>'6.7 inch AMOLED', 'Chip'=>'Dimensity 7200 Pro', 'RAM'=>'8GB', 'Lưu trữ'=>'128GB']],
        ['id'=>9, 'name'=>'Lenovo LOQ 15', 'description'=>'Laptop hiệu năng tốt cho học lập trình, chơi game và làm việc đa nhiệm.', 'category'=>'Laptop', 'price'=>18990000, 'keywords'=>'máy tính xách tay laptop code lập trình gaming chơi game học tập', 'specs'=>['CPU'=>'Core i5 13420H', 'RAM'=>'16GB DDR5', 'Màn hình'=>'15.6 inch 144Hz', 'GPU'=>'RTX 4050 6GB']],
        ['id'=>10, 'name'=>'MacBook Air M2', 'description'=>'Laptop mỏng nhẹ, pin lâu, phù hợp học tập, lập trình và làm việc di động.', 'category'=>'Laptop', 'price'=>21990000, 'keywords'=>'máy tính xách tay macbook laptop học tập lập trình code pin lâu', 'specs'=>['CPU'=>'Apple M2', 'RAM'=>'8GB', 'Màn hình'=>'13.6 inch Liquid Retina', 'Lưu trữ'=>'256GB SSD']],
        ['id'=>11, 'name'=>'ASUS Vivobook 15', 'description'=>'Laptop phổ thông cho sinh viên, văn phòng, học online và lập trình cơ bản.', 'category'=>'Laptop', 'price'=>12990000, 'keywords'=>'máy tính laptop sinh viên học tập học lập trình văn phòng', 'specs'=>['CPU'=>'Core i5 1235U', 'RAM'=>'8GB', 'Màn hình'=>'15.6 inch FHD', 'Lưu trữ'=>'512GB SSD']],
        ['id'=>12, 'name'=>'Acer Nitro V 15', 'description'=>'Laptop gaming có card đồ họa rời, phù hợp chơi game và làm đồ họa cơ bản.', 'category'=>'Laptop', 'price'=>19990000, 'keywords'=>'laptop gaming chơi game đồ họa card màn hình hiệu năng', 'specs'=>['CPU'=>'Core i5 13420H', 'RAM'=>'16GB DDR5', 'Màn hình'=>'15.6 inch 144Hz', 'GPU'=>'RTX 4050']],
        ['id'=>13, 'name'=>'HP Pavilion 14', 'description'=>'Laptop nhỏ gọn cho công việc văn phòng, học trực tuyến và di chuyển.', 'category'=>'Laptop', 'price'=>14490000, 'keywords'=>'laptop văn phòng học online sinh viên gọn nhẹ', 'specs'=>['CPU'=>'Core i5 1240P', 'RAM'=>'8GB', 'Màn hình'=>'14 inch FHD', 'Lưu trữ'=>'512GB SSD']],
        ['id'=>14, 'name'=>'Dell Inspiron 16', 'description'=>'Laptop màn hình lớn dùng cho công việc, học tập, bảng tính và đa nhiệm.', 'category'=>'Laptop', 'price'=>16990000, 'keywords'=>'laptop màn hình lớn văn phòng học tập làm việc đa nhiệm', 'specs'=>['CPU'=>'Core i5 1335U', 'RAM'=>'16GB', 'Màn hình'=>'16 inch FHD+', 'Lưu trữ'=>'512GB SSD']],
        ['id'=>15, 'name'=>'MSI Thin GF63', 'description'=>'Laptop hướng tới game thủ cần hiệu năng đồ họa trong thiết kế tương đối gọn.', 'category'=>'Laptop', 'price'=>17490000, 'keywords'=>'laptop gaming game thủ đồ họa chơi game', 'specs'=>['CPU'=>'Core i5 12450H', 'RAM'=>'8GB', 'Màn hình'=>'15.6 inch 144Hz', 'GPU'=>'RTX 3050 4GB']],
        ['id'=>16, 'name'=>'iPad Air', 'description'=>'Máy tính bảng để ghi chú, đọc tài liệu, học tập và vẽ sáng tạo.', 'category'=>'Máy tính bảng', 'price'=>14990000, 'keywords'=>'tablet máy tính bảng ipad học tập ghi chú vẽ', 'specs'=>['Màn hình'=>'10.9 inch', 'Chip'=>'Apple M1', 'Lưu trữ'=>'64GB', 'Kết nối'=>'Wi-Fi']],
        ['id'=>17, 'name'=>'iPad 10th Generation', 'description'=>'Máy tính bảng phổ thông dùng học online, xem tài liệu và giải trí.', 'category'=>'Máy tính bảng', 'price'=>8990000, 'keywords'=>'tablet máy tính bảng ipad học online sinh viên giải trí', 'specs'=>['Màn hình'=>'10.9 inch Liquid Retina', 'Chip'=>'A14 Bionic', 'Lưu trữ'=>'64GB', 'Kết nối'=>'Wi-Fi']],
        ['id'=>18, 'name'=>'Samsung Galaxy Tab S9 FE', 'description'=>'Máy tính bảng Android phục vụ ghi chú, đọc sách, học tập và xem video.', 'category'=>'Máy tính bảng', 'price'=>9990000, 'keywords'=>'tablet máy tính bảng android ghi chú đọc sách xem phim học tập', 'specs'=>['Màn hình'=>'10.9 inch 90Hz', 'Bút cảm ứng'=>'Có S-Pen', 'RAM'=>'6GB', 'Pin'=>'8000 mAh']],
        ['id'=>19, 'name'=>'Xiaomi Pad 6', 'description'=>'Máy tính bảng màn hình tần số quét cao cho học tập, giải trí và chơi game.', 'category'=>'Máy tính bảng', 'price'=>7490000, 'keywords'=>'tablet máy tính bảng chơi game xem phim giải trí màn hình', 'specs'=>['Màn hình'=>'11 inch 144Hz', 'Chip'=>'Snapdragon 870', 'RAM'=>'8GB', 'Pin'=>'8840 mAh']],
        ['id'=>20, 'name'=>'Sony WH-1000XM5', 'description'=>'Tai nghe chụp tai chống ồn, phù hợp nghe nhạc và học tập tập trung.', 'category'=>'Phụ kiện', 'price'=>7490000, 'keywords'=>'tai nghe headphone chống ồn nghe nhạc âm thanh', 'specs'=>['Loại'=>'Chụp tai (Over-ear)', 'Kết nối'=>'Bluetooth 5.2', 'Chống ồn'=>'ANC chủ động', 'Thời lượng pin'=>'30 giờ']],
        ['id'=>21, 'name'=>'Logitech MX Master 3S', 'description'=>'Chuột không dây tiện dụng cho làm việc văn phòng và lập trình.', 'category'=>'Phụ kiện', 'price'=>2490000, 'keywords'=>'chuột không dây mouse phụ kiện máy tính lập trình', 'specs'=>['Loại'=>'Chuột không dây', 'Cảm biến'=>'8000 DPI', 'Kết nối'=>'Bluetooth / Logi Bolt', 'Pin'=>'70 ngày']],
        ['id'=>22, 'name'=>'Keychron K8 Pro', 'description'=>'Bàn phím cơ không dây cho gõ văn bản, lập trình và góc máy tính cá nhân.', 'category'=>'Phụ kiện', 'price'=>2290000, 'keywords'=>'bàn phím cơ keyboard gõ phím lập trình máy tính', 'specs'=>['Loại Switch'=>'Gateron G Pro', 'Layout'=>'TKL (87 phím)', 'Kết nối'=>'Bluetooth 5.1 / Cáp Type-C', 'Pin'=>'4000 mAh']],
        ['id'=>23, 'name'=>'Logitech G Pro X Superlight', 'description'=>'Chuột gaming nhẹ dành cho chơi game cần thao tác nhanh và chính xác.', 'category'=>'Phụ kiện', 'price'=>2990000, 'keywords'=>'chuột gaming mouse chơi game game thủ', 'specs'=>['Loại'=>'Chuột gaming không dây', 'Trọng lượng'=>'Dưới 63g', 'Cảm biến'=>'HERO 25K', 'Pin'=>'70 giờ']],
        ['id'=>24, 'name'=>'Anker 737 Power Bank', 'description'=>'Pin sạc dự phòng dung lượng lớn để sạc điện thoại và thiết bị di động.', 'category'=>'Phụ kiện', 'price'=>2490000, 'keywords'=>'sạc dự phòng pin dự phòng power bank sạc điện thoại', 'specs'=>['Dung lượng'=>'24000 mAh', 'Công suất'=>'140W', 'Cổng sạc'=>'2 Type-C, 1 USB-A', 'Màn hình'=>'Smart Display']],
        ['id'=>25, 'name'=>'Samsung 990 EVO 1TB', 'description'=>'Ổ cứng SSD tốc độ cao giúp tăng dung lượng lưu trữ cho máy tính.', 'category'=>'Linh kiện', 'price'=>2290000, 'keywords'=>'ssd ổ cứng lưu trữ nâng cấp máy tính tốc độ cao', 'specs'=>['Dung lượng'=>'1TB', 'Chuẩn giao tiếp'=>'PCIe Gen 4.0/5.0', 'Tốc độ đọc'=>'5000 MB/s', 'Tốc độ ghi'=>'4200 MB/s']],
        ['id'=>26, 'name'=>'Kingston Fury Beast 16GB', 'description'=>'Bộ nhớ RAM dành cho máy tính để bàn, hỗ trợ nâng cấp đa nhiệm.', 'category'=>'Linh kiện', 'price'=>1090000, 'keywords'=>'ram bộ nhớ máy tính linh kiện nâng cấp đa nhiệm', 'specs'=>['Loại'=>'DDR5', 'Dung lượng'=>'16GB (1x16GB)', 'Tốc độ bus'=>'5200 MHz', 'Độ trễ'=>'CL40']],
        ['id'=>27, 'name'=>'ASUS Dual RTX 4060', 'description'=>'Card đồ họa cho chơi game, dựng hình và xử lý tác vụ đồ họa.', 'category'=>'Linh kiện', 'price'=>8290000, 'keywords'=>'gpu card đồ họa card màn hình chơi game gaming render', 'specs'=>['VRAM'=>'8GB GDDR6', 'Nhân CUDA'=>'3072', 'Giao tiếp'=>'PCIe 4.0 x8', 'Cổng xuất hình'=>'1x HDMI, 3x DisplayPort']],
        ['id'=>28, 'name'=>'Dell UltraSharp 27', 'description'=>'Màn hình máy tính 27 inch cho công việc, thiết kế và lập trình.', 'category'=>'Màn hình', 'price'=>10990000, 'keywords'=>'monitor màn hình máy tính hiển thị làm việc code thiết kế', 'specs'=>['Kích thước'=>'27 inch', 'Độ phân giải'=>'4K (3840 x 2160)', 'Tấm nền'=>'IPS Black', 'Tần số quét'=>'60Hz']],
        ['id'=>29, 'name'=>'LG UltraGear 27GN', 'description'=>'Màn hình gaming tần số quét cao cho game hành động và thi đấu.', 'category'=>'Màn hình', 'price'=>6990000, 'keywords'=>'monitor màn hình gaming chơi game tần số quét cao game thủ', 'specs'=>['Kích thước'=>'27 inch', 'Độ phân giải'=>'QHD (2560 x 1440)', 'Tấm nền'=>'Nano IPS', 'Tần số quét'=>'144Hz (OC 165Hz)']],
        ['id'=>30, 'name'=>'AOC 24G2', 'description'=>'Màn hình gaming 24 inch phổ thông phù hợp học tập và chơi game.', 'category'=>'Màn hình', 'price'=>3790000, 'keywords'=>'màn hình monitor giá rẻ gaming học tập chơi game', 'specs'=>['Kích thước'=>'23.8 inch', 'Độ phân giải'=>'FHD (1920 x 1080)', 'Tấm nền'=>'IPS', 'Tần số quét'=>'144Hz']],
        ['id'=>31, 'name'=>'Canon EOS R50', 'description'=>'Máy ảnh mirrorless nhỏ gọn cho chụp ảnh, quay video và sáng tạo nội dung.', 'category'=>'Máy ảnh', 'price'=>17990000, 'keywords'=>'camera máy ảnh chụp ảnh quay video sáng tạo nội dung', 'specs'=>['Cảm biến'=>'APS-C 24.2MP', 'Quay video'=>'4K 30p không crop', 'Màn hình'=>'Xoay lật cảm ứng', 'Trọng lượng'=>'375g']],
        ['id'=>32, 'name'=>'Sony ZV-E10', 'description'=>'Máy ảnh hướng đến vlog, quay video, livestream và làm nội dung trực tuyến.', 'category'=>'Máy ảnh', 'price'=>14990000, 'keywords'=>'máy ảnh camera vlog quay phim livestream youtube video', 'specs'=>['Cảm biến'=>'APS-C 24.2MP', 'Micro'=>'Tích hợp mic 3 capsule', 'Lấy nét'=>'Mắt tự động (Eye AF)', 'Ngàm ống kính'=>'Sony E']],
        ['id'=>33, 'name'=>'JBL Flip 6', 'description'=>'Loa Bluetooth di động nghe nhạc trong phòng hoặc khi đi dã ngoại.', 'category'=>'Âm thanh', 'price'=>2490000, 'keywords'=>'loa bluetooth nghe nhạc âm thanh di động', 'specs'=>['Công suất'=>'20W RMS', 'Chống nước'=>'IP67', 'Thời gian phát'=>'12 giờ', 'Kết nối'=>'Bluetooth 5.1']],
        ['id'=>34, 'name'=>'Marshall Emberton II', 'description'=>'Loa Bluetooth nhỏ gọn với thiết kế cổ điển để nghe nhạc hằng ngày.', 'category'=>'Âm thanh', 'price'=>3990000, 'keywords'=>'loa bluetooth nghe nhạc portable âm thanh', 'specs'=>['Công suất'=>'2x 10W (Âm thanh 360 độ)', 'Chống nước'=>'IP67', 'Thời gian phát'=>'30+ giờ', 'Trọng lượng'=>'700g']],
        ['id'=>35, 'name'=>'Apple Watch SE', 'description'=>'Đồng hồ thông minh theo dõi hoạt động, nhận thông báo và hỗ trợ luyện tập.', 'category'=>'Thiết bị đeo', 'price'=>5990000, 'keywords'=>'đồng hồ thông minh smartwatch theo dõi vận động sức khỏe', 'specs'=>['Kích thước'=>'40mm / 44mm', 'Màn hình'=>'OLED Retina', 'Chống nước'=>'50 mét', 'Tính năng'=>'Đo nhịp tim, Phát hiện ngã']],
        ['id'=>36, 'name'=>'Xiaomi Smart Band 8', 'description'=>'Vòng đeo tay thông minh theo dõi vận động, giấc ngủ và thông báo cơ bản.', 'category'=>'Thiết bị đeo', 'price'=>890000, 'keywords'=>'vòng tay thông minh fitness band theo dõi vận động', 'specs'=>['Màn hình'=>'1.62 inch AMOLED', 'Tần số quét'=>'60Hz', 'Pin'=>'Lên đến 16 ngày', 'Theo dõi'=>'SpO2, Nhịp tim 24/7']],
        ['id'=>37, 'name'=>'PlayStation 5 Slim', 'description'=>'Máy chơi game console cho trải nghiệm game tại nhà trên màn hình lớn.', 'category'=>'Thiết bị chơi game', 'price'=>11990000, 'keywords'=>'console máy chơi game ps5 gaming giải trí', 'specs'=>['Ổ đĩa'=>'Có (Bản Standard)', 'Lưu trữ'=>'1TB SSD', 'Đầu ra'=>'4K 120Hz', 'Tay cầm'=>'DualSense']],
        ['id'=>38, 'name'=>'Nintendo Switch OLED', 'description'=>'Máy chơi game cầm tay có thể kết nối TV, phù hợp chơi game linh hoạt.', 'category'=>'Thiết bị chơi game', 'price'=>7990000, 'keywords'=>'máy chơi game cầm tay handheld nintendo console gaming', 'specs'=>['Màn hình'=>'7.0 inch OLED', 'Lưu trữ'=>'64GB', 'Pin'=>'4.5 - 9 giờ', 'Chế độ'=>'TV Mode, Handheld, Tabletop']],
        ['id'=>39, 'name'=>'TP-Link Archer AX55', 'description'=>'Router Wi-Fi cho mạng gia đình, học trực tuyến và chơi game online.', 'category'=>'Thiết bị mạng', 'price'=>2190000, 'keywords'=>'wifi router mạng internet kết nối chơi game online', 'specs'=>['Chuẩn Wi-Fi'=>'Wi-Fi 6 (AX3000)', 'Băng tần'=>'2.4GHz & 5GHz', 'Ăng ten'=>'4 ăng ten ngoài', 'Cổng kết nối'=>'1 WAN, 4 LAN Gigabit']],
        ['id'=>40, 'name'=>'Logitech C920 HD Pro', 'description'=>'Webcam cho họp trực tuyến, học online và gọi video.', 'category'=>'Phụ kiện', 'price'=>1690000, 'keywords'=>'webcam camera họp trực tuyến học online gọi video', 'specs'=>['Độ phân giải'=>'1080p / 30fps', 'Ống kính'=>'Kính Full HD', 'Micro'=>'Mic kép đa hướng', 'Kết nối'=>'USB-A']]
    ];
}

function getCategories(array $products): array {
    $categories = array_unique(array_column($products, 'category'));
    sort($categories);
    return $categories;
}

function normalizeText(string $text): string {
    $text = mb_strtolower($text, 'UTF-8');
    $text = str_replace(
        ['á','à','ả','ã','ạ','ă','ắ','ằ','ẳ','ẵ','ặ','â','ấ','ầ','ẩ','ẫ','ậ','é','è','ẻ','ẽ','ẹ','ê','ế','ề','ể','ễ','ệ','í','ì','ỉ','ĩ','ị','ó','ò','ỏ','õ','ọ','ô','ố','ồ','ổ','ỗ','ộ','ơ','ớ','ờ','ở','ỡ','ợ','ú','ù','ủ','ũ','ụ','ư','ứ','ừ','ử','ữ','ự','ý','ỳ','ỷ','ỹ','ỵ','đ'],
        ['a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','e','e','e','e','e','e','e','e','e','e','e','i','i','i','i','i','o','o','o','o','o','o','o','o','o','o','o','o','o','o','o','o','o','u','u','u','u','u','u','u','u','u','u','u','y','y','y','y','y','d'],
        $text
    );
    $text = preg_replace('/[^a-z0-9\s]+/u', ' ', $text);
    return trim(preg_replace('/\s+/', ' ', $text));
}

function filterProducts(array $products, string $category, $minPrice, $maxPrice): array {
    $min = ($minPrice !== '' && is_numeric($minPrice)) ? max(0, (float)$minPrice) : null;
    $max = ($maxPrice !== '' && is_numeric($maxPrice)) ? max(0, (float)$maxPrice) : null;

    return array_values(array_filter($products, function ($product) use ($category, $min, $max) {
        if ($category !== '' && $category !== 'all' && $product['category'] !== $category) return false;
        if ($min !== null && $product['price'] < $min) return false;
        if ($max !== null && $product['price'] > $max) return false;
        return true;
    }));
}

function keywordSearch(array $products, string $query): array {
    $queryNormalized = normalizeText($query);
    if ($queryNormalized === '') return [];

    $terms = array_values(array_filter(explode(' ', $queryNormalized), function ($term) {
        return mb_strlen($term, 'UTF-8') > 1;
    }));
    if (!$terms) return [];

    $results = [];
    foreach ($products as $product) {
        $haystack = normalizeText($product['name'] . ' ' . $product['description'] . ' ' . $product['category'] . ' ' . $product['keywords']);
        $score = 0;
        
        // Cờ kiểm tra: Bắt buộc phải có MỌI từ trong truy vấn (AND logic)
        $matchAll = true; 
        foreach ($terms as $term) {
            if (preg_match('/\b' . preg_quote($term, '/') . '\b/u', $haystack)) {
                $score += preg_match('/\b' . preg_quote($term, '/') . '\b/u', normalizeText($product['name'])) ? 3 : 1;
            } else {
                $matchAll = false; // Thiếu 1 từ là đánh dấu rớt luôn
                break; 
            }
        }

        // Chỉ đưa vào danh sách nếu chứa TẤT CẢ các từ khóa
        if ($matchAll && $score > 0) {
            $product['_score'] = $score;
            $results[] = $product;
        }
    }
    
    usort($results, fn($a, $b) => $b['_score'] <=> $a['_score']);
    return $results;
}

function semanticSearch(array $products, string $query): array {
    $normalizedQuery = normalizeText($query);
    if ($normalizedQuery === '') return [];

    $concepts = [
        ['dien thoai','smartphone','mobile','thiet bi di dong','iphone','samsung','pixel','android','cell phone'],
        ['man hinh gap','gap','fold','foldable','z fold','gap lai'],
        ['chup anh dep','camera','chup anh','anh','chup dem','zoom','xu ly anh','chan dung','selfie','quay video'],
        ['may tinh','laptop','may tinh xach tay','macbook','notebook','pc','computer'],
        ['hoc lap trinh','lap trinh','code','coding','sinh vien','hoc tap','programming','viet code','phat trien phan mem'],
        ['choi game','gaming','game','hieu nang','gpu','game thu','console','ps5'],
        ['nghe nhac','tai nghe','headphone','am thanh','chong on','music','loa','bluetooth'],
        ['ghi chu hoc tap','ghi chu','tablet','may tinh bang','ipad','doc tai lieu','hoc online','doc sach'],
        ['man hinh may tinh','monitor','hien thi','display','man hinh gaming'],
        ['sac pin','sac du phong','power bank','pin du phong','sac dien thoai'],
        ['chuot','mouse','chuot gaming','chuot khong day'],
        ['ban phim','keyboard','ban phim co','go phim'],
        ['luu tru','ssd','o cung','ram','bo nho','linh kien'],
        ['dong ho thong minh','smartwatch','vong tay thong minh','theo doi van dong','fitness band'],
        ['hoc truc tuyen','hop truc tuyen','webcam','goi video','livestream','vlog'],
        ['mang internet','wifi','router','ket noi mang','mang gia dinh']
    ];

    $expanded = [$normalizedQuery];
    foreach ($concepts as $phrases) {
        $matched = false;
        foreach ($phrases as $phrase) {
            $normalizedPhrase = normalizeText($phrase);
            if (preg_match('/\b' . preg_quote($normalizedPhrase, '/') . '\b/u', $normalizedQuery)) {
                $matched = true;
                break;
            }
        }
        if ($matched) {
            foreach ($phrases as $phrase) $expanded[] = normalizeText($phrase);
        }
    }

    $stopWords = ['tim','kiem','cho','toi','mot','cac','va','co','gia','re','tot','loai','nao','phu','hop','de','may','tinh','phu','kien','linh'];
    $queryTerms = array_values(array_unique(array_filter(explode(' ', $normalizedQuery), function ($term) use ($stopWords) {
        return mb_strlen($term, 'UTF-8') > 1 && !in_array($term, $stopWords, true);
    })));
    
    $exactPhrase = implode(' ', $queryTerms);
    $results = [];
    
    foreach ($products as $product) {
        $haystack = normalizeText($product['name'] . ' ' . $product['description'] . ' ' . $product['category'] . ' ' . $product['keywords']);
        $score = 0;

        // Điểm cho từ đơn rất thấp để tránh nhiễu
        foreach ($queryTerms as $term) {
            if (preg_match('/\b' . preg_quote($term, '/') . '\b/u', $haystack)) $score += 1;
        }

        // Tăng điểm cực mạnh nếu chứa nguyên cụm từ (ví dụ: chứa liền chữ "ban phim")
        if ($exactPhrase !== '' && preg_match('/\b' . preg_quote($exactPhrase, '/') . '\b/u', $haystack)) {
            $score += 15;
        }

        // Tăng điểm cho các từ đồng nghĩa mở rộng
        foreach (array_unique($expanded) as $phrase) {
            if ($phrase !== '' && preg_match('/\b' . preg_quote($phrase, '/') . '\b/u', $haystack)) {
                $score += 5;
            }
        }

        if (preg_match('/\bgap\b/u', $normalizedQuery) && preg_match('/\bfold\b/u', $haystack)) $score += 8;
        if ((preg_match('/\blap trinh\b/u', $normalizedQuery) || preg_match('/\bhoc tap\b/u', $normalizedQuery)) && preg_match('/\blaptop\b/u', $haystack)) $score += 4;
        if ((preg_match('/\bchup anh\b/u', $normalizedQuery) || preg_match('/\bcamera\b/u', $normalizedQuery)) && preg_match('/\bcamera\b/u', $haystack)) $score += 4;

        // Điểm sàn (Threshold): Chỉ trả về kết quả có điểm >= 4 
        // -> Loại bỏ ngay những sản phẩm chỉ dính chữ "ban" hoặc "phim" rác
        if ($score >= 4) {
            $product['_score'] = $score;
            $results[] = $product;
        }
    }

    usort($results, fn($a, $b) => $b['_score'] <=> $a['_score']);
    return $results;
}
?>