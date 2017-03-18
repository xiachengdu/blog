<?php
/**
* 首页展示页，显示最近文章标题
*/
    $db = mysql_connect($db_host,$db_user,$db_password);
    mysql_select_db($db_database,$db);
?>
<div id = "main_page">
    <div id = "content">
<?php
    $sql = "select t.id,t.post_author,t.post_date,t.post_title from blog_posts t";
    $result = mysql_query($sql);
    $result_row = mysql_num_rows($result);
    if($result_row == 0) {
        echo "Opps!..there is something wrong here";
    }else{
        while($row = mysql_fetch_assoc($result)) {
            ?>
            <div class = "digestcard">
            <div class = "digest">
                <a href = "article.php?id=<?php echo "{$row['id']}";?>">
                    <?php echo "{$row['post_title']} <br><br>";?>
                </a>
            </div>
            <div class = "post_author"><?php echo "{$row['post_author']}"; ?></div>
            <div class = "post_date"><?php echo "{$row['post_date']} <br>"; ?></div>
            </div>          
            <?php
        }
    }
 ?>
 </div>
