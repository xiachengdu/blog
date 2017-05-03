<?php
    require_once("config.php")
?>
<!DOCTYPE html>
    <html>
    <head>
        <title><?php echo $config_blogname; ?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id = "all">
        <div id = "header">
            <div id = "logo">
                <h1><?php echo $config_blogname ?></h1>
            </div>
            <div id = "indexs">
            <a href = "/blog">首页</a>
            <a href = "/blog/post.php">新增</a>
            <a href = "">模块二</a>
            <a href = "">模块三</a>
            </div> 
        </div>
