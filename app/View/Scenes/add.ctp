<div class="scenes form">
<?php echo $this->Form->create('Scene'); ?>
	<fieldset>
		<legend><?php echo __('Add Scene'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('Meigen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Scenes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meigens'), array('controller' => 'meigens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meigen'), array('controller' => 'meigens', 'action' => 'add')); ?> </li>
	</ul>
</div>
