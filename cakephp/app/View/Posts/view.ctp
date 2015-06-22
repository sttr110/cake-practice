<h1>投稿記事</h1>

<?php echo $post['Post']['title']; ?>
<br>
<?php echo $post['Post']['body']; ?>
<br>
<br>
<P><?php echo $this->Html->Link('記事一覧へ', array('controller' => 'posts', 'action' => 'index')); ?></p>
