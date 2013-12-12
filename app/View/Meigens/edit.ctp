<div class="meigens form">
<?php echo $this->Form->create('Meigen'); ?>
	<fieldset>
		<legend><?php echo __('Edit Meigen'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('meigen');
		echo $this->Form->input('image');
		echo $this->Form->input('product');
		echo $this->Form->input('author');
		echo $this->Form->input('user_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('author_id');
		echo $this->Form->input('Scene');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Meigen.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Meigen.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meigens'), array('action' => 'index')); ?></li>
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
