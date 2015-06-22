<h1>ブログ作成</h1>


<table border=2>
<?php foreach($posts as $post): ?>
<tr>
  <td><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>
  <td><?php echo $post['Post']['body']; ?></td>
</tr>
<?php endforeach; ?>
</table>
