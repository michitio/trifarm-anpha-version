truy cập vào link => dẫn đến index.php => dẫn đến controler, gọi hàm invoke xử lý link 
    => khai thác database tương ứng và dẫn đến view

ở tầng model có: 
OOP và một model chung để query dữ liệu
trong model chung gọi đến db_module để query như bình thường
config hỗ trợ lưu trữ tên database cho db_module

ở tầng view có: một trang basepage chứa header, footer và main (mỗi cái sẽ trong một folder riêng)
tuy nhiên các folder này chỉ chứa file php, các file khác lưu trữ trong thư mục assets
folder main chứa: các folder search, home, detail - ở đây sẽ chứa các file cho content tương ứng

