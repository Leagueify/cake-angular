<div class="leaguesTags index">
	<h2><?php echo __('Leagues Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('league_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tag_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leaguesTags as $leaguesTag): ?>
	<tr>
		<td><?php echo h($leaguesTag['LeaguesTag']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($leaguesTag['League']['name'], array('controller' => 'leagues', 'action' => 'view', $leaguesTag['League']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($leaguesTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $leaguesTag['Tag']['id'])); ?>
		</td>
		<td><?php echo h($leaguesTag['LeaguesTag']['created']); ?>&nbsp;</td>
		<td><?php echo h($leaguesTag['LeaguesTag']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $leaguesTag['LeaguesTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $leaguesTag['LeaguesTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $leaguesTag['LeaguesTag']['id']), null, __('Are you sure you want to delete # %s?', $leaguesTag['LeaguesTag']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Leagues Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
