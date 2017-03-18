<?php
	/* 数据库配置文件 */
    $conf_array = (parse_ini_file("config.ini"));
    $db_host = $conf_array["db_host"];
    $db_user = $conf_array["db_user"];
    $db_password = $conf_array["db_password"];
    $db_database = $conf_array["db_database"];

    /*博客配置文件*/
    $config_blogname = "TerTest";
    $config_basedir = "http://localhost/blog";
    $config_foottext = "浙ICP10086号";
?>
