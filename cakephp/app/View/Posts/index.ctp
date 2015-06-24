<h1>ブログ作成</h1>


<table border=2>
<?php foreach($posts as $post): ?>
<tr>
  <td><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>
  <td><?php echo $this->Html->link('編集', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?></td>
</tr>
<?php endforeach; ?>
</table>
<h3><?php echo $this->Html->link('追加投稿', array('controller' => 'posts', 'action' => 'add')); ?></h3>
