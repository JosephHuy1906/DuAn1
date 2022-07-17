<?php
    class connect
    {
        // Thuộc tính
        var $db = null;
        // Phương thức
        function __construct(){
            $servername = "localhost";
            $username = "root";
            $password = "";

            $this->db = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        //Gửi câu truy vấn lấy nguyên bảng dữ liệu
        function getList($select){
            $results = $this->db->query($select);
            $result = $results->fetchAll();
            return $result;
        }

        //Gửi câu truy vấn lấy 1 dòng dữ liệu
        function getInstance($select){
            $results = $this->db->query($select);
            $result = $results->fetch();
            return $result;
        }

        //Thực thi câu lệnh thêm , xóa , sửa
        function exec($query){
            $result = $this->db->query($query);
            return $result;
        }
    }
?>
<!-- NOTE CHO AE - 3 HÀM TRÊN ĐƯỢC SỬ DỤNG ĐỂ KHỞI TẠO ĐỐI TƯỢNG LÀ FUNCTION (HÀM) THỰC HIỆN NHỮNG CÂU TRUY VẤN
NHƯ LÀ LẤY SẢN PHẨM , THÊM XÓA SỬA. 3 HÀM TRÊN SỬ DỤNG CHO MODEL KHI AE TẠO ĐỐI TƯỢNG -->