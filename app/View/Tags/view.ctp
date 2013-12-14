<div class="tags view">
<h2><?php echo __('Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), null, __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meigens'), array('controller' => 'meigens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meigen'), array('controller' => 'meigens', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Meigens'); ?></h3>
	<?php if (!empty($tag['Meigen'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Meigen'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Product'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Author Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tag['Meigen'] as $meigen): ?>
		<tr>
			<td><?php echo $meigen['id']; ?></td>
			<td><?php echo $meigen['meigen']; ?></td>
			<td><?php echo $meigen['image']; ?></td>
			<td><?php echo $meigen['product']; ?></td>
			<td><?php echo $meigen['author']; ?></td>
			<td><?php echo $meigen['user_id']; ?></td>
			<td><?php echo $meigen['created']; ?></td>
			<td><?php echo $meigen['modified']; ?></td>
			<td><?php echo $meigen['category_id']; ?></td>
			<td><?php echo $meigen['author_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meigens', 'action' => 'view', $meigen['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meigens', 'action' => 'edit', $meigen['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meigens', 'action' => 'delete', $meigen['id']), null, __('Are you sure you want to delete # %s?', $meigen['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meigen'), array('controller' => 'meigens', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
