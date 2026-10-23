CREATE DATABASE IF NOT EXISTS semantic_search_demo
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE semantic_search_demo;

CREATE TABLE IF NOT EXISTS documents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    category VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT INTO documents (title, category, content) VALUES
('Học lập trình C# cho người mới bắt đầu', 'Lập trình', 'Tài liệu hướng dẫn người mới làm quen biến, kiểu dữ liệu, câu điều kiện, vòng lặp, hàm và lập trình hướng đối tượng bằng ngôn ngữ C#.'),
('Cơ sở dữ liệu quan hệ và MySQL', 'Cơ sở dữ liệu', 'Giới thiệu cách lưu trữ dữ liệu trong bảng, khóa chính, khóa ngoại, câu lệnh SELECT, INSERT, UPDATE, DELETE và cách kết nối PHP với MySQL.'),
('Tìm kiếm ngữ nghĩa bằng AI', 'Trí tuệ nhân tạo', 'Semantic Search giúp hệ thống tìm tài liệu theo ý nghĩa của câu hỏi. Mô hình embedding chuyển văn bản thành vector số để so sánh mức độ liên quan.'),
('Giới thiệu ChromaDB và Vector Database', 'Trí tuệ nhân tạo', 'ChromaDB là cơ sở dữ liệu vector dùng để lưu embedding và truy xuất các văn bản gần nhau về mặt ngữ nghĩa. Nó thường được dùng cho tìm kiếm ngữ nghĩa và ứng dụng RAG.'),
('Pinecone trong hệ thống AI', 'Trí tuệ nhân tạo', 'Pinecone là dịch vụ cơ sở dữ liệu vector được quản lý trên nền tảng đám mây, hỗ trợ lưu vector, lọc metadata và tìm kiếm các vector tương tự.'),
('Xây dựng website PHP cơ bản', 'Lập trình web', 'PHP xử lý dữ liệu từ biểu mẫu HTML, kiểm tra đầu vào, tạo nội dung động và kết nối MySQL để xây dựng website quản lý thông tin.'),
('Ứng dụng RAG hỏi đáp theo tài liệu', 'Trí tuệ nhân tạo', 'RAG là phương pháp truy xuất tài liệu liên quan trước khi đưa ngữ cảnh cho mô hình ngôn ngữ tạo câu trả lời. Vector search thường được sử dụng ở bước truy xuất.'),
('Tìm kiếm từ khóa truyền thống', 'Cơ sở dữ liệu', 'Tìm kiếm truyền thống thường dùng LIKE hoặc FULLTEXT trong MySQL để xác định bản ghi có chứa từ khóa. Phương pháp này có thể không tìm thấy nội dung đồng nghĩa nếu từ khóa không xuất hiện.'),
('Embedding là gì?', 'Trí tuệ nhân tạo', 'Embedding là biểu diễn số của văn bản, hình ảnh hoặc dữ liệu khác. Các nội dung có ý nghĩa gần nhau thường có vector nằm gần nhau trong không gian nhiều chiều.'),
('Kết nối PHP với MySQL bằng PDO', 'Lập trình web', 'PDO cung cấp giao diện kết nối cơ sở dữ liệu trong PHP. Nên sử dụng prepared statement để truyền tham số an toàn và giảm nguy cơ SQL injection.');
