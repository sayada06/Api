<?php

    include('../config.de.php'); //นำไฟล์ config.de.php มาใช้
    $table = "CREATE TABLE members(
    id int(6) AUTO_INCREMENT COMMENT 'เลขที่',
    id_stu int(6) COMMENT 'รหัสนักเรียน',
    name varchar(100) COMMENT 'ชื่อ-สกุล',
    nname varchar(100) COMMENT 'ชื่อเล่น',
    age varchar(100) COMMENT 'อายุ',
    phone varchar(13) COMMENT 'เบอร์โทรศัพท์',
    address varchar(255) COMMENT 'ที่อยู่',
    status varchar(255) COMMENT 'สถานะภาพ',
    PRIMARY KEY (id)
    )";

    if($conn->query($table)===TRUE){
        echo "สร้างตารางฐานข้อมูลสำเร็จ";
    }else{
        echo "ไม่สามารถสร้างตารางข้อมูลได้".conn->error;
    }

    $conn->close(); //ปิดการเชื่อมต่อฐานข้อมูล

?>