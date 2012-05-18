<h1>MVC掲示板</h1>
<br/>

<a href="">投稿する</a><br/><br/>
<table>
    <tr>
    <th>投稿者</th>
    <th>コメント</th>
    <th>日時</th>

    <?php

    for ($i = 0; $i < count($query); $i++) {
        $arr = $query[$i];
       
        echo "<tr>";
        echo "<td><a href=''>{$arr->name}</a></td>";
        echo "<td><a href=''>{$arr->content}</a></td>";
        echo "<td><a href=''>{$arr->date}</a></td>";
        echo "</tr>";
       
    }
    ?>
</table>
    

