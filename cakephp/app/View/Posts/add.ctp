<h1>新規記事</h2>
<form id="PostAddForm" action="/posts/add/" method="post">
  <input type="text" name="title">
  <input type="text" name="body">
  <input type="submit" value="send">
</form>
<?php
/*
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->end('投稿');
*/
?>

