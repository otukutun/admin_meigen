<div class="meigens index">
    <h2><?php echo __('Meigens'); ?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('meigen'); ?></th>
            <th><?php echo $this->Paginator->sort('image'); ?></th>
            <th><?php echo $this->Paginator->sort('product'); ?></th>
            <th><?php echo $this->Paginator->sort('author'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('category_id'); ?></th>
            <th><?php echo $this->Paginator->sort('author_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($meigens as $meigen): ?>
    <tr>
        <td><?php echo h($meigen['Meigen']['id']); ?>&nbsp;</td>
        <td><?php echo h($meigen['Meigen']['meigen']); ?>&nbsp;</td>
        <td><?php echo h($meigen['Meigen']['image']); ?>&nbsp;</td>
        <td><?php echo h($meigen['Meigen']['product']); ?>&nbsp;</td>
        <td><?php echo h($meigen['Meigen']['author']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($meigen['User']['id'], array('controller' => 'users', 'action' => 'view', $meigen['User']['id'])); ?>
        </td>
        <td><?php echo h($meigen['Meigen']['created']); ?>&nbsp;</td>
        <td><?php echo h($meigen['Meigen']['modified']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($meigen['Category']['name'], array('controller' => 'categories', 'action' => 'view', $meigen['Category']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link($meigen['Author']['name'], array('controller' => 'authors', 'action' => 'view', $meigen['Author']['id'])); ?>
        </td>
        <td class="actions">
            <?php echo $this->Html->link(__('View'), array('action' => 'view', $meigen['Meigen']['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meigen['Meigen']['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meigen['Meigen']['id']), null, __('Are you sure you want to delete # %s?', $meigen['Meigen']['id'])); ?>
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
