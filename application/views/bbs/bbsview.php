<h1>MVC掲示板</h1>
<br/>

<a href="/bbs/add">投稿する</a><br/><br/>
<table>
    <tr>
    <th>投稿者</th>
    <th>コメント</th>
    <th>日時</th>

    <?php

    for ($i = 0; $i < count($query); $i++) {
        $arr = $query[$i];
       
        echo "<tr>";
        echo "<td><a href='/bbs/show/{$arr->id}'>{$arr->name}</a></td>";
        echo "<td><a href='/bbs/show/{$arr->id}'>{$arr->content}</a></td>";
        echo "<td><a href='/bbs/show/{$arr->id}'>{$arr->date}</a></td>";
        echo "</tr>";
       
    }
    ?>
</table>
    

