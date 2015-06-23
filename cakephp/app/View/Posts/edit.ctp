<h1>記事編集</h1>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->input('id');
echo $this->Form->end('編集');

?>
