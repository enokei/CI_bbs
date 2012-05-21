<h1>編集画面</h1>
<br/><a href="/cisample/bbs">一覧に戻る</a>
<br/><br/>

<form action="/cisample/bbs/edit" method="post">
    <label for="name"><b>投稿者</b></label><br/>
    <input type="text" name="name" size="40" value="{$query->name}"/><br/>

    <label for="content"><b>コメント</b></label><br/>
    <input type="text" name="content" size="40"  value="{$query->content}"/><br/>

    <input type="hidden" name="date" />

    <input type="submit" value="編集する">
</form>