<div class="authors index">
	<h2><?php echo __('Authors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('job'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($authors as $author): ?>
	<tr>
		<td><?php echo h($author['Author']['id']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['name']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['description']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['job']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['image']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['created']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $author['Author']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $author['Author']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $author['Author']['id']), null, __('Are you sure you want to delete # %s?', $author['Author']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
    <div class="paging">
    <?php echo $this->Paginator->pagination(['ul' =>'pagination']); ?>
	</div>
</div>
