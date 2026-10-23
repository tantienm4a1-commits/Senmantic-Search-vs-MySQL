document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('q');
    const form = document.getElementById('searchForm');
    const chips = document.querySelectorAll('[data-query]');

    chips.forEach(function (chip) {
        chip.addEventListener('click', function () {
            input.value = chip.dataset.query || '';
            form.requestSubmit();
        });
    });

    form.addEventListener('submit', function (event) {
        const min = form.querySelector('[name="min_price"]').value;
        const max = form.querySelector('[name="max_price"]').value;

        if (min !== '' && Number(min) < 0) {
            event.preventDefault();
            alert('Giá tối thiểu không được nhỏ hơn 0.');
            return;
        }

        if (max !== '' && Number(max) < 0) {
            event.preventDefault();
            alert('Giá tối đa không được nhỏ hơn 0.');
            return;
        }

        if (min !== '' && max !== '' && Number(min) > Number(max)) {
            event.preventDefault();
            alert('Giá từ không được lớn hơn giá đến.');
            return;
        }
    });

    // ==========================================
    // THÊM LOGIC XỬ LÝ MODAL CHI TIẾT SẢN PHẨM
    // ==========================================
    const modal = document.getElementById('productModal');
    const closeBtn = document.querySelector('.modal-close');
    const cards = document.querySelectorAll('.clickable-card');

    if (modal && cards.length > 0) {
        cards.forEach(card => {
            card.addEventListener('click', function() {
                // Đổ dữ liệu từ data-attributes vào Modal
                document.getElementById('modalTitle').textContent = this.dataset.title;
                document.getElementById('modalPrice').textContent = this.dataset.price + ' đ';
                document.getElementById('modalCategory').textContent = this.dataset.category;
                document.getElementById('modalDesc').textContent = this.dataset.desc;
                
                const specsList = document.getElementById('modalSpecsList');
                specsList.innerHTML = ''; // Làm sạch list trước
                
                try {
                    const specs = JSON.parse(this.dataset.specs);
                    if (Object.keys(specs).length > 0) {
                        for (const [key, value] of Object.entries(specs)) {
                            const li = document.createElement('li');
                            li.innerHTML = `<strong>${key}:</strong> <span>${value}</span>`;
                            specsList.appendChild(li);
                        }
                    } else {
                        specsList.innerHTML = '<li><span style="color: #9caac4">Đang cập nhật thông số...</span></li>';
                    }
                } catch(e) {
                    specsList.innerHTML = '<li><span style="color: #9caac4">Không có thông số cụ thể</span></li>';
                }

                modal.classList.add('active'); // Hiện modal
            });
        });

        // Đóng modal khi click nút X
        if(closeBtn) {
            closeBtn.addEventListener('click', () => {
                modal.classList.remove('active');
            });
        }

        // Đóng modal khi click ra vùng tối bên ngoài
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    }
});