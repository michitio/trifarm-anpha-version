truy cập vào link => dẫn đến index.php => dẫn đến controler, gọi hàm invoke xử lý link 
    => khai thác database tương ứng và dẫn đến view

ở tầng model có: 
OOP và một model chung để query dữ liệu
trong model chung gọi đến db_module để query như bình thường
config hỗ trợ lưu trữ tên database cho db_module

ở tầng view có: 
basepage.php
header
    |_files
    |_...
footer
    |_files
    |_...
main
    |_search
        |_files
        |_...
    |_home
        |_files
        |_...
    |_detail
        |_files
        |_...
    
folder chỉ chứa file php, các file khác lưu trữ trong thư mục assets

bảng user đăng nhập: làm sau

đổi đường dẫn chính (đổi cổng xampp) controlers/controler.php 
    public $index = 'http://localhost/trifarm-anpha-version';



-------SEARCH-------

hoàn hiện các nút bấm filter + sort

tối ưu css trang search

pagination
ajax
lịch sử tìm kiếm

-------------

cách làm danh mục sản phẩm

PHP

query list sản phẩm
dùng SELECT DISTINCT lấy list id category
tạo thêm model lấy category từ list
hiển thị list ra
value radio là các id_category hoặc để trống cho tất cả sản phẩm
js khi click thì lấy value từ $key có sẵn + có cate thì thêm ~category=1
chuyển trang

mặc định tất cả sản phẩm
+những loại sản phẩm khác

nơi bán là checkbox cách nhau bằng dấu - (giống lọc giá)
còn lại giống danh mục sp

mặc định là chọn khoảng giá từ thấp nhất đến cao nhất

đánh giá thêm mặc định tất cả

sort
phổ biến là số sao
mới nhất là theo id đảo ngược
bán chạy xếp theo sold
giá cao đến thấp
giá thấp đến cao

page
thêm biến trên url

----------
Mai lên lớp làm:
database
pagination
search
ajax