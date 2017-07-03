<?php
//文件名称：控制CSS JS路径
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


//声明CSS资源路径
$bootstrap_css=( 'http://'.$_SERVER['HTTP_HOST'].'/ui/css/bootstrap-3.3.7/bootstrap.css' );
$awesome_css=( 'http://'.$_SERVER['HTTP_HOST'].'/ui/css/font-awesome-4.7.0/font-awesome.css' );
$animate_css=( 'http://'.$_SERVER['HTTP_HOST'].'/ui/css/animate-3.5.1/animate.css' );
$hover_css=( 'http://'.$_SERVER['HTTP_HOST'].'/ui/css/hover-2.2.0/hover.css' );
$style_css=( 'http://'.$_SERVER['HTTP_HOST'].'/style.css' );
$mystyle_css=( 'http://'.$_SERVER['HTTP_HOST'].'/ui/css/mystyle.css' );
$favicon_ico=( 'http://'.$_SERVER['HTTP_HOST'].'/ico/favicon.ico' );
$favicon_gif=( 'http://'.$_SERVER['HTTP_HOST'].'/ico/favicon.gif' );

//声明javascript资源路径
$jquery_script=( 'http://'.$_SERVER['HTTP_HOST'].'/ui/js/jquery-3.2.1/jquery.js' );
$bootstrap_script=( 'http://'.$_SERVER['HTTP_HOST'].'/ui/js/bootstrap-3.3.7/bootstrap.js' );
$myjs_script=( 'http://'.$_SERVER['HTTP_HOST'].'/ui/js/myjs.js' );

?>