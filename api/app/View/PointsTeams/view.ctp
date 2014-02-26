<div class="pointsTeams view">
<h2><?php echo __('Points Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pointsTeam['PointsTeam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pointsTeam['Point']['name'], array('controller' => 'points', 'action' => 'view', $pointsTeam['Point']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pointsTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $pointsTeam['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pointsTeam['PointsTeam']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($pointsTeam['PointsTeam']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Points Team'), array('action' => 'edit', $pointsTeam['PointsTeam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Points Team'), array('action' => 'delete', $pointsTeam['PointsTeam']['id']), null, __('Are you sure you want to delete # %s?', $pointsTeam['PointsTeam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Points Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Points Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
