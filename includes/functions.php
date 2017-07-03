<?php
//文件名称：核心函数文件
//修改日期：2017/7/2

//设定调试信息
    //是否输出所有引用文件信息
    $wxy_debug_file = TRUE;//FALSE//TRUE

//设定调试信息函数
    //输出当前引用文件路径以及信息
    if($wxy_debug_file) {
        echo('<pre>');
        echo('<label>引用的当前文件为：</label>'.basename(__FILE__ ).'</br><label>此文件的路径为：</label>');
        print_r(__FILE__ );
        echo('</pre>');
    }

//以下为正式区域


//关键性文件加载
//require( dirname( __FILE__ ) . '/XXX/XXXXX.php' );//引用相对应当前文件的目录下的/XXX/XXXXX.php;//错误返回警告并停止
//include( dirname( __FILE__ ) . '/XXX/XXXXX.php' );//引用相对应当前文件的目录下的/XXX/XXXXX.php;//错误返回警告并跳过


require( dirname( __FILE__ ) . '\dbconnect.php' );

//加载声明封装的函数
require( dirname( __FILE__ ) . '\cssjs.php' );

























//以下为正式区域






































?>