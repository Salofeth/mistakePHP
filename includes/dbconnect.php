<?php
//文件名称：数据库连接字符串
//修改日期：2017/7/2

//设定调试信息函数
    //输出当前引用文件路径以及信息
    if($wxy_debug_file) {
        echo('<pre>');
        echo('<label>引用的当前文件为：</label>'.basename(__FILE__ ).'</br><label>此文件的路径为：</label>');
        print_r(__FILE__ );
        echo('</pre>');
    }

//以下为正式区域


$servername = "localhost";
$username = "root";
$password = "root";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);

//检测连接
    //输出调试信息
    if($wxy_debug_file) {
        if (!$conn) {
            die("数据库连接失败" . mysqli_connect_error());
        }else{
            echo "数据库连接成功";
        }
    }



































?>