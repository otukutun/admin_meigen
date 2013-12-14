<div class="meigens form">
<?php echo $this->Form->create('Meigen', array(
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
		<legend><?php echo __('名言投稿'); ?></legend>
	<?php
		echo $this->Form->input('meigen');
		echo $this->Form->input('image',['type' => 'file']);
		echo $this->Form->input('product');
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		//echo $this->Form->input('category_id');
		echo $this->Form->input('author_id');
		echo $this->Form->input('Scene');
		echo $this->Form->input('Tag');
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
    </div>
<?php echo $this->Form->end(); ?>
</div>
