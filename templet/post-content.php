<?php
/**
 * Created by PhpStorm.
 * User: xcd
 * Date: 2017/3/19
 * Time: 下午 08:17
 */
?>
<form id="edit_post_content" action="/blog/templet/post-save.php" method="post">
    title:<div id="input_post_title">
        <input type="text" name="post_title" autocomplete="off">
    </div>
    author:<div id="input_post_author">
        <input type="text" name="post_author" autocomplete="off">
    </div>

    content:<div id="input_post_content">
        <textarea name="post_content" rows="10" cols="100" tabindex="4"></textarea>
    </div>
    <input type="submit" value="submit" name="submit">
</form>
