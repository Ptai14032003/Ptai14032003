<?php

//hàm kết nối cơ sở dữ liệu 
function connection()
{
    try {
        $connect = new PDO("mysql:host=localhost; dbname=duan1; charset=utf8", "root", "");
        return $connect;
    } catch (PDOException $e) {
        echo "Lỗi kết nối  dữ liệu: " . $e->getMessage();
    }
}
