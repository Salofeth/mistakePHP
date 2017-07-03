<!-- PHP信息输出 -->
<footerprint>
    <div id="" class="container">
        <div id="" class="row well_test">
            <div id="print_1F" class="col-md-12 well_test">
                <label>获取URL相关 </label>
                    <?php
                    echo('<pre>');
                    echo(' '.'<label>变量 dirname(__FILE__) </label>  =  ');
                    print_r(dirname(__FILE__)."<br>");
                    #测试网址:     http://localhost/blog/testurl.php?id=5
                    echo '//获取域名或主机地址'."<br>";
                    echo $_SERVER['HTTP_HOST']."<br>";
                    #localhost
                    echo '//获取网页地址'."<br>";
                    echo $_SERVER['PHP_SELF']."<br>";
                    #/blog/testurl.php
                    echo '//获取网址参数'."<br>";
                    echo $_SERVER["QUERY_STRING"]."<br>";
                    #id=5
                    echo '//获取完整的url'."<br>";
                    echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."<br>";
                    echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']."<br>";
                    #http://localhost/blog/testurl.php?id=5
                    echo '//包含端口号的完整url'."<br>";
                    echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]."<br>";
                    #http://localhost:80/blog/testurl.php?id=5
                    echo '//只取路径'."<br>";
                    $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]."<br>";
                    echo dirname($url);
                    #http://localhost/blog
                    echo('</pre>');
                    ?>
            </div>
            <div id="print_2F" class="col-md-12 well_test">
                <label>获取所有可用的模块</label>
                    <?php
                    // function_exists() - 如果给定的函数已经被定义就返回 TRUE
                    echo('<pre>');
                    echo(' '.'<label>变量 get_loaded_extensions() 获取所有可用的模块 </label>  =  ');
                    print_r(get_loaded_extensions());
                    echo('</pre>');
                    ?>
            </div>
            <div id="print_3F" class="col-md-12 well_test">
                <label>返回由所有已定义变量所组成的数组</label>
                    <?php
                    echo('<pre>');
                    echo(' '.'<label>变量 get_defined_vars() 返回由所有已定义变量所组成的数组 </label>  =  ');
                    print_r(get_defined_vars());
                    echo('</pre>');
                    ?>
            </div>
            <div id="print_4F" class="col-md-12 well_test">
                <label>返回所有常量的关联数组，键是常量名，值是常量值</label>
                    <?php
                    echo('<pre>');
                    echo(' '.'<label>变量 get_defined_constants() 返回所有常量的关联数组，键是常量名，值是常量值 </label>  =  ');
                    print_r(get_defined_constants());
                    echo('</pre>');
                    ?>
            </div>
            <div id="print_5F" class="col-md-12 well_test">
                <label>返回由已定义类的名字所组成的数组</label>
                    <?php
                    echo('<pre>');
                    echo(' '.'<label>变量 get_declared_classes() 返回由已定义类的名字所组成的数组 </label>  =  ');
                    print_r(get_declared_classes());
                    echo('</pre>');
                    ?>
            </div>
            <div id="print_6F" class="col-md-12 well_test">
                <label>返回所有已定义函数的数组</label>
                    <?php
                    echo('<pre>');
                    echo(' '.'<label>变量 get_defined_functions() 返回所有已定义函数的数组 </label>  =  ');
                    print_r(get_defined_functions());
                    echo('</pre>');
                    ?>
            </div>
            <div id="print_7F" class="col-md-12 well_test">
                <label>以下为PHP超级全局变量输出 </label>
                    <?php
                    echo('<pre>');
                    //以下为PHP超级全局变量输出
                    echo(' '.'<label>变量 $_REQUEST </label>  =  ');
                    var_dump($_REQUEST) ;echo(' ');
                    echo(' '.'<label>变量 $_POST </label>  =  ');
                    var_dump($_POST) ;echo(' ');
                    echo(' '.'<label>变量 $_GET </label>  =  ');
                    var_dump($_GET) ;echo(' ');
                    echo(' '.'<label>变量 $_FILES </label>  =  ');
                    var_dump($_FILES) ;echo(' ');
                    echo(' '.'<label>变量 $_ENV </label>  =  ');
                    var_dump($_ENV) ;echo(' ');
                    echo(' '.'<label>变量 $_SESSION </label>  =  ');
                    var_dump($_SESSION) ;echo(' ');
                    echo(' '.'<label>变量 $_SERVER </label>  =  ');
                    var_dump($_SERVER) ;echo(' ');
                    echo('</pre>');
                    ?>
            </div>
            <div id="print_8F" class="col-md-12 well_test">
                <label>8F待整理 </label>
            </div>
            <div id="print_9F" class="col-md-12 well_test">
                <label>9F待整理 </label>

            </div>
            <div id="print_10F" class="col-md-12 well_test">
                <label>10F待整理 </label>
            </div>
            <div id="print_11F" class="col-md-12 well_test">
                <label>11F待整理 </label>
            </div>
            <div id="print_12F" class="col-md-12 well_test">
                <label>12F待整理 </label>
            </div>
            <div id="print_13F" class="col-md-12 well_test">
                <label>13F待整理 </label>
            </div>
            <div id="print_14F" class="col-md-12 well_test">
                <label>14F待整理</label>
            </div>
            <div id="print_15F" class="col-md-12 well_test">
                <label>15F待整理</label>
            </div>
        </div>
    </div>

<!-- 导航目录 -->
<div  id="navbar-example" class="" style="position: fixed;bottom: 100px;right: 25px;border-radius: 5px;background-color: ivory;">
    <ul class="nav nav-pills nav-stacked nav-tabs"  role="tablist">
         <li><a href="#print_1F">获取URL相关</a></li>
         <li><a href="#print_2F">所有可用的模块</a></li>
         <li><a href="#print_3F">所有已定义变量</a></li>
         <li><a href="#print_4F">所有已定义常量</a></li>
         <li><a href="#print_5F">所有已定义类</a></li>
         <li><a href="#print_6F">所有已定义函数</a></li>
         <li><a href="#print_7F">PHP超级全局变量</a></li>
         <li><a href="#print_8F">8F待整理</a></li>
         <li><a href="#print_9F">9F待整理</a></li>
         <li><a href="#print_10F">10F待整理</a></li>
         <li><a href="#print_11F">11F待整理</a></li>
         <li><a href="#print_12F">12F待整理</a></li>
         <li><a href="#print_13F">13F待整理</a></li>
         <li><a href="#print_14F">14F待整理</a></li>
         <li><a href="#print_15F">15F待整理</a></li>
    </ul>
</div>
<!-- 导航目录结束 -->

</footerprint>
<!-- PHP信息输出结束 -->
