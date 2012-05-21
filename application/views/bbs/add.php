<?php
$format = "%Y年%m月%d日 %h:%i %a";
$time = time();
?>

<h1>投稿画面</h1>
<br/><a href="/cisample/bbs">一覧に戻る</a>
<br/><br/>

<form action="/cisample/bbs/add" method="post">
    <label for="name"><b>投稿者</b></label><br/>
    <input type="text" name="name" size="40" placeholder="名前を記入してください。"/><br/>

    <label for="content"><b>コメント</b></label><br/>
    <input type="text" name="content" size="40"  placeholder="記入してください。"/><br/>

    <label for="date"><b>日付</b></label><br/>
    <input type="text" name="date" size="40"  placeholder="<?php echo mdate($format,$time);?>"/><br/>

    <input type="submit" value="投稿する">
</form>
