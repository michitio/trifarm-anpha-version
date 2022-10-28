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

web đối chiếu phần detail
https://shopee.vn/(FREE-12T)-SIM-4G-MOBIFONE-ED60-12FD50-MDT250A-MI%E1%BB%84N-PH%C3%8D-12-TH%C3%81NG-X%C3%80I-TH%E1%BA%A2-GA-KH%C3%94NG-LO-V%E1%BB%80-GI%C3%81-SIM-NG%E1%BB%8CC-MAI-i.68033772.1636006918?sp_atk=7604f8e3-39b5-4a26-8380-e4e530813b48&xptdk=7604f8e3-39b5-4a26-8380-e4e530813b48

database product 

có

id
name
desc
img
price
id_category

thiếu

xuất xứ
số sao
số đánh giá
số đã bán
đơn vị tính
giá cũ - giá mới

bảng user đăng nhập: làm sau