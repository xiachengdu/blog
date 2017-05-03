<?php
/**
 * Created by PhpStorm.
 * User: xcd
 * Date: 2017/3/19
 * Time: 下午 08:24
 */
$post_title = $_POST["post_title"];
$post_author = $_POST["post_author"];
$post_content = $_POST["post_content"];
require_once ('../config.php');
$db = mysql_connect($db_host,$db_user,$db_password);
mysql_select_db($db_database,$db);
$sql = "insert into blog_posts(post_author,post_date,post_title,post_content,post_status) VALUE ('$post_author','2017-03-21 10:28:18','$post_title','$post_content','open')";
$result = mysql_query($sql)or die("Error in query: $sql. ".mysql_error());
mysql_close($db);


?>

