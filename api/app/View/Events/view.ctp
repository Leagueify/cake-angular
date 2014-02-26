<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Source'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Source']['name'], array('controller' => 'sources', 'action' => 'view', $event['Source']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Update'); ?></dt>
		<dd>
			<?php echo h($event['Event']['last_update']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Error'); ?></dt>
		<dd>
			<?php echo h($event['Event']['last_error']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($event['Event']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($event['Event']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sources'), array('controller' => 'sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Source'), array('controller' => 'sources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Leagues'); ?></h3>
	<?php if (!empty($event['League'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Logo'); ?></th>
		<th><?php echo __('Motto'); ?></th>
		<th><?php echo __('Started Date'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Public'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['League'] as $league): ?>
		<tr>
			<td><?php echo $league['id']; ?></td>
			<td><?php echo $league['name']; ?></td>
			<td><?php echo $league['logo']; ?></td>
			<td><?php echo $league['motto']; ?></td>
			<td><?php echo $league['started_date']; ?></td>
			<td><?php echo $league['event_id']; ?></td>
			<td><?php echo $league['public']; ?></td>
			<td><?php echo $league['created']; ?></td>
			<td><?php echo $league['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'leagues', 'action' => 'view', $league['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'leagues', 'action' => 'edit', $league['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'leagues', 'action' => 'delete', $league['id']), null, __('Are you sure you want to delete # %s?', $league['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
