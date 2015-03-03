<?php
    require_once 'readfile3.php';
    $text = "名無しにして頂戴<>sage<>2010/08/02(月) 14:59:42 ID:???<> 林檎も呆れとったわ <>";
    $data = data_from_line($text);

    $html = '<dt>397 ：<a href="mailto:'.$data['mail'].'"><b>'.$data['name'].'</b></a>：'.$data['day'];
    $html.= '</dt><dd>'.$data['main'].'</dd>';
?>

<html>
<head>
    <title>test</title>
<body bgcolor=#efefef text=black link=blue alink=red vlink=#660099>

<hr style="background-color:#888;color:#888;border-width:0;height:1px;position:relative;top:-.4em;">
<h1 style="color:red;font-size:larger;font-weight:normal;margin:-.5em 0 0;">イチローは「スーパースター」なんかじゃない</h1>
<div>
<dl class="thread" style="margin-right:185px;word-wrap:break-word; ">

<?php echo $html; ?>

    <hr />

<form action="get.php" method="get">
    <input type="hidden" name="key" value="128061905" />
    名前:<input type="text" name="main" />メール:<input type="text" name="main" /><br />
    <textarea type="text" name="main" rows="4" cols="50"></textarea><br />
    <input type="submit" value="書き込み"/>
</form>
</dl>
</div>


</body>
</html>