<div class="meigens view">
<h2><?php echo __('Meigen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($meigen['Meigen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meigen'); ?></dt>
		<dd>
			<?php echo h($meigen['Meigen']['meigen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($meigen['Meigen']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo h($meigen['Meigen']['product']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($meigen['Meigen']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meigen['User']['id'], array('controller' => 'users', 'action' => 'view', $meigen['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($meigen['Meigen']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($meigen['Meigen']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meigen['Category']['name'], array('controller' => 'categories', 'action' => 'view', $meigen['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meigen['Author']['name'], array('controller' => 'authors', 'action' => 'view', $meigen['Author']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meigen'), array('action' => 'edit', $meigen['Meigen']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meigen'), array('action' => 'delete', $meigen['Meigen']['id']), null, __('Are you sure you want to delete # %s?', $meigen['Meigen']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meigens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meigen'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('controller' => 'scenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Scenes'); ?></h3>
	<?php if (!empty($meigen['Scene'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meigen['Scene'] as $scene): ?>
		<tr>
			<td><?php echo $scene['id']; ?></td>
			<td><?php echo $scene['name']; ?></td>
			<td><?php echo $scene['description']; ?></td>
			<td><?php echo $scene['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'scenes', 'action' => 'view', $scene['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'scenes', 'action' => 'edit', $scene['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'scenes', 'action' => 'delete', $scene['id']), null, __('Are you sure you want to delete # %s?', $scene['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($meigen['Tag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meigen['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id']; ?></td>
			<td><?php echo $tag['name']; ?></td>
			<td><?php echo $tag['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), null, __('Are you sure you want to delete # %s?', $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
