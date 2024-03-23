<?php
//file môi trường
//thường được dùng để lưu các biến môi trường
//khi cần thay đổi một giá trị cấu hình thì bạn chỉ cần thay đổi tệp env
//=>giảm rui ro lỗi và quản lý cấu hình dễ dàng
const BASE_URL="http://localhost/php/PHP2_WD18301_WEB3014/test/";
const IMG_URL="public/assets/img/courses/";
const DBHOST= "localhost";
const DBNAME = "ezcode1"; //username database
const DBCHARSET = "utf8";
const DBUSER = "root";
const DBPASS ="";
function route($url)
{
    return BASE_URL.$url;
}
?>