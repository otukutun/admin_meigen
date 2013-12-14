<div class="tags form">
<?php echo $this->Form->create('Tag', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'label' => array(
            'class' => 'col col-md-3 control-label'
        ),
        'wrapInput' => 'col col-md-9',
        'class' => 'form-control'
    ),
    'class' => 'well form-horizontal',
    'type' => 'file'
)); ?>
	<fieldset>
		<legend><?php echo __('タグ追加'); ?></legend>
	<?php
		echo $this->Form->input('name');
		//echo $this->Form->input('Meigen');
	?>
	</fieldset>
        <div class="form-group">
             <div class="col col-md-9 col-md-offset-3">
            <?php echo $this->Form->submit('保存', array(
                'div' => false,
                'class' => 'btn btn-primary'
            )); ?>
                    <button type="button" class="btn btn-default">キャンセル</button>
             </div>
<?php echo $this->Form->end(); ?>
</div>
