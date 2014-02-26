<div class="pointsTeams form">
<?php echo $this->Form->create('PointsTeam'); ?>
	<fieldset>
		<legend><?php echo __('Edit Points Team'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('point_id');
		echo $this->Form->input('team_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PointsTeam.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PointsTeam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Points Teams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
