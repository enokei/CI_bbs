<h1>投稿確認</h1>
<br/><a href="/cisample/bbs">一覧に戻る</a>
<br/><br/>

<table>

    <?php

    echo "<tr><th>投稿者</th><td>{$query->name}</td></tr>";
    echo "<tr><th>コメント</th><td>{$query->content}</td></tr>";
    echo "<tr><th>日時</th><td>{$query->date}</td></tr>";

    ?>
</table>
<br/>
　　　<a href="/cisample/bbs/edit">この投稿を編集する</a>
<br/>
    
    
