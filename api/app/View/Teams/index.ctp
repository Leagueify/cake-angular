<div class="teams index">
	<h2><?php echo __('Teams'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('league_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($teams as $team): ?>
	<tr>
		<td><?php echo h($team['Team']['id']); ?>&nbsp;</td>
		<td><?php echo h($team['Team']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($team['League']['name'], array('controller' => 'leagues', 'action' => 'view', $team['League']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($team['User']['name'], array('controller' => 'users', 'action' => 'view', $team['User']['id'])); ?>
		</td>
		<td><?php echo h($team['Team']['created']); ?>&nbsp;</td>
		<td><?php echo h($team['Team']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $team['Team']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $team['Team']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $team['Team']['id']), null, __('Are you sure you want to delete # %s?', $team['Team']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
