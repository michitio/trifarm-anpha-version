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


database add
https://docs.google.com/spreadsheets/d/1hXD336KKycFJdMWwEnL7JpLiyxYaYvxDH2sLBbLetys/edit#gid=0


Khi đăng ký

1. điền form
2. form gửi cho xulydangky.php bằng post
3. ở xử lý đăng ký:
	check xem điền đủ các mục chưa
	check xem dữ liệu vào có đúng không - bao gồm cả captcha
	check xem đã tồn tại username trong hệ thống chưa

	gửi các loại message về:
		username đã tồn tại
		đăng ký thành công
		các ô nhập không đúng (captcha), chưa thoả điều kiện

	dùng các hàm kiểm tra (độ dài chuỗi, tài khoản tồn tại)

4. nếu thoả điều kiện đăng ký thì gọi user module (đăng nhập, đăng ký đăng xuất) cho đăng ký

5. gửi message về trang đăng ký ban đầu và hiển thị thông tin cho người dùng

