// Hàm xử lý tìm kiếm
function handleSearch(event) {
    // Ngăn chặn form submit mặc định
    event.preventDefault();

    // Lấy giá trị từ input
    const searchInput = document.getElementById('searchInput');
    const searchTerm = searchInput.value.trim();

    // Kiểm tra nếu có giá trị tìm kiếm
    if (searchTerm !== '') {
        // Mã hóa từ khóa tìm kiếm
        const searchQuery = encodeURIComponent(searchTerm);

        // Chuyển hướng đến trang MySQL
        window.location.href = `MySQL.html?search=${searchQuery}`;
        return false; // Ngăn form submit
    }
    return false; // Ngăn form submit nếu không có giá trị
}

// Thêm sự kiện khi trang được tải
document.addEventListener('DOMContentLoaded', function () {
    // Lấy form tìm kiếm
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');

    if (searchForm) {
        // Thêm sự kiện submit cho form
        searchForm.addEventListener('submit', handleSearch);
    }

    if (searchInput) {
        // Thêm sự kiện cho phím Enter
        searchInput.addEventListener('keypress', function (event) {
            if (event.key === 'Enter') {
                handleSearch(event);
            }
        });
    }
});

// Thêm hàm tìm kiếm trực tiếp (có thể gọi từ onclick)
function searchDirect() {
    const searchInput = document.getElementById('searchInput');
    if (searchInput && searchInput.value.trim() !== '') {
        const searchQuery = encodeURIComponent(searchInput.value.trim());
        window.location.href = `MySQL.html?search=${searchQuery}`;
    }
    return false;
}