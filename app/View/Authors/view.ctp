<div class="authors view">
<h2><?php echo __('Author'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($author['Author']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($author['Author']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($author['Author']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo h($author['Author']['job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($author['Author']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($author['Author']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($author['Author']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Author'), array('action' => 'edit', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Author'), array('action' => 'delete', $author['Author']['id']), null, __('Are you sure you want to delete # %s?', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('action' => 'add')); ?> </li>
	</ul>
</div>
