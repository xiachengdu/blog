<?php
/**
* 正文内容页
*/
    $id = $_GET['id'];
    echo "<br>";
    $db = mysql_connect($db_host,$db_user,$db_password);
    mysql_select_db($db_database,$db);
    $sql = "select t.post_date,t.post_content,t.post_author,t.post_title from blog_posts t where t.id={$id}";
    $result = mysql_query($sql);
    $result_row = mysql_num_rows($result);
    if($result_row == 0) {
        echo "Opps!..there is something wrong here";
    }else{
        while($row = mysql_fetch_assoc($result)) {
            echo "{$row['post_title']} <br>";
            echo "{$row['post_author']} <br>";
            echo "{$row['post_date']} <br>";
            echo "{$row['post_content']} <br>";
        }
    }
?>
//TODO
<div>
    <a href="article.php?id=<?php echo "{$id}-1" ?>">Last</a>
    <a href="article.php?id=<?php echo "{$id}+1"?>">Next</a>
</div>
