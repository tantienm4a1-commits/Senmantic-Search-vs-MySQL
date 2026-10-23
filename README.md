# Đồ án PHP: Semantic Search & Vector Database vs MySQL

## Chức năng
- Tìm kiếm truyền thống bằng `LIKE` trong MySQL.
- Tìm kiếm ngữ nghĩa: PHP gửi câu hỏi đến API tạo embedding, sau đó tìm vector tương tự trong ChromaDB.
- Đồng bộ tài liệu từ MySQL sang ChromaDB.
- Có sẵn 10 tài liệu mẫu và giao diện responsive dùng Bootstrap.

## 1. Chạy PHP + MySQL bằng WampServer
1. Chép thư mục `semantic_search_php` vào `C:\wamp64\www\` (đường dẫn có thể khác tùy máy).
2. Mở WampServer và bật Apache + MySQL.
3. Vào `http://localhost/phpmyadmin`.
4. Chọn Import và nhập file `sql/schema.sql`. File sẽ tạo database `semantic_search_demo`, bảng `documents` và dữ liệu mẫu.
5. Mở `config.php` và sửa `DB_USER`, `DB_PASS` nếu cấu hình MySQL trên máy bạn khác mặc định.
6. Mở `http://localhost/semantic_search_php/`.

Chỉ tìm kiếm MySQL thì không cần OpenAI API key hoặc ChromaDB.

## 2. Bật tìm kiếm ngữ nghĩa với ChromaDB

### Cài và chạy ChromaDB
Cài Python trước, sau đó mở Command Prompt/PowerShell và chạy:

```bash
pip install chromadb
chroma run --host 127.0.0.1 --port 8000 --path ./chroma_data
```

Giữ cửa sổ này mở khi sử dụng tìm kiếm ngữ nghĩa. Nếu máy đã dùng cổng 8000, đổi cổng trong lệnh chạy và sửa `CHROMA_URL` trong `config.php` cho trùng.

### Cấu hình OpenAI Embeddings
1. Cần một API key có quyền gọi API Embeddings. Chi phí tính theo lượng văn bản đưa vào API; hãy xem giá và giới hạn tài khoản trước khi sử dụng.
2. Mở `config.php`, điền khóa vào `OPENAI_API_KEY` ở máy local. Không gửi khóa cho người khác và không đưa file chứa khóa lên GitHub.
3. Mở `http://localhost/semantic_search_php/sync.php`, nhấn **Bắt đầu đồng bộ**.
4. Quay lại trang chính, chọn **Tìm kiếm ngữ nghĩa (AI + ChromaDB)** và tìm thử.

Mỗi lần thêm/sửa tài liệu trong MySQL, cần chạy đồng bộ lại để cập nhật vector ở ChromaDB.

## 3. Kiểm tra hai phương pháp
Thử truy vấn `mình muốn tìm cách AI hiểu ý nghĩa câu hỏi`.
- Chế độ MySQL `LIKE` chỉ trả về bản ghi có chứa cụm từ khớp trong tiêu đề, danh mục hoặc nội dung.
- Chế độ Semantic Search tạo embedding cho câu hỏi và tìm các tài liệu gần nghĩa; kết quả phụ thuộc mô hình embedding và dữ liệu đã đồng bộ.

## 4. Yêu cầu môi trường
- PHP 8 trở lên, extension `pdo_mysql` và `curl` bật.
- MySQL/MariaDB.
- ChromaDB chạy cục bộ nếu dùng Semantic Search.
- Khóa API Embeddings nếu dùng tính năng AI.

## 5. Các file chính
- `index.php`: giao diện và xử lý tìm kiếm hai chế độ.
- `functions.php`: gọi OpenAI Embeddings và ChromaDB REST API.
- `database.php`: kết nối MySQL bằng PDO.
- `config.php`: cấu hình kết nối.
- `sync.php`: đồng bộ dữ liệu từ MySQL sang ChromaDB.
- `sql/schema.sql`: tạo bảng và dữ liệu mẫu.

## Ghi chú cho báo cáo
Bản mẫu này triển khai ChromaDB để có thể chạy local. Pinecone là một lựa chọn Vector Database khác; cách tiếp cận chung vẫn là tạo embedding, lưu vector và truy vấn các vector gần nhau, nhưng cấu hình endpoint và xác thực sẽ khác ChromaDB.
