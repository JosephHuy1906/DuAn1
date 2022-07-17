<?php
    class sanpham
    {
        //Thuộc tính
        var $maSP = null;
        var $tenSP = null;
        var $maLoai = null;
        var $hinh = null;
        var $giaTien = null;
        var $giaMoi = null;
        var $mota = null;

        // Phương thức
        public function __construct(){
            if(func_num_args() == 7){
                $this->maSP = func_get_arg(0);
                $this->tenSP = func_get_arg(1);
                $this->maLoai = func_get_arg(2);
                $this->hinh = func_get_arg(3);
                $this->giaTien = func_get_arg(4);
                $this->giaMoi = func_get_arg(5);
                $this->mota = func_get_arg(6);
            }
        }

        // Lấy nguyên bảng sản phẩm
        public function laySP(){
            $db = new connect();
            $strQuery = "SELECT * FROM sanpham";
            $result = $db->getList($strQuery); //  hàm getlist ở đây là hàm lấy nguyên 1 bảng đã được tạo từ trước ở file connect.php
            return $result;
        }
         // Lấy 4 sản phẩm mới nhất
        public function sanpham_new(){
            $db = new connect();
            $strQuery = "SELECT * FROM sanpham  ORDER BY maSP DESC limit 4";
            $result = $db->getList($strQuery); 
            return $result;
        }

        // Lấy sản phẩm theo id
        public function laySPById($maSP){
            $db = new connect();
            $strQuery = "SELECT * FROM sanpham WHERE maSP = '$maSP'";
            $result = $db->getInstance($strQuery); //  hàm getInstance ở đây là hàm lấy 1 dòng dữ liệu đã được tạo từ trước ở file connect.php
            return $result;
        }

        // Thêm sản phẩm (insert)
        public function themSP($maSP , $tenSP , $maLoai , $hinh , $giaTien , $giaMoi , $mota){
            $db = new connect();
            $strQuery = "INSERT INTO products (maSP , tenSP , maLoai , hinh , giaTien , giaMoi , mota) 
            VALUES ( null , '$tenSP' , '$maLoai' , null , '$giaTien' , '$giaMoi' , $mota)";
            $result = $db->exec($strQuery); //  hàm exec ở đây là hàm thêm xóa sửa đã được tạo từ trước ở file connect.php
            return $result;
        }

        // Sửa sản phẩm
        public function suaSP($maSP , $tenSP , $giaTien , $giaMoi , $mota){
            $db = new connect();
            $strQuery = "UPDATE sanpham SET tenSP = '$tenSP' , giaTien = '$giaTien' , giaMoi = '$giaMoi' , mota = '$mota' WHERE maSP = '$maSP'";
            $result = $db->exec($strQuery);
            return $result;
        }

        // Xóa sản phẩm
        public function xoaSP($maSP){
            $db = new connect();
            $strQuery = "DELETE FROM sanpham WHERE maSP = '$maSP'";
            $result = $db->exec($strQuery);
            return $result;
        }
    }
?>