<?php
//主题 head 开头 meta 信息
include( dirname( __FILE__ ) . '\header_meta.php' );
?>

<?php
//主题 head 开头 link 样式文件
include( dirname( __FILE__ ) . '\header_link.php' );
?>

<?php
// WordPress wp_head();附加输出
// wp_head();
// WordPress wp_head();附加输出结束
?>

<?php
//主题 head 结尾
include( dirname( __FILE__ ) . '\header_end.php' );
?>

<body>
<!-- body -->

<?php
//主题 body header全局导航栏
include( dirname( __FILE__ ) . '\body_header_nav.php' );
?>

<?php
//主题 body 正文部分
?>

<div class="container well">
    <div class="row well_test">
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->
        <div class="col-md-12 well_test">
            <div id="" class="" style="height: 500px;"></div>
        </div><!-- .col-md-12 -->

    </div><!-- .row -->
</div><!-- .container -->


<?php
//主题 body footer 全局导航栏
include( dirname( __FILE__ ) . '\body_footer_nav.php' );
?>


<?php
//主题 body footer 调试打印输出
if($wxy_debug_file) {
    include( dirname( __FILE__ ) . '\body_footer_print.php' );
}
?>


<?php
//主题 body footer Javascript 文件引入
include( dirname( __FILE__ ) . '\body_footer_script.php' );
?>

<!-- -->
<?php
//wp_footer();附加输出
//wp_footer();
//wp_footer();附加输出结束
?>

<!-- body End -->
</body>
</html>