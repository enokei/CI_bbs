<h1>編集画面</h1>
<br><a href="/cisample/bbs">一覧に戻る</a>
<br><br>

<form action="/cisample/bbs/edit/<?php echo $query->id; ?>" method="post">
    
    <label for="name"><b>投稿者</b></label><br/>
    <input type="text" name="name" size="40" value="<?php echo $query->name;?>"/><br>

    <label for="content"><b>コメント</b></label><br/>
    <input type="text" name="content" size="40"  value="<?php echo $query->content;?>"/><br>

    <label for="date"><b>日付</b></label><br>
    <input type="text" name="date" size="40" value="<?php echo $query->date;?>"/><br>

    <input type="submit" value="編集する"/>
    
</form>