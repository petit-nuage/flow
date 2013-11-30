<div class="releases index">
	<h2><?php echo __('Releases'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('points'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('contributors'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('started'); ?></th>
			<th><?php echo $this->Paginator->sort('finished'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($releases as $release): ?>
	<tr>
		<td><?php echo h($release['Release']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($release['Project']['name'], array('controller' => 'projects', 'action' => 'view', $release['Project']['id'])); ?>
		</td>
		<td><?php echo h($release['Release']['status']); ?>&nbsp;</td>
		<td><?php echo h($release['Release']['points']); ?>&nbsp;</td>
		<td><?php echo h($release['Release']['name']); ?>&nbsp;</td>
		<td><?php echo h($release['Release']['description']); ?>&nbsp;</td>
		<td><?php echo h($release['Release']['contributors']); ?>&nbsp;</td>
		<td><?php echo h($release['Release']['created']); ?>&nbsp;</td>
		<td><?php echo h($release['Release']['modified']); ?>&nbsp;</td>
		<td><?php echo h($release['Release']['started']); ?>&nbsp;</td>
		<td><?php echo h($release['Release']['finished']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $release['Release']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $release['Release']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $release['Release']['id']), null, __('Are you sure you want to delete # %s?', $release['Release']['id'])); ?>
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
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Release'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>