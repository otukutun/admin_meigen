<div class="tags index">
	<h2><?php echo __('Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tags as $tag): ?>
	<tr>
		<td><?php echo h($tag['Tag']['id']); ?>&nbsp;</td>
		<td><?php echo h($tag['Tag']['name']); ?>&nbsp;</td>
		<td><?php echo h($tag['Tag']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tag['Tag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tag['Tag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tag['Tag']['id']), null, __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?>
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
