<div class="intervals view">
<h2><?php echo __('Interval'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interval['Interval']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($interval['Interval']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($interval['Interval']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($interval['Interval']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interval'), array('action' => 'edit', $interval['Interval']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interval'), array('action' => 'delete', $interval['Interval']['id']), null, __('Are you sure you want to delete # %s?', $interval['Interval']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Intervals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interval'), array('action' => 'add')); ?> </li>
	</ul>
</div>
