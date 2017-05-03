<?php
/**
* 正文内容页
*/
    $id = $_GET['id'];
    echo "<br>";
    $db = mysql_connect($db_host,$db_user,$db_password);
    mysql_select_db($db_database,$db);
    ?>
    <div id="main_page">
    <div id="content">

    <?php
    $sql = "select t.post_date,t.post_content,t.post_author,t.post_title from blog_posts t where t.id={$id}";
    $result = mysql_query($sql);
    $result_row = mysql_num_rows($result);
    if($result_row == 0) {
        echo "Opps!..there is something wrong here";
    }else{
        while($row = mysql_fetch_assoc($result)) {
            ?>
            <div class="post_title">
                <?php echo "{$row['post_title']} <br>";?>
            </div>
            <div class="post_author">
                <?php echo "{$row['post_author']} <br>";?>
            </div>
            <div class="post_date">
                <?php echo "{$row['post_date']} <br>";?>
            </div>
            <div class="post_content">
                <?php echo "{$row['post_content']} <br>";?>
            </div>

            <?php
        }
    }
    //查询前一个id
    $sql_pre = "select t.id from blog_posts t where t.id < {$id} order by t.id desc limit 1";
    $result_pre = mysql_query($sql_pre);
    while($row_pre = mysql_fetch_assoc($result_pre)) {
        $pre = $row_pre['id'];
    }
    //查询后一个id
    $sql_next = "select t.id from blog_posts t where t.id > {$id} order by t.id asc limit 1";
    $result_next = mysql_query($sql_next);
    while($row_next = mysql_fetch_assoc($result_next)) {
        $next = $row_next['id'];
    }
?>
        <!--TODO 功能已实现，待优化，未完成部分：最前面和最后面报SQL错误，已实现不连续查找-->
        <div class="index">
    <a class="last_page" href="article.php?id=<?php echo "{$pre}"; ?>">上一篇</a>
    <a class="next_page" href="article.php?id=<?php echo "{$next}"; ?>">下一篇</a>
</div>
</div>
<div id="slidebar">
    
</div>
</div>

