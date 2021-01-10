<?php
//نام میزبان
$db_host = "localhost"; 
//MySQL نام کاربری
$db_user = "root";
//MySQL کلمه عبور
$db_password = "";
//نام پایگاه داده
$db_name = "saipa";
//اتصال به سرور و پایگاه داده
$connect = mysqli_connect("$db_host", "$db_user", "$db_password");

//انتخاب دیتابیس
mysqli_select_db($connect,"$db_name");

//تنظیم کاراکترها سازگار با فارسی
$set = mysqli_query($connect,"SET NAMES 'utf8'")
or die(mysqli_error());	
?>